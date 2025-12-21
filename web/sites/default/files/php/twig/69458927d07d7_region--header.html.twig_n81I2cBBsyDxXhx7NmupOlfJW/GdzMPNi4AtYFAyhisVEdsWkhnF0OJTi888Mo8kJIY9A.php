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

/* themes/custom/icosaedrico/templates/layouts/region--header.html.twig */
class __TwigTemplate_f85b6e24348c1af91741b7656929195b extends Template
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
        // line 15
        yield "
";
        // line 16
        $context["classes"] = ["navbar", "bg-base-100", "border-b", "border-black-200"];
        // line 22
        yield "
<div ";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 23), "html", null, true);
        yield ">
  <div class=\"navbar-start w-full lg:w-1/4 items-start\">
    <div class=\"dropdown me-2 lg:hidden\">
      <div tabindex=\"0\" role=\"button\" class=\"btn btn-ghost ps-0\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h7\" /></svg>
      </div>
      <ul tabindex=\"0\" class=\"menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52\">
        ";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "main_menu__mobile", [], "any", false, false, true, 30), "html", null, true);
        yield "
      </ul>
    </div>
    ";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "icosaedrico_site_branding", [], "any", false, false, true, 33), "html", null, true);
        yield "
  </div>
  <div class=\"navbar-center hidden lg:w-1/2 lg:inline-flex justify-center\">
    ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "main_menu__desktop", [], "any", false, false, true, 36), "html", null, true);
        yield "
     ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "main_menu__mobile", "main_menu__desktop", "icosaedrico_site_branding", "icosaedrico_socialmenu", "icosaedrico_languageswitcherinterfacetext"), "html", null, true);
        // line 43
        yield "
  </div>
  <div class=\"navbar-end w-auto lg:w-1/4\">

    ";
        // line 48
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "icosaedrico_languageswitcherinterfacetext", [], "any", false, false, true, 48), "html", null, true);
        yield "
      ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "icosaedrico_socialmenu", [], "any", false, false, true, 49), "html", null, true);
        yield "

  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/icosaedrico/templates/layouts/region--header.html.twig";
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
        return array (  91 => 49,  86 => 48,  80 => 43,  78 => 37,  74 => 36,  68 => 33,  62 => 30,  52 => 23,  49 => 22,  47 => 16,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/icosaedrico/templates/layouts/region--header.html.twig", "/var/www/html/web/themes/custom/icosaedrico/templates/layouts/region--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16];
        static $filters = ["escape" => 23, "without" => 37];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'without'],
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
