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

/* icosaedrico:icon */
class __TwigTemplate_69241d7041cdda96def19abe99c660d2 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.icosaedrico--icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "icosaedrico:icon"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "icosaedrico:icon"));
        $context["attributes"] = ((($context["attributes"] ?? null)) ? ($context["attributes"]) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 2
        if ((($tmp = ($context["icon_href"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "  <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_href"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null), ($context["icon_href_classes"] ?? null)], "method", false, false, true, 3), "html", null, true);
            yield ">
";
        }
        // line 5
        yield "    <svg xmlns=\"http://www.w3.org/2000/svg\"
      width=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("icon_svg_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon_svg_size"] ?? null), "16")) : ("16")), "html", null, true);
        yield "\"
      height=\"";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("icon_svg_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon_svg_size"] ?? null), "16")) : ("16")), "html", null, true);
        yield "\"
      fill=\"";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("icon_svg_fill", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon_svg_fill"] ?? null), "currentColor")) : ("currentColor")), "html", null, true);
        yield "\"
      stroke=\"";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_svg_stroke"] ?? null), "html", null, true);
        yield "\"
      stroke-width=\"";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_svg_stroke_width"] ?? null), "html", null, true);
        yield "\"
      class=\"bi bi-";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_name"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon_svg_classes"] ?? null), "html", null, true);
        yield " overflow-visible\"
      viewBox=\"0 0 16 16\">
      ";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::source($this->env, (((CoreExtension::getAttribute($this->env, $this->source, ($context["componentMetadata"] ?? null), "path", [], "any", false, false, true, 13) . "/icons/") . ((array_key_exists("icon_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon_name"] ?? null), "knife")) : ("knife"))) . ".svg")));
        yield "
    </svg>
";
        // line 15
        if ((($tmp = ($context["icon_href"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "  </a>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon_href", "classes", "icon_href_classes", "icon_svg_size", "icon_svg_fill", "icon_svg_stroke", "icon_svg_stroke_width", "icon_name", "icon_svg_classes", "componentMetadata"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "icosaedrico:icon";
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
        return array (  96 => 16,  94 => 15,  89 => 13,  82 => 11,  78 => 10,  74 => 9,  70 => 8,  66 => 7,  62 => 6,  59 => 5,  51 => 3,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "icosaedrico:icon", "themes/custom/icosaedrico/components/atoms/icon/icon.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 2];
        static $filters = ["escape" => 3, "default" => 6];
        static $functions = ["create_attribute" => 1, "source" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'default'],
                ['create_attribute', 'source'],
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
