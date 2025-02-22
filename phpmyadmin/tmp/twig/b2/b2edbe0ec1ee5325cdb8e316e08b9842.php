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

/* sql/no_results_returned.twig */
class __TwigTemplate_fe154f589d8bbdfef1fac28935acc5af extends Template
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
        yield ($context["message"] ?? null);
        yield "

";
        // line 3
        yield ($context["sql_query_results_table"] ?? null);
        yield "

";
        // line 5
        yield ($context["profiling_chart"] ?? null);
        yield "

";
        // line 7
        if ( !($context["is_procedure"] ?? null)) {
            // line 8
            yield "  <fieldset class=\"pma-fieldset d-print-none\">
    <legend>";
yield _gettext("Query results operations");
            // line 9
            yield "</legend>
    <span>
      ";
            // line 11
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/view/create"), ["db" =>             // line 13
($context["db"] ?? null), "table" => ($context["table"] ?? null), "printview" => "1", "sql_query" => ($context["sql_query"] ?? null)], PhpMyAdmin\Html\Generator::getIcon("b_view_add", _gettext("Create view"), true), ["class" => "create_view ajax btn"]);
            // line 16
            yield "
    </span>
  </fieldset>
";
        }
        // line 20
        yield "
";
        // line 21
        yield ($context["bookmark"] ?? null);
        yield "

";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/create_view.twig");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sql/no_results_returned.twig";
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
        return array (  84 => 23,  79 => 21,  76 => 20,  70 => 16,  68 => 13,  67 => 11,  63 => 9,  59 => 8,  57 => 7,  52 => 5,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sql/no_results_returned.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\sql\\no_results_returned.twig");
    }
}
