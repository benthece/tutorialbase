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

/* sql/bookmark.twig */
class __TwigTemplate_dde94d59cc7d36117d447953a0ded4a5 extends Template
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
        yield "<form action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/sql");
        yield "\" method=\"post\" class=\"bookmarkQueryForm d-print-none\"
    onsubmit=\"return ! Functions.emptyCheckTheField(this, 'bkm_fields[bkm_label]');\">
    ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
    <input type=\"hidden\" name=\"db\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"goto\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["goto"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"bkm_fields[bkm_database]\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"bkm_fields[bkm_user]\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"bkm_fields[bkm_sql_query]\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sql_query"] ?? null), "html", null, true);
        yield "\">
    <fieldset class=\"pma-fieldset\">
        <legend>
            ";
        // line 11
        yield PhpMyAdmin\Html\Generator::getIcon("b_bookmark", _gettext("Bookmark this SQL query"), true);
        yield "
        </legend>
        <div class=\"formelement\">
            <label>
                ";
yield _gettext("Label:");
        // line 16
        yield "                <input type=\"text\" name=\"bkm_fields[bkm_label]\" value=\"\">
            </label>
        </div>
        <div class=\"formelement\">
            <label>
                <input type=\"checkbox\" name=\"bkm_all_users\" value=\"true\">
                ";
yield _gettext("Let every user access this bookmark");
        // line 23
        yield "            </label>
        </div>
        <div class=\"clearfloat\"></div>
    </fieldset>
    <fieldset class=\"pma-fieldset tblFooters\">
        <input type=\"hidden\" name=\"store_bkm\" value=\"1\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
yield _gettext("Bookmark this SQL query");
        // line 29
        yield "\">
    </fieldset>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sql/bookmark.twig";
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
        return array (  100 => 29,  91 => 23,  82 => 16,  74 => 11,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sql/bookmark.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\sql\\bookmark.twig");
    }
}
