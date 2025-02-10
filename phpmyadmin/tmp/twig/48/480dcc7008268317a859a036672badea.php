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

/* columns_definitions/column_definitions_form.twig */
class __TwigTemplate_40f7806bbbd2b4b431e07e39c1b37b2a extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\" class=\"";
        // line 2
        yield (((($context["action"] ?? null) == PhpMyAdmin\Url::getFromRoute("/table/create"))) ? ("create_table") : ("append_fields"));
        // line 3
        yield "_form ajax lock-page\">
    ";
        // line 4
        yield PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        yield "
    ";
        // line 6
        yield "    ";
        // line 7
        yield "    ";
        // line 8
        yield "    <input type=\"hidden\" name=\"primary_indexes\" value=\"";
        // line 9
        yield (( !Twig\Extension\CoreExtension::testEmpty(($context["primary_indexes"] ?? null))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["primary_indexes"] ?? null), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"unique_indexes\" value=\"";
        // line 11
        yield (( !Twig\Extension\CoreExtension::testEmpty(($context["unique_indexes"] ?? null))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_indexes"] ?? null), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"indexes\" value=\"";
        // line 13
        yield (( !Twig\Extension\CoreExtension::testEmpty(($context["indexes"] ?? null))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["indexes"] ?? null), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"fulltext_indexes\" value=\"";
        // line 15
        yield (( !Twig\Extension\CoreExtension::testEmpty(($context["fulltext_indexes"] ?? null))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fulltext_indexes"] ?? null), "html", null, true)) : ("[]"));
        yield "\">
    <input type=\"hidden\" name=\"spatial_indexes\" value=\"";
        // line 17
        yield (( !Twig\Extension\CoreExtension::testEmpty(($context["spatial_indexes"] ?? null))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["spatial_indexes"] ?? null), "html", null, true)) : ("[]"));
        yield "\">

    ";
        // line 19
        if ((($context["action"] ?? null) == PhpMyAdmin\Url::getFromRoute("/table/create"))) {
            // line 20
            yield "        <div id=\"table_name_col_no_outer\">
            <table id=\"table_name_col_no\" class=\"table table-borderless tdblock\">
                <tr class=\"align-middle float-start\">
                    <td>";
yield _gettext("Table name");
            // line 23
            yield ":
                    <input type=\"text\"
                        name=\"table\"
                        size=\"40\"
                        maxlength=\"64\"
                        value=\"";
            // line 28
            yield ((array_key_exists("table", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true)) : (""));
            yield "\"
                        class=\"textfield\" autofocus required>
                    </td>
                    <td>
                        ";
yield _gettext("Add");
            // line 33
            yield "                        <input type=\"number\"
                            id=\"added_fields\"
                            name=\"added_fields\"
                            size=\"2\"
                            value=\"1\"
                            min=\"1\"
                            onfocus=\"this.select()\">
                        ";
yield _gettext("column(s)");
            // line 41
            yield "                        <input class=\"btn btn-secondary\" type=\"button\"
                            name=\"submit_num_fields\"
                            value=\"";
yield _gettext("Go");
            // line 43
            yield "\">
                    </td>
                </tr>
            </table>
        </div>
    ";
        }
        // line 49
        yield "    ";
        if (is_iterable(($context["content_cells"] ?? null))) {
            // line 50
            yield "        ";
            yield from $this->loadTemplate("columns_definitions/table_fields_definitions.twig", "columns_definitions/column_definitions_form.twig", 50)->unwrap()->yield(CoreExtension::toArray(["is_backup" =>             // line 51
($context["is_backup"] ?? null), "fields_meta" =>             // line 52
($context["fields_meta"] ?? null), "relation_parameters" =>             // line 53
($context["relation_parameters"] ?? null), "content_cells" =>             // line 54
($context["content_cells"] ?? null), "change_column" =>             // line 55
($context["change_column"] ?? null), "is_virtual_columns_supported" =>             // line 56
($context["is_virtual_columns_supported"] ?? null), "server_version" =>             // line 57
($context["server_version"] ?? null), "browse_mime" =>             // line 58
($context["browse_mime"] ?? null), "supports_stored_keyword" =>             // line 59
($context["supports_stored_keyword"] ?? null), "max_rows" =>             // line 60
($context["max_rows"] ?? null), "char_editing" =>             // line 61
($context["char_editing"] ?? null), "attribute_types" =>             // line 62
($context["attribute_types"] ?? null), "privs_available" =>             // line 63
($context["privs_available"] ?? null), "max_length" =>             // line 64
($context["max_length"] ?? null), "charsets" =>             // line 65
($context["charsets"] ?? null)]));
            // line 67
            yield "    ";
        }
        // line 68
        yield "    ";
        if ((($context["action"] ?? null) == PhpMyAdmin\Url::getFromRoute("/table/create"))) {
            // line 69
            yield "        <div class=\"responsivetable\">
        <table class=\"table table-borderless w-auto align-middle mb-0\">
            <tr class=\"align-top\">
                <th>";
yield _gettext("Table comments:");
            // line 72
            yield "</th>
                <td width=\"25\">&nbsp;</td>
                <th>";
yield _gettext("Collation:");
            // line 74
            yield "</th>
                <td width=\"25\">&nbsp;</td>
                <th>
                    ";
yield _gettext("Storage Engine:");
            // line 78
            yield "                    ";
            yield PhpMyAdmin\Html\MySQLDocumentation::show("Storage_engines");
            yield "
                </th>
                <td width=\"25\">&nbsp;</td>
                <th id=\"storage-engine-connection\">
                    ";
yield _gettext("Connection:");
            // line 83
            yield "                    ";
            yield PhpMyAdmin\Html\MySQLDocumentation::show("federated-create-connection");
            yield "
                </th>
            </tr>
            <tr>
                <td>
                    <input type=\"text\"
                        name=\"comment\"
                        size=\"40\"
                        maxlength=\"60\"
                        value=\"";
            // line 92
            yield ((array_key_exists("comment", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true)) : (""));
            yield "\"
                        class=\"textfield\">
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
                    <option value=\"\"></option>
                    ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 100
                yield "                      <optgroup label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 100), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 100), "html", null, true);
                yield "\">
                        ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 101));
                foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                    // line 102
                    yield "                          <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 102), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 102), "html", null, true);
                    yield "\"";
                    // line 103
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 103) == ($context["tbl_collation"] ?? null))) ? (" selected") : (""));
                    yield ">";
                    // line 104
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 104), "html", null, true);
                    // line 105
                    yield "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                yield "                      </optgroup>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select class=\"form-select\" name=\"tbl_storage_engine\" aria-label=\"";
yield _gettext("Storage engine");
            // line 113
            yield "\">
                    ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["storage_engines"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
                // line 115
                yield "                      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 115), "html", null, true);
                yield "\"";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 115))) {
                    yield " title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 115), "html", null, true);
                    yield "\"";
                }
                // line 116
                yield ((((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 116)) == Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["tbl_storage_engine"] ?? null))) || (Twig\Extension\CoreExtension::testEmpty(($context["tbl_storage_engine"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 116)))) ? (" selected") : (""));
                yield ">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 117), "html", null, true);
                // line 118
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['engine'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    <input type=\"text\"
                        name=\"connection\"
                        size=\"40\"
                        value=\"";
            // line 127
            yield ((array_key_exists("connection", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["connection"] ?? null), "html", null, true)) : (""));
            yield "\"
                        placeholder=\"scheme://user_name[:password]@host_name[:port_num]/db_name/tbl_name\"
                        class=\"textfield\"
                        required=\"required\">
                </td>
            </tr>
            ";
            // line 133
            if (($context["have_partitioning"] ?? null)) {
                // line 134
                yield "                <tr class=\"align-top\">
                    <th colspan=\"5\">
                        ";
yield _gettext("PARTITION definition:");
                // line 137
                yield "                        ";
                yield PhpMyAdmin\Html\MySQLDocumentation::show("Partitioning");
                yield "
                    </th>
                </tr>
                <tr>
                    <td colspan=\"5\">
                        ";
                // line 142
                yield from $this->loadTemplate("columns_definitions/partitions.twig", "columns_definitions/column_definitions_form.twig", 142)->unwrap()->yield(CoreExtension::toArray(["partition_details" =>                 // line 143
($context["partition_details"] ?? null), "storage_engines" =>                 // line 144
($context["storage_engines"] ?? null)]));
                // line 146
                yield "                    </td>
                </tr>
            ";
            }
            // line 149
            yield "        </table>
        </div>
    ";
        }
        // line 152
        yield "    <fieldset class=\"pma-fieldset tblFooters\">
        ";
        // line 153
        if (((($context["action"] ?? null) == PhpMyAdmin\Url::getFromRoute("/table/add-field")) || (($context["action"] ?? null) == PhpMyAdmin\Url::getFromRoute("/table/structure/save")))) {
            // line 154
            yield "            <input type=\"checkbox\" name=\"online_transaction\" value=\"ONLINE_TRANSACTION_ENABLED\" />";
yield _pgettext("Online transaction part of the SQL DDL for InnoDB", "Online transaction");
            yield PhpMyAdmin\Html\MySQLDocumentation::show("innodb-online-ddl");
            yield "
        ";
        }
        // line 156
        yield "        <input class=\"btn btn-secondary preview_sql\" type=\"button\"
            value=\"";
yield _gettext("Preview SQL");
        // line 157
        yield "\">
        <input class=\"btn btn-primary\" type=\"submit\"
            name=\"do_save_data\"
            value=\"";
yield _gettext("Save");
        // line 160
        yield "\">
    </fieldset>
    <div id=\"properties_message\"></div>
     ";
        // line 163
        if (($context["is_integers_length_restricted"] ?? null)) {
            // line 164
            yield "        <div class=\"alert alert-primary\" id=\"length_not_allowed\" role=\"alert\">
            ";
            // line 165
            yield PhpMyAdmin\Html\Generator::getImage("s_notice");
            yield "
            ";
yield _gettext("The column width of integer types is ignored in your MySQL version unless defining a TINYINT(1) column");
            // line 167
            yield "            ";
            yield PhpMyAdmin\Html\MySQLDocumentation::show("", false, "https://dev.mysql.com/doc/relnotes/mysql/8.0/en/news-8-0-19.html");
            yield "
        </div>
     ";
        }
        // line 170
        yield "</form>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
yield _gettext("Loading");
        // line 175
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Close");
        // line 176
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
yield _gettext("Close");
        // line 181
        yield "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 188
        yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/enum_set_editor.twig");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_definitions_form.twig";
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
        return array (  399 => 188,  391 => 181,  383 => 176,  379 => 175,  371 => 170,  364 => 167,  359 => 165,  356 => 164,  354 => 163,  349 => 160,  343 => 157,  339 => 156,  332 => 154,  330 => 153,  327 => 152,  322 => 149,  317 => 146,  315 => 144,  314 => 143,  313 => 142,  304 => 137,  299 => 134,  297 => 133,  288 => 127,  279 => 120,  272 => 118,  270 => 117,  267 => 116,  258 => 115,  254 => 114,  251 => 113,  244 => 109,  237 => 107,  230 => 105,  228 => 104,  225 => 103,  219 => 102,  215 => 101,  208 => 100,  204 => 99,  194 => 92,  181 => 83,  172 => 78,  166 => 74,  161 => 72,  155 => 69,  152 => 68,  149 => 67,  147 => 65,  146 => 64,  145 => 63,  144 => 62,  143 => 61,  142 => 60,  141 => 59,  140 => 58,  139 => 57,  138 => 56,  137 => 55,  136 => 54,  135 => 53,  134 => 52,  133 => 51,  131 => 50,  128 => 49,  120 => 43,  115 => 41,  105 => 33,  97 => 28,  90 => 23,  84 => 20,  82 => 19,  77 => 17,  73 => 15,  69 => 13,  65 => 11,  61 => 9,  59 => 8,  57 => 7,  55 => 6,  51 => 4,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "columns_definitions/column_definitions_form.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\columns_definitions\\column_definitions_form.twig");
    }
}
