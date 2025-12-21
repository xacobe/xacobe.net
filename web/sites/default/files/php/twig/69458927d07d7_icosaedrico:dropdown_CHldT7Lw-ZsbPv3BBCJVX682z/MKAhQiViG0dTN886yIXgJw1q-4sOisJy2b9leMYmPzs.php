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

/* icosaedrico:dropdown */
class __TwigTemplate_847968732dcbee2ba28e64b2c05346bb extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.icosaedrico--dropdown"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "icosaedrico:dropdown"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "icosaedrico:dropdown"));
        $context["wrapper_classes"] = ["dropdown", (((($tmp =         // line 3
($context["position_x"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("dropdown-" . ($context["position_x"] ?? null))) : ("")), (((($tmp =         // line 4
($context["position_y"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("dropdown-" . ($context["position_y"] ?? null))) : ("")), (((($tmp =         // line 5
($context["hover"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("dropdown-hover") : (""))];
        // line 7
        yield "
";
        // line 8
        $context["classes"] = ["p-2", "shadow", "menu", "dropdown-content", "z-[1]", "bg-base-100", "rounded-box", "w-52"];
        // line 18
        yield "
";
        // line 19
        if ((($tmp = ($context["details_tag"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "  <details class=\"dropdown dropdown-end\">
    <summary class=\"m-1 btn btn-ghost\">";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</summary>
  ";
        } else {
            // line 23
            yield "    <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["wrapper_classes"] ?? null)], "method", false, false, true, 23), "html", null, true);
            yield ">
      <div tabindex=\"0\" role=\"button\" class=\"btn btn-sm m-1\">";
            // line 24
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</div>
";
        }
        // line 26
        yield "
  <ul";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", ["inline"], "method", false, false, true, 27), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 27), "html", null, true);
        yield ">";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
            // line 29
            yield "<li";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["items"], "attributes", [], "any", false, false, true, 29), "html", null, true);
            yield ">
          ";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["items"], "link", [], "any", false, false, true, 30), "html", null, true);
            yield "
      </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['items'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "</ul>

";
        // line 35
        if ((($tmp = ($context["details_tag"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "    </details>
  ";
        } else {
            // line 38
            yield "    </div>
";
        }
        // line 40
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["position_x", "position_y", "hover", "details_tag", "title", "attributes", "links"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "icosaedrico:dropdown";
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
        return array (  117 => 40,  113 => 38,  109 => 36,  107 => 35,  103 => 33,  95 => 30,  90 => 29,  86 => 28,  83 => 27,  80 => 26,  75 => 24,  70 => 23,  65 => 21,  62 => 20,  60 => 19,  57 => 18,  55 => 8,  52 => 7,  50 => 5,  49 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "icosaedrico:dropdown", "themes/custom/icosaedrico/components/molecules/dropdown/dropdown.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 19, "for" => 28];
        static $filters = ["escape" => 21];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
