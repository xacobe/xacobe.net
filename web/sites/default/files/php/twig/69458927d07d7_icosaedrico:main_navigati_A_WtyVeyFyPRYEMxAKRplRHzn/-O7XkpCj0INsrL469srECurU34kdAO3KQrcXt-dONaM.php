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

/* icosaedrico:main_navigation */
class __TwigTemplate_165dd290cb3c111d03e011638eb9931a extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.icosaedrico--main_navigation"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "icosaedrico:main_navigation"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "icosaedrico:main_navigation"));
        $context["classes"] = ["flex", "justify-center"];
        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "
  ";
        // line 8
        $macros["menus"] = $this;
        // line 9
        yield "
  ";
        // line 14
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 14, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

  ";
        // line 65
        yield "
";
        yield from [];
    }

    // line 16
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
            // line 17
            yield "    ";
            $macros["menus"] = $this;
            // line 18
            yield "    ";
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 19
                yield "      ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 20
                    yield "        <ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["main-menu menu menu-horizontal px-1 uppercase"], "method", false, false, true, 20), "html", null, true);
                    yield ">
      ";
                } else {
                    // line 22
                    yield "        <ul ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["p-2"], "method", false, false, true, 22), "html", null, true);
                    yield ">
      ";
                }
                // line 24
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 25
                    yield "        ";
                    $context["item_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", true, true, true, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 25), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute())) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
                    // line 26
                    yield "        ";
                    $context["url_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, true, true, 26), "options", [], "any", false, true, true, 26), "attributes", [], "any", true, true, true, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 26), "options", [], "any", false, false, true, 26), "attributes", [], "any", false, false, true, 26), [])) : ([]));
                    // line 27
                    yield "        ";
                    $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["url_attributes"] ?? null), "data-icon", [], "array", true, true, true, 27)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["url_attributes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["data-icon"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["url_attributes"] ?? null), "data-icon", [], "array", false, false, true, 27)), "")) : (""));
                    // line 28
                    yield "        ";
                    $context["show_only_icon"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["url_attributes"] ?? null), "data-icon-show", [], "array", true, true, true, 28)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["url_attributes"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["data-icon-show"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["url_attributes"] ?? null), "data-icon-show", [], "array", false, false, true, 28)), "false")) : ("false"));
                    // line 29
                    yield "        ";
                    $context["active_class"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-active") : (""));
                    // line 30
                    yield "        <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["item_attributes"] ?? null), "data-icon", "data-icon-show"), "html", null, true);
                    yield ">
          ";
                    // line 31
                    if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 32
                        yield "            ";
                        if ((($context["show_only_icon"] ?? null) == "true")) {
                            // line 33
                            yield "              <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 33), "html", null, true);
                            yield "\" class=\"menu-link-icon ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["active_class"] ?? null), "html", null, true);
                            yield "\">
                ";
                            // line 34
                            yield from $this->load("icosaedrico:icon", 34)->unwrap()->yield(CoreExtension::toArray(["icon_name" =>                             // line 35
($context["icon"] ?? null), "icon_svg_classes" => "menu-icon", "icon_svg_size" => "16", "icon_svg_fill" => "currentColor"]));
                            // line 40
                            yield "              </a>
            ";
                        } else {
                            // line 42
                            yield "              <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "html", null, true);
                            yield "\" class=\"menu-link flex flex-col text-black-500 ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["active_class"] ?? null), "html", null, true);
                            yield "\">
                ";
                            // line 43
                            yield from $this->load("icosaedrico:icon", 43)->unwrap()->yield(CoreExtension::toArray(["icon_name" =>                             // line 44
($context["icon"] ?? null), "icon_svg_classes" => "menu-icon", "icon_svg_size" => "16", "icon_svg_fill" => "currentColor"]));
                            // line 49
                            yield "                <div class=\"text-black-950\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), "html", null, true);
                            yield "</div>
              </a>
            ";
                        }
                        // line 52
                        yield "          ";
                    } else {
                        // line 53
                        yield "            <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), "html", null, true);
                        yield "\" class=\"menu-link ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["active_class"] ?? null), "html", null, true);
                        yield "\">
              ";
                        // line 54
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 54), "html", null, true);
                        yield "
            </a>
          ";
                    }
                    // line 57
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 58
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 58, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 58), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
          ";
                    }
                    // line 60
                    yield "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "      </ul>
    ";
            }
            // line 64
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "icosaedrico:main_navigation";
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
        return array (  217 => 64,  213 => 62,  206 => 60,  200 => 58,  197 => 57,  191 => 54,  184 => 53,  181 => 52,  174 => 49,  172 => 44,  171 => 43,  164 => 42,  160 => 40,  158 => 35,  157 => 34,  150 => 33,  147 => 32,  145 => 31,  140 => 30,  137 => 29,  134 => 28,  131 => 27,  128 => 26,  125 => 25,  120 => 24,  114 => 22,  108 => 20,  105 => 19,  102 => 18,  99 => 17,  85 => 16,  79 => 65,  73 => 14,  70 => 9,  68 => 8,  65 => 7,  53 => 6,  50 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "icosaedrico:main_navigation", "themes/custom/icosaedrico/components/organisms/main_navigation/main_navigation.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 6, "import" => 8, "macro" => 16, "if" => 18, "for" => 24, "include" => 34];
        static $filters = ["escape" => 20, "default" => 25, "without" => 30];
        static $functions = ["create_attribute" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'import', 'macro', 'if', 'for', 'include'],
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
