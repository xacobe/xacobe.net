<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/icosaedrico/templates/field/field--field-tags.html.twig */
class __TwigTemplate_c00d9358aa22cb2a9713ed7ac986aa7a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        $context["title_classes"] = [(((        // line 41
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 44
        yield "
";
        // line 45
        if ((($tmp = ($context["label_hidden"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "  ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 47
                yield "    <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["flex max-w-prose mx-auto justify-end items-center"], "method", false, false, true, 47), "html", null, true);
                yield ">
      ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 49
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "icosaedrico:badge", ["badge_text" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 49)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 49), "#title", [], "array", false, false, true, 49)), "badge_href" => (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 49)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 49), "#url", [], "array", false, false, true, 49)), "badge_color" => "tag"]));
                    yield "
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                yield "    </div>
  ";
            } else {
                // line 53
                yield "   ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 54
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "icosaedrico:badge", ["badge_text" => (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 54)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 54), "#title", [], "array", false, false, true, 54)), "badge_href" => (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 54)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 54), "#url", [], "array", false, false, true, 54)), "badge_color" => "tag"]));
                    yield "
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                yield "  ";
            }
        } else {
            // line 58
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["flex max-w-prose mx-auto justify-end"], "method", false, false, true, 58), "html", null, true);
            yield ">
    <div";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null), "flex items-center text-sm me-3"], "method", false, false, true, 59), "html", null, true);
            yield ">
    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-tag-fill\" viewBox=\"0 0 16 16\">
      <path d=\"M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0\"/>
    </svg>
    <span>";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield ":</span>
  </div>
    ";
            // line 65
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "      <div>
    ";
            }
            // line 68
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 69
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "icosaedrico:badge", ["badge_text" => (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 69)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 69), "#title", [], "array", false, false, true, 69)), "badge_href" => (($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 69)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 69), "#url", [], "array", false, false, true, 69)), "badge_color" => "neutral"]));
                yield "
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "    ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 72
                yield "      </div>
    ";
            }
            // line 74
            yield "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label_display", "label_hidden", "multiple", "attributes", "items", "title_attributes", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/icosaedrico/templates/field/field--field-tags.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  202 => 74,  198 => 72,  195 => 71,  178 => 69,  160 => 68,  156 => 66,  154 => 65,  149 => 63,  142 => 59,  137 => 58,  133 => 56,  116 => 54,  98 => 53,  94 => 51,  77 => 49,  60 => 48,  55 => 47,  52 => 46,  50 => 45,  47 => 44,  45 => 41,  44 => 40,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/icosaedrico/templates/field/field--field-tags.html.twig", "/var/www/html/web/themes/custom/icosaedrico/templates/field/field--field-tags.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 40, "if" => 45, "for" => 48];
        static $filters = ["escape" => 47];
        static $functions = ["include" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['include'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
