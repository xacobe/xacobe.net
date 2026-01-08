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

/* themes/custom/icosaedrico/templates/content/node--page--full.html.twig */
class __TwigTemplate_b081102cac2e1987d77b26994612bfa0 extends Template
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
        // line 70
        yield "<section ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  ";
        // line 71
        if ((($tmp = ($context["display_submitted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "    <header>

      ";
            // line 74
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
            yield "
      ";
            // line 75
            if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
                // line 76
                yield "        <h2 class=\"text-xl py-4 mt-2 pb-4\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true);
                yield "><a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
                yield "\" rel=\"bookmark\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "</a></h2>
      ";
            }
            // line 78
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
            yield "

      <div ";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["flex items-center bg-neutral"], "method", false, false, true, 80), "html", null, true);
            yield ">
        <div class=\"p-1 bg-neutral\">

          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-calendar-date mx-1\" viewBox=\"0 0 16 16\">
            <path d=\"M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23\"/>
            <path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z\"/>
          </svg>

        </div>
        <span class=\"text-sm bg-neutral p-1 ps-2\">";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true);
            yield "</span>
      </div>

    </header>
  ";
        }
        // line 94
        yield "
    <div ";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true);
        yield ">
      ";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
    </div>

  <footer class=\"capitalize mt-2 text-center max-w-max\">
    ";
        // line 100
        if ((($tmp =  !($context["teaser"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "      ";
            // line 102
            yield "      ";
            $context["user_picture_file"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "uid", [], "any", false, false, true, 102), "entity", [], "any", false, false, true, 102), "user_picture", [], "any", false, false, true, 102), "entity", [], "any", false, false, true, 102), "fileuri", [], "any", false, false, true, 102);
            // line 103
            yield "      ";
            $context["user_picture_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($context["user_picture_file"] ?? null));
            // line 104
            $context["user_picture_width"] = ((array_key_exists("user_picture_width", $context)) ? (Twig\Extension\CoreExtension::default(($context["user_picture_width"] ?? null), "72")) : ("72"));
            // line 105
            $context["user_picture_height"] = ((array_key_exists("user_picture_height", $context)) ? (Twig\Extension\CoreExtension::default(($context["user_picture_height"] ?? null), "72")) : ("72"));
            // line 106
            yield "
";
            // line 107
            yield from $this->load("icosaedrico:avatar", 107)->unwrap()->yield(CoreExtension::merge($context, ["user_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 108
($context["node"] ?? null), "uid", [], "any", false, false, true, 108), "entity", [], "any", false, false, true, 108), "name", [], "any", false, false, true, 108), "value", [], "any", false, false, true, 108), "user_picture_url" =>             // line 109
($context["user_picture_url"] ?? null), "user_picture_width" =>             // line 110
($context["user_picture_width"] ?? null), "user_picture_height" =>             // line 111
($context["user_picture_height"] ?? null)]));
            // line 113
            yield "    ";
        }
        // line 114
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
        yield "
  </footer>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "display_submitted", "title_prefix", "label", "page", "title_attributes", "url", "title_suffix", "author_attributes", "date", "content_attributes", "content", "teaser", "node", "metadata"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/icosaedrico/templates/content/node--page--full.html.twig";
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
        return array (  137 => 114,  134 => 113,  132 => 111,  131 => 110,  130 => 109,  129 => 108,  128 => 107,  125 => 106,  123 => 105,  121 => 104,  118 => 103,  115 => 102,  113 => 101,  111 => 100,  104 => 96,  100 => 95,  97 => 94,  89 => 89,  77 => 80,  71 => 78,  61 => 76,  59 => 75,  55 => 74,  51 => 72,  49 => 71,  44 => 70,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/icosaedrico/templates/content/node--page--full.html.twig", "/var/www/html/web/themes/custom/icosaedrico/templates/content/node--page--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 71, "set" => 102, "include" => 107];
        static $filters = ["escape" => 70, "default" => 104];
        static $functions = ["file_url" => 103];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 'default'],
                ['file_url'],
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
