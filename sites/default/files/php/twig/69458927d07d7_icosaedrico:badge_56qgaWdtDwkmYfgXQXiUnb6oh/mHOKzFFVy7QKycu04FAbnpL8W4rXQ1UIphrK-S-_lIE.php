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

/* icosaedrico:badge */
class __TwigTemplate_9ea9f74be6b917a7f93f084c05595b04 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.icosaedrico--badge"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "icosaedrico:badge"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "icosaedrico:badge"));
        $context["classes"] = ["badge", (((($tmp =         // line 3
($context["badge_color"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("badge-" . ($context["badge_color"] ?? null))) : ("")), (((($tmp =         // line 4
($context["badge_outline"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("badge-outline") : ("")), (((($tmp =         // line 5
($context["badge_size"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("badge-" . ($context["badge_size"] ?? null))) : ("")), (((($tmp =         // line 6
($context["badge_text_size"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("badge-" . ($context["badge_text_size"] ?? null))) : ("")), "px-3 py-2"];
        // line 10
        yield "<a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["badge_href"] ?? null), "html", null, true);
        yield "\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\">
 ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["badge_text"] ?? null), "html", null, true);
        yield "
 ";
        // line 12
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["badge_icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::source($this->env, (((CoreExtension::getAttribute($this->env, $this->source, ($context["componentMetadata"] ?? null), "path", [], "any", false, false, true, 13) . "/img/") . ($context["badge_icon"] ?? null)) . ".svg")));
            yield "
  ";
        }
        // line 15
        yield "</a>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["badge_color", "badge_outline", "badge_size", "badge_text_size", "badge_href", "badge_text", "badge_icon", "componentMetadata"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "icosaedrico:badge";
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
        return array (  72 => 15,  66 => 13,  64 => 12,  60 => 11,  53 => 10,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "icosaedrico:badge", "themes/custom/icosaedrico/components/atoms/badge/badge.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 12];
        static $filters = ["escape" => 10, "join" => 10];
        static $functions = ["source" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'join'],
                ['source'],
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
