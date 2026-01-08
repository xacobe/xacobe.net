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

/* icosaedrico:title */
class __TwigTemplate_44868d703d6334546e13659ea7381c9b extends Template
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
            'title_block' => [$this, 'block_title_block'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.icosaedrico--title"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "icosaedrico:title"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "icosaedrico:title"));
        $context["classes"] = ["page-title", "ff-reem-kufi", "uppercase", "font-bold", "text-center"];
        // line 8
        yield "
  ";
        // line 9
        yield from $this->unwrap()->yieldBlock('title_block', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title", "title_attributes", "title_suffix"]);        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
";
        // line 11
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "  <div class=\"flex w-full flex-col border-opacity-50\">
  <div class=\"divider\">
    ";
            // line 14
            yield from $this->load("icosaedrico:heading", 14)->unwrap()->yield(CoreExtension::merge($context, ["heading_title" =>             // line 15
($context["title"] ?? null), "heading_attributes" =>             // line 16
($context["title_attributes"] ?? null), "heading_tag" => "h1", "heading_classes" => Twig\Extension\CoreExtension::join(            // line 18
($context["classes"] ?? null), " ")]));
            // line 20
            yield "
  </div>
</div>
";
        }
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "icosaedrico:title";
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
        return array (  87 => 24,  81 => 20,  79 => 18,  78 => 16,  77 => 15,  76 => 14,  72 => 12,  70 => 11,  65 => 10,  53 => 9,  50 => 8,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "icosaedrico:title", "themes/custom/icosaedrico/components/atoms/title/title.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "block" => 9, "if" => 11, "include" => 14];
        static $filters = ["escape" => 10, "join" => 18];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['escape', 'join'],
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
