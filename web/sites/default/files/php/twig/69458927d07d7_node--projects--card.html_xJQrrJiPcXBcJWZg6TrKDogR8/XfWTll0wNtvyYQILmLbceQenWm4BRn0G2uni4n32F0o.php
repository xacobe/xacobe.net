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

/* themes/custom/icosaedrico/templates/content/node--projects--card.html.twig */
class __TwigTemplate_26b7fe9c5c044854d31fb1aba30d72b2 extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "<article ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  ";
        // line 71
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 119
        yield "</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content_attributes", "title_prefix", "label", "title_attributes", "url", "content", "title_suffix"]);        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "    <div class=\"card-body\">
      <div";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["screenshot_wrapper content flex justify-center gap-4"], "method", false, false, true, 73), "html", null, true);
        yield ">

      ";
        // line 76
        yield "      <div class=\"screenshot-title flex flex-col items-center justify-center\">
        ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
        ";
        // line 78
        if ((($tmp = ($context["label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "          <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["card-title text-center"], "method", false, false, true, 79), "html", null, true);
            yield ">
            <a href=\"";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a>
          </h2>
          ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_project_tech", [], "any", false, false, true, 82), "html", null, true);
            yield "
        ";
        }
        // line 84
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
        ";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_project_url", [], "any", false, false, true, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_project_url", [], "any", false, false, true, 86), "html", null, true);
            yield "
        ";
        }
        // line 88
        yield "      </div>

        ";
        // line 91
        yield "        <div class=\"device-wrapper screenshot-desktop\">
          <div class=\"device\" data-device=\"Macbook\" data-orientation=\"portrait\" data-color=\"black\">
            <div class=\"screen\">
              <!-- PUT CONTENTS HERE -->
             ";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_screenshot_desktop", [], "any", false, false, true, 95), "html", null, true);
        yield "
            </div>
            <div class=\"button\">
              <!-- You can hook the \"home button\" to some JavaScript events or just remove it -->
            </div>
          </div>
        </div>

        ";
        // line 104
        yield "        <div class=\"device-wrapper screenshot-mobile\">
          <div class=\"device\" data-device=\"iPhoneX\" data-orientation=\"portrait\" data-color=\"black\">
            <div class=\"screen\">
              <!-- PUT CONTENTS HERE -->
             ";
        // line 108
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_screenshot_mobile", [], "any", false, false, true, 108), "html", null, true);
        yield "
            </div>
            <div class=\"button\">
              <!-- You can hook the \"home button\" to some JavaScript events or just remove it -->
            </div>
          </div>
        </div>

      </div>
    </div>
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/icosaedrico/templates/content/node--projects--card.html.twig";
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
        return array (  140 => 108,  134 => 104,  123 => 95,  117 => 91,  113 => 88,  107 => 86,  105 => 85,  100 => 84,  95 => 82,  88 => 80,  83 => 79,  81 => 78,  77 => 77,  74 => 76,  69 => 73,  66 => 72,  59 => 71,  52 => 119,  50 => 71,  45 => 70,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/icosaedrico/templates/content/node--projects--card.html.twig", "/var/www/html/web/themes/custom/icosaedrico/templates/content/node--projects--card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 71, "if" => 78];
        static $filters = ["escape" => 70];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape'],
                [],
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
