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

/* icosaedrico:button */
class __TwigTemplate_152de6e3e56812f2cecf85a25212ad0b extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.icosaedrico--button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "icosaedrico:button"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "icosaedrico:button"));
        // line 2
        $context["classes"] = ["btn", ("btn-" . \Drupal\Component\Utility\Html::getClass(        // line 4
($context["button_color"] ?? null))), (((        // line 5
($context["button_color"] ?? null) == "link")) ? ("p-0") : ("")), (((($tmp =         // line 6
($context["button_size"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("btn-" . ($context["button_size"] ?? null))) : ("")), (((        // line 7
($context["button_size"] ?? null) == "sm")) ? ("text-xs") : ("")), (((($tmp =         // line 8
($context["button_text_size"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("btn-" . ($context["button_text_size"] ?? null))) : ("")), (((($tmp =         // line 9
($context["button_outline"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline") : ("")), (((($tmp =         // line 10
($context["button_glass"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-glass") : ("")), (((        // line 11
($context["button_disable"] ?? null) == "class")) ? ("btn-disable") : ("")), (((($tmp =         // line 12
($context["button_shape"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("btn-" . ($context["button_shape"] ?? null))) : (""))];
        // line 15
        yield "
<";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_tag"] ?? null), "html", null, true);
        yield " href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_href"] ?? null), "html", null, true);
        yield "\" target=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("button_target", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_target"] ?? null), "_self")) : ("_self")), "html", null, true);
        yield "\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(($context["button_text"] ?? null)), "html", null, true);
        yield "\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 16), "html", null, true);
        yield ">
  ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_text"] ?? null), "html", null, true);
        yield "
  ";
        // line 18
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["button_icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    ";
            $context["icon_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
            // line 20
            yield "    
    ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "icosaedrico:icon", ["icon_name" =>             // line 22
($context["button_icon"] ?? null), "icon_svg_size" => ((            // line 23
array_key_exists("button_icon_size", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_icon_size"] ?? null), "16")) : ("16")), "icon_svg_classes" => "inline-block", "attributes" =>             // line 25
($context["icon_attributes"] ?? null)], false));
            // line 26
            yield "
  ";
        }
        // line 28
        yield "</";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button_tag"] ?? null), "html", null, true);
        yield ">";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["button_color", "button_size", "button_text_size", "button_outline", "button_glass", "button_disable", "button_shape", "button_tag", "button_href", "button_target", "button_text", "attributes", "button_icon", "button_icon_size"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "icosaedrico:button";
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
        return array (  95 => 28,  91 => 26,  89 => 25,  88 => 23,  87 => 22,  86 => 21,  83 => 20,  80 => 19,  78 => 18,  74 => 17,  62 => 16,  59 => 15,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "icosaedrico:button", "themes/custom/icosaedrico/components/atoms/button/button.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 18];
        static $filters = ["clean_class" => 4, "escape" => 16, "default" => 16, "striptags" => 16];
        static $functions = ["create_attribute" => 19, "include" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'default', 'striptags'],
                ['create_attribute', 'include'],
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
