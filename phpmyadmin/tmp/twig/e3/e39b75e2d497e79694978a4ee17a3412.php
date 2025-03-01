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

/* database/structure/check_all_tables.twig */
class __TwigTemplate_918573fe05a05c6401522db7ba090ddf extends Template
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
        yield "<div class=\"clearfloat d-print-none\">
    <img class=\"selectallarrow\" src=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath((("arrow_" . ($context["text_dir"] ?? null)) . ".png")), "html", null, true);
        yield "\" width=\"38\" height=\"22\" alt=\"";
yield _gettext("With selected:");
        yield "\">
    <input type=\"checkbox\" id=\"tablesForm_checkall\" class=\"checkall_box\" title=\"";
yield _gettext("Check all");
        // line 3
        yield "\">
    <label for=\"tablesForm_checkall\">";
yield _gettext("Check all");
        // line 4
        yield "</label>
    ";
        // line 5
        if ((($context["overhead_check"] ?? null) != "")) {
            // line 6
            yield "        / <a href=\"#\" class=\"checkall-filter\" data-checkall-selector=\".tbl-overhead\">";
yield _gettext("Check tables having overhead");
            yield "</a>
    ";
        }
        // line 8
        yield "    <select name=\"submit_mult\" style=\"margin: 0 3em 0 3em;\">
        <option value=\"";
yield _gettext("With selected:");
        // line 9
        yield "\" selected=\"selected\">";
yield _gettext("With selected:");
        yield "</option>
        <option value=\"copy_tbl\">";
yield _gettext("Copy table");
        // line 10
        yield "</option>
        <option value=\"show_create\">";
yield _gettext("Show create");
        // line 11
        yield "</option>
        <option value=\"export\">";
yield _gettext("Export");
        // line 12
        yield "</option>
        ";
        // line 13
        if (( !($context["db_is_system_schema"] ?? null) &&  !($context["disable_multi_table"] ?? null))) {
            // line 14
            yield "            <optgroup label=\"";
yield _gettext("Delete data or table");
            yield "\">
                <option value=\"empty_tbl\">";
yield _gettext("Empty");
            // line 15
            yield "</option>
                <option value=\"drop_tbl\">";
yield _gettext("Drop");
            // line 16
            yield "</option>
            </optgroup>
            <optgroup label=\"";
yield _gettext("Table maintenance");
            // line 18
            yield "\">
                <option value=\"analyze_tbl\">";
yield _gettext("Analyze table");
            // line 19
            yield "</option>
                <option value=\"check_tbl\">";
yield _gettext("Check table");
            // line 20
            yield "</option>
                <option value=\"checksum_tbl\">";
yield _gettext("Checksum table");
            // line 21
            yield "</option>
                <option value=\"optimize_tbl\">";
yield _gettext("Optimize table");
            // line 22
            yield "</option>
                <option value=\"repair_tbl\">";
yield _gettext("Repair table");
            // line 23
            yield "</option>
            </optgroup>
            <optgroup label=\"";
yield _gettext("Prefix");
            // line 25
            yield "\">
                <option value=\"add_prefix_tbl\">";
yield _gettext("Add prefix to table");
            // line 26
            yield "</option>
                <option value=\"replace_prefix_tbl\">";
yield _gettext("Replace table prefix");
            // line 27
            yield "</option>
                <option value=\"copy_tbl_change_prefix\">";
yield _gettext("Copy table with prefix");
            // line 28
            yield "</option>
            </optgroup>
        ";
        }
        // line 31
        yield "        ";
        if ((array_key_exists("central_columns_work", $context) && ($context["central_columns_work"] ?? null))) {
            // line 32
            yield "            <optgroup label=\"";
yield _gettext("Central columns");
            yield "\">
                <option value=\"sync_unique_columns_central_list\">";
yield _gettext("Add columns to central list");
            // line 33
            yield "</option>
                <option value=\"delete_unique_columns_central_list\">";
yield _gettext("Remove columns from central list");
            // line 34
            yield "</option>
                <option value=\"make_consistent_with_central_list\">";
yield _gettext("Make consistent with central list");
            // line 35
            yield "</option>
            </optgroup>
        ";
        }
        // line 38
        yield "    </select>
    ";
        // line 39
        yield Twig\Extension\CoreExtension::join(($context["hidden_fields"] ?? null), "
");
        yield "
</div>

";
        // line 42
        if ((array_key_exists("central_columns_work", $context) && ($context["central_columns_work"] ?? null))) {
            // line 43
            yield "  <div class=\"modal fade\" id=\"makeConsistentWithCentralListModal\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\"
       tabindex=\"-1\" aria-labelledby=\"makeConsistentWithCentralListModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"makeConsistentWithCentralListModalLabel\">";
yield _gettext("Are you sure?");
            // line 48
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Cancel");
            // line 49
            yield "\"></button>
        </div>
        <div class=\"modal-body\">
          ";
            // line 52
            yield PhpMyAdmin\Sanitize::sanitizeMessage(_gettext("This action may change some of the columns definition.[br]Are you sure you want to continue?"));
            yield "
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
yield _gettext("Cancel");
            // line 55
            yield "</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"makeConsistentWithCentralListContinue\">";
yield _gettext("Continue");
            // line 56
            yield "</button>
        </div>
      </div>
    </div>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/check_all_tables.twig";
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
        return array (  209 => 56,  205 => 55,  198 => 52,  193 => 49,  189 => 48,  181 => 43,  179 => 42,  172 => 39,  169 => 38,  164 => 35,  160 => 34,  156 => 33,  150 => 32,  147 => 31,  142 => 28,  138 => 27,  134 => 26,  130 => 25,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  105 => 18,  100 => 16,  96 => 15,  90 => 14,  88 => 13,  85 => 12,  81 => 11,  77 => 10,  71 => 9,  67 => 8,  61 => 6,  59 => 5,  56 => 4,  52 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/structure/check_all_tables.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\database\\structure\\check_all_tables.twig");
    }
}
