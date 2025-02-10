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

/* database/structure/body_for_table_summary.twig */
class __TwigTemplate_d1465fb3c7b3117b34b4fb4638a919a7 extends Template
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
        yield "<tfoot id=\"tbl_summary_row\">
<tr>
    <th class=\"d-print-none\"></th>
    <th class=\"tbl_num text-nowrap\">
        ";
        // line 5
        $context["num_tables_trans"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
yield _ngettext("%s table", "%s tables", abs(            // line 6
($context["num_tables"] ?? null)));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(($context["num_tables_trans"] ?? null), PhpMyAdmin\Util::formatNumber(($context["num_tables"] ?? null), 0)), "html", null, true);
        yield "
    </th>
    ";
        // line 10
        if (($context["server_replica_status"] ?? null)) {
            // line 11
            yield "        <th>";
yield _gettext("Replication");
            yield "</th>
    ";
        }
        // line 13
        yield "    ";
        $context["sum_colspan"] = ((($context["db_is_system_schema"] ?? null)) ? (4) : (7));
        // line 14
        yield "    ";
        if ((($context["num_favorite_tables"] ?? null) == 0)) {
            // line 15
            yield "        ";
            $context["sum_colspan"] = (($context["sum_colspan"] ?? null) - 1);
            // line 16
            yield "    ";
        }
        // line 17
        yield "    <th colspan=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sum_colspan"] ?? null), "html", null, true);
        yield "\" class=\"d-print-none\">";
yield _gettext("Sum");
        yield "</th>
    ";
        // line 18
        $context["row_count_sum"] = PhpMyAdmin\Util::formatNumber(($context["sum_entries"] ?? null), 0);
        // line 19
        yield "    ";
        // line 20
        yield "    ";
        $context["row_sum_url"] = [];
        // line 21
        yield "    ";
        if (array_key_exists("approx_rows", $context)) {
            // line 22
            yield "        ";
            $context["row_sum_url"] = ["ajax_request" => true, "db" =>             // line 24
($context["db"] ?? null), "real_row_count_all" => "true"];
            // line 27
            yield "    ";
        }
        // line 28
        yield "    ";
        if (($context["approx_rows"] ?? null)) {
            // line 29
            yield "        ";
            $context["cell_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 30
                yield "<a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/database/structure/real-row-count", ($context["row_sum_url"] ?? null));
                yield "\" class=\"ajax row_count_sum\">~";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_count_sum"] ?? null), "html", null, true);
                // line 32
                yield "</a>";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            yield "    ";
        } else {
            // line 35
            yield "        ";
            $context["cell_text"] = ($context["row_count_sum"] ?? null);
            // line 36
            yield "    ";
        }
        // line 37
        yield "    <th class=\"value tbl_rows font-monospace text-end\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cell_text"] ?? null), "html", null, true);
        yield "</th>
    ";
        // line 38
        if ( !(($context["properties_num_columns"] ?? null) > 1)) {
            // line 39
            yield "        ";
            // line 40
            yield "        ";
            $context["default_engine"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dbi"] ?? null), "fetchValue", ["SELECT @@storage_engine;"], "method", false, false, false, 40);
            // line 41
            yield "        ";
            if (Twig\Extension\CoreExtension::testEmpty(($context["default_engine"] ?? null))) {
                // line 42
                yield "            ";
                // line 43
                yield "            ";
                $context["default_engine"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dbi"] ?? null), "fetchValue", ["SELECT @@default_storage_engine;"], "method", false, false, false, 43);
                // line 44
                yield "        ";
            }
            // line 45
            yield "        <th class=\"text-center\">
            <dfn title=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("%s is the default storage engine on this MySQL server."), ($context["default_engine"] ?? null)), "html", null, true);
            yield "\">
                ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["default_engine"] ?? null), "html", null, true);
            yield "
            </dfn>
        </th>
        <th>
            ";
            // line 51
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["database_collation"] ?? null))) {
                // line 52
                yield "                <dfn title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_collation"] ?? null), "description", [], "any", false, false, false, 52), "html", null, true);
                yield " (";
yield _gettext("Default");
                yield ")\">
                    ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_collation"] ?? null), "name", [], "any", false, false, false, 53), "html", null, true);
                yield "
                </dfn>
            ";
            }
            // line 56
            yield "        </th>
    ";
        }
        // line 58
        yield "
    ";
        // line 59
        if (($context["is_show_stats"] ?? null)) {
            // line 60
            yield "        ";
            $context["sum"] = PhpMyAdmin\Util::formatByteDown(($context["sum_size"] ?? null), 3, 1);
            // line 61
            yield "        ";
            $context["sum_formatted"] = (($_v0 = ($context["sum"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null);
            // line 62
            yield "        ";
            $context["sum_unit"] = (($_v1 = ($context["sum"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[1] ?? null) : null);
            // line 63
            yield "        <th class=\"value tbl_size font-monospace text-end\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sum_formatted"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sum_unit"] ?? null), "html", null, true);
            yield "</th>

        ";
            // line 65
            $context["overhead"] = PhpMyAdmin\Util::formatByteDown(($context["overhead_size"] ?? null), 3, 1);
            // line 66
            yield "        ";
            $context["overhead_formatted"] = (($_v2 = ($context["overhead"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null);
            // line 67
            yield "        ";
            $context["overhead_unit"] = (($_v3 = ($context["overhead"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[1] ?? null) : null);
            // line 68
            yield "        <th class=\"value tbl_overhead font-monospace text-end\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["overhead_formatted"] ?? null), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["overhead_unit"] ?? null), "html", null, true);
            yield "</th>
    ";
        }
        // line 70
        yield "
    ";
        // line 71
        if (($context["show_charset"] ?? null)) {
            // line 72
            yield "        <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database_charset"] ?? null), "html", null, true);
            yield "</th>
    ";
        }
        // line 74
        yield "    ";
        if (($context["show_comment"] ?? null)) {
            // line 75
            yield "        <th></th>
    ";
        }
        // line 77
        yield "    ";
        if (($context["show_creation"] ?? null)) {
            // line 78
            yield "        <th class=\"value tbl_creation font-monospace text-end\">
            ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["create_time_all"] ?? null), "html", null, true);
            yield "
        </th>
    ";
        }
        // line 82
        yield "    ";
        if (($context["show_last_update"] ?? null)) {
            // line 83
            yield "        <th class=\"value tbl_last_update font-monospace text-end\">
            ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update_time_all"] ?? null), "html", null, true);
            yield "
        </th>
    ";
        }
        // line 87
        yield "    ";
        if (($context["show_last_check"] ?? null)) {
            // line 88
            yield "        <th class=\"value tbl_last_check font-monospace text-end\">
            ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["check_time_all"] ?? null), "html", null, true);
            yield "
        </th>
    ";
        }
        // line 92
        yield "</tr>
</tfoot>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/body_for_table_summary.twig";
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
        return array (  277 => 92,  271 => 89,  268 => 88,  265 => 87,  259 => 84,  256 => 83,  253 => 82,  247 => 79,  244 => 78,  241 => 77,  237 => 75,  234 => 74,  228 => 72,  226 => 71,  223 => 70,  215 => 68,  212 => 67,  209 => 66,  207 => 65,  199 => 63,  196 => 62,  193 => 61,  190 => 60,  188 => 59,  185 => 58,  181 => 56,  175 => 53,  168 => 52,  166 => 51,  159 => 47,  155 => 46,  152 => 45,  149 => 44,  146 => 43,  144 => 42,  141 => 41,  138 => 40,  136 => 39,  134 => 38,  129 => 37,  126 => 36,  123 => 35,  120 => 34,  116 => 32,  114 => 31,  110 => 30,  107 => 29,  104 => 28,  101 => 27,  99 => 24,  97 => 22,  94 => 21,  91 => 20,  89 => 19,  87 => 18,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  68 => 13,  62 => 11,  60 => 10,  54 => 8,  50 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/structure/body_for_table_summary.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\database\\structure\\body_for_table_summary.twig");
    }
}
