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

/* themes/custom/icosaedrico/templates/paragraphs/paragraph--icon.html.twig */
class __TwigTemplate_0c1a6c9fddf70e221503900f98745d97 extends Template
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
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield from $this->unwrap()->yieldBlock('paragraph', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_paragraph(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "    ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "       ";
        yield from $this->load("icosaedrico:icon", 43)->unwrap()->yield(CoreExtension::merge($context, ["icon_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["content"] ?? null), "field_icon", [], "any", false, false, true, 44)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_icon", [], "any", false, false, true, 44), "#items", [], "array", false, false, true, 44)), 0, [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), "icon_href" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["content"] ?? null), "field_icon_link", [], "any", false, false, true, 45)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_icon_link", [], "any", false, false, true, 45), "#items", [], "array", false, false, true, 45)), 0, [], "any", false, false, true, 45), "uri", [], "any", false, false, true, 45), "icon_svg_size" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["content"] ?? null), "field_icon_size", [], "any", false, false, true, 46)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_icon_size", [], "any", false, false, true, 46), "#items", [], "array", false, false, true, 46)), 0, [], "any", false, false, true, 46), "value", [], "any", false, false, true, 46), "icon_svg_fill" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["content"] ?? null), "field_icon_svg_fill_color", [], "any", false, true, true, 47), "#items", [], "array", false, true, true, 47), 0, [], "any", false, true, true, 47), "value", [], "any", true, true, true, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_icon_svg_fill_color", [], "any", false, false, true, 47)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_icon_svg_fill_color", [], "any", false, false, true, 47), "#items", [], "array", false, false, true, 47)), 0, [], "any", false, false, true, 47), "value", [], "any", false, false, true, 47))) : ("")), "icon_svg_stroke" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["content"] ?? null), "field_icon_svg_stroke_color", [], "any", false, true, true, 48), "#items", [], "array", false, true, true, 48), 0, [], "any", false, true, true, 48), "value", [], "any", true, true, true, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_icon_svg_stroke_color", [], "any", false, false, true, 48)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_icon_svg_stroke_color", [], "any", false, false, true, 48), "#items", [], "array", false, false, true, 48)), 0, [], "any", false, false, true, 48), "value", [], "any", false, false, true, 48))) : ("")), "icon_svg_stroke_width" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["content"] ?? null), "field_icon_svg_stroke_width", [], "any", false, true, true, 49), "#items", [], "array", false, true, true, 49), 0, [], "any", false, true, true, 49), "value", [], "any", true, true, true, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_icon_svg_stroke_width", [], "any", false, false, true, 49)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_icon_svg_stroke_width", [], "any", false, false, true, 49), "#items", [], "array", false, false, true, 49)), 0, [], "any", false, false, true, 49), "value", [], "any", false, false, true, 49))) : (""))]));
        // line 51
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/icosaedrico/templates/paragraphs/paragraph--icon.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  79 => 51,  77 => 49,  76 => 48,  75 => 47,  74 => 46,  73 => 45,  72 => 44,  70 => 43,  58 => 42,  46 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/icosaedrico/templates/paragraphs/paragraph--icon.html.twig", "/var/www/html/web/themes/custom/icosaedrico/templates/paragraphs/paragraph--icon.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 41, "include" => 43];
        static $filters = ["default" => 47];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'include'],
                ['default'],
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
