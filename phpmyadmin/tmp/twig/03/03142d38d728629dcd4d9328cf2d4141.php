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

/* sql/sql_query_results.twig */
class __TwigTemplate_47e72aa64737ebe7e1c8a5c80a37936e extends Template
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
        yield "<div class=\"sqlqueryresults ajax\">
    ";
        // line 2
        yield ($context["previous_update_query"] ?? null);
        yield "
    ";
        // line 3
        yield ($context["profiling_chart"] ?? null);
        yield "
    ";
        // line 4
        yield ($context["missing_unique_column_message"] ?? null);
        yield "
    ";
        // line 5
        yield ($context["bookmark_created_message"] ?? null);
        yield "
    ";
        // line 6
        yield ($context["table"] ?? null);
        yield "
    ";
        // line 7
        yield ($context["bookmark_support"] ?? null);
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sql/sql_query_results.twig";
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
        return array (  65 => 7,  61 => 6,  57 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sql/sql_query_results.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\sql\\sql_query_results.twig");
    }
}
