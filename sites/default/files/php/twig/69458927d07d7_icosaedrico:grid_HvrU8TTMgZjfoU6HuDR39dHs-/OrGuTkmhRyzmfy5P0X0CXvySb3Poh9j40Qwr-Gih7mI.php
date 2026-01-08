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

/* icosaedrico:grid */
class __TwigTemplate_5a9a0d0a2baff124737eb1df365da838 extends Template
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
            'grid_content' => [$this, 'block_grid_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.icosaedrico--grid"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "icosaedrico:grid"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "icosaedrico:grid"));
        $context["grid_classes"] = ["grid", ("gap-" .         // line 3
($context["grid_gap"] ?? null))];
        // line 5
        yield "
";
        // line 7
        $context["md_cols"] = ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((array_key_exists("grid_cols", $context)) ? (Twig\Extension\CoreExtension::default(($context["grid_cols"] ?? null), 1)) : (1))) + 1);
        // line 8
        yield "
";
        // line 9
        $context["grid_classes"] = Twig\Extension\CoreExtension::merge(($context["grid_classes"] ?? null), [("grid-cols-" .         // line 10
($context["grid_cols"] ?? null)), ("md:grid-cols-" .         // line 11
($context["md_cols"] ?? null))]);
        // line 13
        yield "
<section ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["grid_classes"] ?? null)], "method", false, false, true, 14), "html", null, true);
        yield ">
  <";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["grid_tag_item"] ?? null), "html", null, true);
        yield " class=\"grid-item\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 17
            yield "      <li>
        ";
            // line 18
            yield from $this->unwrap()->yieldBlock('grid_content', $context, $blocks);
            // line 19
            yield "      </li>
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
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "  </";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["grid_tag_item"] ?? null), "html", null, true);
        yield ">
</section>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["grid_gap", "grid_cols", "attributes", "grid_tag_item", "rows"]);        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "icosaedrico:grid";
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
        return array (  120 => 18,  111 => 21,  96 => 19,  94 => 18,  91 => 17,  74 => 16,  70 => 15,  66 => 14,  63 => 13,  61 => 11,  60 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 5,  49 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "icosaedrico:grid", "themes/custom/icosaedrico/components/templates/grid/grid.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "for" => 16, "block" => 18];
        static $filters = ["number_format" => 7, "default" => 7, "merge" => 9, "escape" => 14];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'block'],
                ['number_format', 'default', 'merge', 'escape'],
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
