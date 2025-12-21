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

/* themes/custom/icosaedrico/templates/views/views-view-unformatted--proyectos--works_archived.html.twig */
class __TwigTemplate_1a2440d6be927904322649d8cb71ed66 extends Template
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
        // line 18
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "  <h4 class=\"grid-item\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h4>
";
        }
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 22
            yield "  ";
            // line 23
            $context["row_classes"] = [(((($tmp =             // line 24
($context["default_row_class"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("views-row") : (""))];
            // line 27
            yield "  ";
            if ((($tmp = Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 27)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "    <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 28), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 28), "html", null, true);
                yield ">
  ";
            }
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 30), "html", null, true);
            // line 31
            if ((($tmp = Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 31)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "    </div>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "rows", "default_row_class"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/icosaedrico/templates/views/views-view-unformatted--proyectos--works_archived.html.twig";
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
        return array (  74 => 32,  72 => 31,  70 => 30,  64 => 28,  61 => 27,  59 => 24,  58 => 23,  56 => 22,  52 => 21,  46 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/icosaedrico/templates/views/views-view-unformatted--proyectos--works_archived.html.twig", "/var/www/html/web/themes/custom/icosaedrico/templates/views/views-view-unformatted--proyectos--works_archived.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 18, "for" => 21, "set" => 23];
        static $filters = ["escape" => 19, "striptags" => 27, "render" => 27];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'striptags', 'render'],
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
