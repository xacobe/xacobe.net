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

/* icosaedrico:menu */
class __TwigTemplate_0c35333486cf873882bb5d06b0a7623c extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.icosaedrico--menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "icosaedrico:menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "icosaedrico:menu"));
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        yield "
";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 7, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 9
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            yield "  ";
            $macros["menus"] = $this;
            // line 11
            yield "  ";
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 12
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 13
                    yield "      <ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu menu-horizontal px-4 text-xl"], "method", false, false, true, 13), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 15
                    yield "      <ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["p-2"], "method", false, false, true, 15), "html", null, true);
                    yield ">
    ";
                }
                // line 17
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
                    // line 18
                    yield "      ";
                    $context["item_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", true, true, true, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 18), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute())) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
                    // line 19
                    yield "      ";
                    $context["url_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, true, true, 19), "getOption", ["attributes"], "method", true, true, true, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 19), "getOption", ["attributes"], "method", false, false, true, 19), [])) : ([]));
                    // line 20
                    yield "      ";
                    $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["url_attributes"] ?? null), "data-icon", [], "array", true, true, true, 20)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["url_attributes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["data-icon"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["url_attributes"] ?? null), "data-icon", [], "array", false, false, true, 20)), "")) : (""));
                    // line 21
                    yield "      ";
                    $context["show_only_icon"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["url_attributes"] ?? null), "data-icon-show", [], "array", true, true, true, 21)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["url_attributes"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["data-icon-show"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["url_attributes"] ?? null), "data-icon-show", [], "array", false, false, true, 21)), "false")) : ("false"));
                    // line 22
                    yield "      <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["item_attributes"] ?? null), "data-icon", "data-icon-show"), "html", null, true);
                    yield ">
        ";
                    // line 23
                    if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 24
                        yield "          ";
                        if ((($context["show_only_icon"] ?? null) == "true")) {
                            // line 25
                            yield "            ";
                            yield from $this->load("icosaedrico:menu", 25, 83067744)->unwrap()->yield(CoreExtension::merge($context, ["href" => CoreExtension::getAttribute($this->env, $this->source,                             // line 26
$context["item"], "url", [], "any", false, false, true, 26), "classes" => "menu-link-icon"]));
                            // line 38
                            yield "          ";
                        } else {
                            // line 39
                            yield "            ";
                            yield from $this->load("icosaedrico:link", 39)->unwrap()->yield(CoreExtension::toArray(["text" => CoreExtension::getAttribute($this->env, $this->source,                             // line 40
$context["item"], "title", [], "any", false, false, true, 40), "href" => CoreExtension::getAttribute($this->env, $this->source,                             // line 41
$context["item"], "url", [], "any", false, false, true, 41), "classes" =>                             // line 42
($context["item_attributes"] ?? null)]));
                            // line 44
                            yield "          ";
                        }
                        // line 45
                        yield "        ";
                    } else {
                        // line 46
                        yield "          ";
                        yield from $this->load("icosaedrico:link", 46)->unwrap()->yield(CoreExtension::toArray(["text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 47
$context["item"], "title", [], "any", false, false, true, 47), "href" => CoreExtension::getAttribute($this->env, $this->source,                         // line 48
$context["item"], "url", [], "any", false, false, true, 48), "classes" =>                         // line 49
($context["item_attributes"] ?? null)]));
                        // line 51
                        yield "        ";
                    }
                    // line 52
                    yield "        ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 53
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 53, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 53), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
        ";
                    }
                    // line 55
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
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "icosaedrico:menu";
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
        return array (  188 => 57,  173 => 55,  167 => 53,  164 => 52,  161 => 51,  159 => 49,  158 => 48,  157 => 47,  155 => 46,  152 => 45,  149 => 44,  147 => 42,  146 => 41,  145 => 40,  143 => 39,  140 => 38,  138 => 26,  136 => 25,  133 => 24,  131 => 23,  126 => 22,  123 => 21,  120 => 20,  117 => 19,  114 => 18,  96 => 17,  90 => 15,  84 => 13,  81 => 12,  78 => 11,  75 => 10,  61 => 9,  52 => 7,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "icosaedrico:menu", "themes/custom/icosaedrico/components/organisms/menu/menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 1, "macro" => 9, "if" => 11, "for" => 17, "set" => 18, "embed" => 25, "include" => 39];
        static $filters = ["escape" => 13, "default" => 18, "without" => 22];
        static $functions = ["create_attribute" => 18];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set', 'embed', 'include'],
                ['escape', 'default', 'without'],
                ['create_attribute'],
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


/* icosaedrico:menu */
class __TwigTemplate_0c35333486cf873882bb5d06b0a7623c___83067744 extends Template
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

        $this->blocks = [
            'link_content' => [$this, 'block_link_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 25
        return "icosaedrico:link";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.icosaedrico--menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "icosaedrico:menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "icosaedrico:menu"));
        // line 25
        $this->parent = $this->load("icosaedrico:link", 25);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon"]);    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "                ";
        yield from $this->load("icosaedrico:icon", 30)->unwrap()->yield(CoreExtension::toArray(["icon_name" =>         // line 31
($context["icon"] ?? null), "icon_svg_classes" => "bg-red", "icon_svg_size" => "24", "icon_svg_fill" => "black"]));
        // line 36
        yield "              ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "icosaedrico:menu";
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
        return array (  308 => 36,  306 => 31,  304 => 30,  297 => 29,  291 => 25,  287 => 1,  280 => 25,  188 => 57,  173 => 55,  167 => 53,  164 => 52,  161 => 51,  159 => 49,  158 => 48,  157 => 47,  155 => 46,  152 => 45,  149 => 44,  147 => 42,  146 => 41,  145 => 40,  143 => 39,  140 => 38,  138 => 26,  136 => 25,  133 => 24,  131 => 23,  126 => 22,  123 => 21,  120 => 20,  117 => 19,  114 => 18,  96 => 17,  90 => 15,  84 => 13,  81 => 12,  78 => 11,  75 => 10,  61 => 9,  52 => 7,  49 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "icosaedrico:menu", "themes/custom/icosaedrico/components/organisms/menu/menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 25, "include" => 30];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'include'],
                [],
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
