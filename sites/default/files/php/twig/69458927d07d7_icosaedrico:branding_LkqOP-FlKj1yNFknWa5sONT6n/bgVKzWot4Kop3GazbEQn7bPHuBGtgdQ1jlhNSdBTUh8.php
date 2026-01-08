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

/* icosaedrico:branding */
class __TwigTemplate_f8152cef008738c33e1d97fea5ae0c67 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.icosaedrico--branding"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "icosaedrico:branding"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "icosaedrico:branding"));
        $context["branding_classes"] = ["branding", "flex", "items-center", "text-center", "mx-auto", "lg:mx-0", "ps-0", "lg:ps-4", (((        // line 10
($context["branding_shape"] ?? null) == "square")) ? ("flex-col") : (""))];
        // line 12
        $context["branding_classes_logo"] = ["branding__logo", (((        // line 14
($context["branding_size"] ?? null) == "sm")) ? ("w-40 me-0 lg:me-4") : (""))];
        // line 16
        $context["branding_classes_name"] = [(((        // line 17
($context["branding_size"] ?? null) == "sm")) ? ("text-25xl") : ("")), (((        // line 18
($context["branding_size"] ?? null) == "lg")) ? ("text-25xl") : (""))];
        // line 20
        $context["branding_classes_slogan"] = ["branding__slogan", "mb-12", (((        // line 23
($context["branding_slogan_show"] ?? null) == false)) ? ("hidden") : (""))];
        // line 25
        yield "

<div ";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [$this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["branding_classes"] ?? null), " ")], "method", false, false, true, 27), "html", null, true);
        yield ">
  ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 29
        if ((($tmp = ($context["label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "    <h2 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</h2>
  ";
        }
        // line 32
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 33
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 51
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["branding_shape", "branding_size", "branding_slogan_show", "attributes", "title_prefix", "label", "title_attributes", "title_suffix", "site_logo", "site_name", "site_slogan"]);        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        yield "  ";
        if ((($tmp = ($context["site_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "    <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["branding_classes_logo"] ?? null), " "));
            yield "\" rel=\"home\">
      <img src=\"";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Inicio"));
            yield "\" fetchpriority=\"high\" />
    </a>
  ";
        }
        // line 39
        yield "  <div>
    ";
        // line 40
        if ((($tmp = ($context["site_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "    <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["branding_classes_name"] ?? null), ""));
            yield " branding__title\" >
      <a href=\"";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" rel=\"home\">xacobe.<span class=\"branding__title--suffix\">net</span></a>
    </div>
    ";
        }
        // line 45
        yield "    ";
        // line 46
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["branding_classes_slogan"] ?? null), " "));
        yield "\">
      <span class=\"branding__slogan--text\">";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
        yield "</span>
    </div>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "icosaedrico:branding";
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
        return array (  145 => 47,  140 => 46,  138 => 45,  132 => 42,  127 => 41,  125 => 40,  122 => 39,  114 => 36,  107 => 35,  104 => 34,  97 => 33,  90 => 51,  88 => 33,  83 => 32,  75 => 30,  73 => 29,  69 => 28,  65 => 27,  61 => 25,  59 => 23,  58 => 20,  56 => 18,  55 => 17,  54 => 16,  52 => 14,  51 => 12,  49 => 10,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "icosaedrico:branding", "themes/custom/icosaedrico/components/organisms/branding/branding.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 29, "block" => 33];
        static $filters = ["escape" => 27, "safe_join" => 27, "t" => 36];
        static $functions = ["path" => 35];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'safe_join', 't'],
                ['path'],
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
