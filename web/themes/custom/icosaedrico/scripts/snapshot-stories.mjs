#!/usr/bin/env node
/**
 * Pre-renders all Storybook server stories from Drupal into static HTML files.
 * Run before `storybook build` to enable a fully static Storybook deployment.
 *
 * Usage: node scripts/snapshot-stories.mjs
 * Env:   STORYBOOK_DRUPAL_URL  (default: https://xacobe.net.ddev.site)
 */

import { readFileSync, writeFileSync, mkdirSync } from 'fs';
import { glob } from 'glob';
import path from 'path';
import { fileURLToPath } from 'url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

const DRUPAL_URL = process.env.STORYBOOK_DRUPAL_URL || 'https://xacobe.net.ddev.site';
const RENDER_URL = `${DRUPAL_URL}/storybook/stories/render`;
const OUT_DIR    = path.join(__dirname, '../.storybook/renders');

mkdirSync(OUT_DIR, { recursive: true });

// Same ID algorithm used by Storybook CSF
function slugify(str) {
  return str
    .toLowerCase()
    .replace(/\//g, '-')
    .replace(/[^a-z0-9-]/g, '-')
    .replace(/-+/g, '-')
    .replace(/^-|-$/g, '');
}

// Flatten args to a flat object suitable for URLSearchParams.
// Arrays and objects are JSON-stringified so Drupal receives them intact.
function flattenArgs(args) {
  const out = {};
  for (const [k, v] of Object.entries(args ?? {})) {
    out[k] = typeof v === 'object' && v !== null ? JSON.stringify(v) : String(v ?? '');
  }
  return out;
}

const storyFiles = await glob(
  path.join(__dirname, '../components/**/*.stories.json'),
);

let ok = 0, fail = 0;

for (const file of storyFiles) {
  const data   = JSON.parse(readFileSync(file, 'utf8'));
  const global = data.args ?? {};

  for (const story of (data.stories ?? [])) {
    const serverId = story.parameters?.server?.id;
    if (!serverId) continue;

    const storyId  = `${slugify(data.title)}--${slugify(story.name)}`;
    const args     = flattenArgs({ ...global, ...(story.args ?? {}) });

    const fetchUrl = new URL(`${RENDER_URL}/${serverId}`);
    fetchUrl.search = new URLSearchParams(args).toString();

    try {
      const res = await fetch(fetchUrl.toString());
      if (!res.ok) throw new Error(`HTTP ${res.status}`);

      const html = await res.text();
      writeFileSync(path.join(OUT_DIR, `${storyId}.html`), html, 'utf8');
      console.log(`  ✓  ${storyId}`);
      ok++;
    } catch (err) {
      console.error(`  ✗  ${storyId}: ${err.message}`);
      fail++;
    }
  }
}

console.log(`\n${ok} rendered, ${fail} failed.`);
if (fail > 0) process.exit(1);
