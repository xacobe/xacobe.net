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

/* themes/custom/icosaedrico/templates/user/user.html.twig */
class __TwigTemplate_c4d0ae8f491572a1b7a0ebfa8af48a59 extends Template
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
        // line 19
        $context["user_picture_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "user_picture", [], "any", false, false, true, 19), "entity", [], "any", false, false, true, 19), "fileuri", [], "any", false, false, true, 19));
        // line 20
        $context["user_picture_width"] = ((array_key_exists("user_picture_width", $context)) ? (Twig\Extension\CoreExtension::default(($context["user_picture_width"] ?? null), "72")) : ("72"));
        // line 21
        $context["user_picture_height"] = ((array_key_exists("user_picture_height", $context)) ? (Twig\Extension\CoreExtension::default(($context["user_picture_height"] ?? null), "72")) : ("72"));
        // line 22
        yield "
";
        // line 23
        yield from $this->load("icosaedrico:avatar", 23)->unwrap()->yield(CoreExtension::merge($context, ["user_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 24
($context["user"] ?? null), "name", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), "user_picture_url" =>         // line 25
($context["user_picture_url"] ?? null), "user_picture_width" =>         // line 26
($context["user_picture_width"] ?? null), "user_picture_height" =>         // line 27
($context["user_picture_height"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["user"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/icosaedrico/templates/user/user.html.twig";
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
        return array (  57 => 27,  56 => 26,  55 => 25,  54 => 24,  53 => 23,  50 => 22,  48 => 21,  46 => 20,  44 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/icosaedrico/templates/user/user.html.twig", "/var/www/html/web/themes/custom/icosaedrico/templates/user/user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 19, "include" => 23];
        static $filters = ["default" => 20];
        static $functions = ["file_url" => 19];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['default'],
                ['file_url'],
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
