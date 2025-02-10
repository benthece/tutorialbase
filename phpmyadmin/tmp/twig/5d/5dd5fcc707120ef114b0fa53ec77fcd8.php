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

/* database/structure/table_header.twig */
class __TwigTemplate_acbf5abb02a171989bb28039bf8f3d69 extends Template
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
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/structure");
        yield "\" name=\"tablesForm\" id=\"tablesForm\">
";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover table-sm w-auto data\">
    <thead>
        <tr>
            <th class=\"d-print-none\"></th>
            <th>";
        // line 8
        yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Table"), "table");
        yield "</th>
            ";
        // line 9
        if (($context["replication"] ?? null)) {
            // line 10
            yield "                <th>";
yield _gettext("Replication");
            yield "</th>
            ";
        }
        // line 12
        yield "
            ";
        // line 13
        if (($context["db_is_system_schema"] ?? null)) {
            // line 14
            yield "                ";
            $context["action_colspan"] = 3;
            // line 15
            yield "            ";
        } else {
            // line 16
            yield "                ";
            $context["action_colspan"] = 6;
            // line 17
            yield "            ";
        }
        // line 18
        yield "            ";
        if ((($context["num_favorite_tables"] ?? null) > 0)) {
            // line 19
            yield "                ";
            $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
            // line 20
            yield "            ";
        }
        // line 21
        yield "            <th colspan=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action_colspan"] ?? null), "html", null, true);
        yield "\" class=\"d-print-none\">
                ";
yield _gettext("Action");
        // line 23
        yield "            </th>
            ";
        // line 25
        yield "            <th>
                ";
        // line 26
        yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Rows"), "records", "DESC");
        yield "
                ";
        // line 27
        yield PhpMyAdmin\Html\Generator::showHint(PhpMyAdmin\Sanitize::sanitizeMessage(_gettext("May be approximate. Click on the number to get the exact count. See [doc@faq3-11]FAQ 3.11[/doc].")));
        yield "
            </th>
            ";
        // line 29
        if ( !(($context["properties_num_columns"] ?? null) > 1)) {
            // line 30
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Type"), "type");
            yield "</th>
                <th>";
            // line 31
            yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Collation"), "collation");
            yield "</th>
            ";
        }
        // line 33
        yield "
            ";
        // line 34
        if (($context["is_show_stats"] ?? null)) {
            // line 35
            yield "                ";
            // line 36
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Size"), "size", "DESC");
            yield "</th>
                ";
            // line 38
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Overhead"), "overhead", "DESC");
            yield "</th>
            ";
        }
        // line 40
        yield "
            ";
        // line 41
        if (($context["show_charset"] ?? null)) {
            // line 42
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Charset"), "charset");
            yield "</th>
            ";
        }
        // line 44
        yield "
            ";
        // line 45
        if (($context["show_comment"] ?? null)) {
            // line 46
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Comment"), "comment");
            yield "</th>
            ";
        }
        // line 48
        yield "
            ";
        // line 49
        if (($context["show_creation"] ?? null)) {
            // line 50
            yield "                ";
            // line 51
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Creation"), "creation", "DESC");
            yield "</th>
            ";
        }
        // line 53
        yield "
            ";
        // line 54
        if (($context["show_last_update"] ?? null)) {
            // line 55
            yield "                ";
            // line 56
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Last update"), "last_update", "DESC");
            yield "</th>
            ";
        }
        // line 58
        yield "
            ";
        // line 59
        if (($context["show_last_check"] ?? null)) {
            // line 60
            yield "                ";
            // line 61
            yield "                <th>";
            yield PhpMyAdmin\Util::sortableTableHeader(_gettext("Last check"), "last_check", "DESC");
            yield "</th>
            ";
        }
        // line 63
        yield "        </tr>
    </thead>
    <tbody>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["structure_table_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["structure_table_row"]) {
            // line 67
            yield "        ";
            yield from $this->loadTemplate("database/structure/structure_table_row.twig", "database/structure/table_header.twig", 67)->unwrap()->yield(CoreExtension::toArray($context["structure_table_row"]));
            // line 68
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['structure_table_row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "    </tbody>
    ";
        // line 70
        if (($context["body_for_table_summary"] ?? null)) {
            // line 71
            yield "        ";
            yield from $this->loadTemplate("database/structure/body_for_table_summary.twig", "database/structure/table_header.twig", 71)->unwrap()->yield(CoreExtension::toArray(($context["body_for_table_summary"] ?? null)));
            // line 72
            yield "    ";
        }
        // line 73
        yield "</table>
</div>
";
        // line 75
        if (($context["check_all_tables"] ?? null)) {
            // line 76
            yield "  ";
            yield from $this->loadTemplate("database/structure/check_all_tables.twig", "database/structure/table_header.twig", 76)->unwrap()->yield(CoreExtension::toArray(($context["check_all_tables"] ?? null)));
        }
        // line 78
        yield "</form>
";
        // line 79
        if (($context["check_all_tables"] ?? null)) {
            // line 80
            yield "  ";
            yield from $this->loadTemplate("database/structure/bulk_action_modal.twig", "database/structure/table_header.twig", 80)->unwrap()->yield(CoreExtension::toArray(($context["check_all_tables"] ?? null)));
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/table_header.twig";
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
        return array (  250 => 80,  248 => 79,  245 => 78,  241 => 76,  239 => 75,  235 => 73,  232 => 72,  229 => 71,  227 => 70,  224 => 69,  218 => 68,  215 => 67,  211 => 66,  206 => 63,  200 => 61,  198 => 60,  196 => 59,  193 => 58,  187 => 56,  185 => 55,  183 => 54,  180 => 53,  174 => 51,  172 => 50,  170 => 49,  167 => 48,  161 => 46,  159 => 45,  156 => 44,  150 => 42,  148 => 41,  145 => 40,  139 => 38,  134 => 36,  132 => 35,  130 => 34,  127 => 33,  122 => 31,  117 => 30,  115 => 29,  110 => 27,  106 => 26,  103 => 25,  100 => 23,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  62 => 10,  60 => 9,  56 => 8,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/structure/table_header.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\database\\structure\\table_header.twig");
    }
}
