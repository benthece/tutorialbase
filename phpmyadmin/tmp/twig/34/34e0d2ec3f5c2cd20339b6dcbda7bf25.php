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

/* display/results/null_display.twig */
class __TwigTemplate_b6e0b1ed4e12a61699023acc80c2ad8d extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<td data-decimals=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["data_decimals"] ?? null), "html", null, true);
        yield "\"
    data-type=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["data_type"] ?? null), "html", null, true);
        yield "\"
    ";
        // line 4
        yield "    class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
        yield " null\">
    <em>NULL</em>
</td>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "display/results/null_display.twig";
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
        return array (  51 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "display/results/null_display.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\display\\results\\null_display.twig");
    }
}
