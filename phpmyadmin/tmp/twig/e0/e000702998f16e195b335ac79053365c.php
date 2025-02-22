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

/* database/structure/structure_table_row.twig */
class __TwigTemplate_8ba36148b299ac2601a234b49f80c90a extends Template
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
        yield "<tr id=\"row_tbl_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["curr"] ?? null), "html", null, true);
        yield "\"";
        yield ((($context["table_is_view"] ?? null)) ? (" class=\"is_view\"") : (""));
        yield " data-filter-row=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), (($_v0 = ($context["current_table"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["TABLE_NAME"] ?? null) : null)), "html", null, true);
        yield "\">
    <td class=\"text-center d-print-none\">
        <input type=\"checkbox\"
            name=\"selected_tbl[]\"
            class=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input_class"] ?? null), "html", null, true);
        yield "\"
            value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["current_table"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["TABLE_NAME"] ?? null) : null), "html", null, true);
        yield "\"
            id=\"checkbox_tbl_";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["curr"] ?? null), "html", null, true);
        yield "\">
    </td>
    <th>
        <a href=\"";
        // line 10
        yield PhpMyAdmin\Url::getFromRoute("/sql", Twig\Extension\CoreExtension::merge(($context["table_url_params"] ?? null), ["pos" => 0]));
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["browse_table_label_title"] ?? null), "html", null, true);
        yield "\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["browse_table_label_truename"] ?? null), "html", null, true);
        // line 12
        yield "</a>
        ";
        // line 13
        yield ($context["tracking_icon"] ?? null);
        yield "
    </th>
    ";
        // line 15
        if (($context["server_replica_status"] ?? null)) {
            // line 16
            yield "        <td class=\"text-center\">
            ";
            // line 17
            yield ((($context["ignored"] ?? null)) ? (PhpMyAdmin\Html\Generator::getImage("s_cancel", _gettext("Not replicated"))) : (""));
            yield "
            ";
            // line 18
            yield ((($context["do"] ?? null)) ? (PhpMyAdmin\Html\Generator::getImage("s_success", _gettext("Replicated"))) : (""));
            yield "
        </td>
    ";
        }
        // line 21
        yield "
    ";
        // line 23
        yield "    ";
        if ((($context["num_favorite_tables"] ?? null) > 0)) {
            // line 24
            yield "        <td class=\"text-center d-print-none\">
            ";
            // line 26
            yield "            ";
            $context["fav_params"] = ["db" =>             // line 27
($context["db"] ?? null), "ajax_request" => true, "favorite_table" => (($_v2 =             // line 29
($context["current_table"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["TABLE_NAME"] ?? null) : null), (((            // line 30
($context["already_favorite"] ?? null)) ? ("remove") : ("add")) . "_favorite") => true];
            // line 32
            yield "            ";
            yield from $this->loadTemplate("database/structure/favorite_anchor.twig", "database/structure/structure_table_row.twig", 32)->unwrap()->yield(CoreExtension::toArray(["table_name_hash" =>             // line 33
($context["table_name_hash"] ?? null), "db_table_name_hash" =>             // line 34
($context["db_table_name_hash"] ?? null), "fav_params" =>             // line 35
($context["fav_params"] ?? null), "already_favorite" =>             // line 36
($context["already_favorite"] ?? null)]));
            // line 38
            yield "        </td>
    ";
        }
        // line 40
        yield "
    <td class=\"text-center d-print-none\">
        <a href=\"";
        // line 42
        yield PhpMyAdmin\Url::getFromRoute("/sql", Twig\Extension\CoreExtension::merge(($context["table_url_params"] ?? null), ["pos" => 0]));
        yield "\">
          ";
        // line 43
        yield ((($context["may_have_rows"] ?? null)) ? (PhpMyAdmin\Html\Generator::getIcon("b_browse", _gettext("Browse"))) : (PhpMyAdmin\Html\Generator::getIcon("bd_browse", _gettext("Browse"))));
        yield "
        </a>
    </td>
    <td class=\"text-center d-print-none\">
        <a href=\"";
        // line 47
        yield PhpMyAdmin\Url::getFromRoute("/table/structure", ($context["table_url_params"] ?? null));
        yield "\">
          ";
        // line 48
        yield PhpMyAdmin\Html\Generator::getIcon("b_props", _gettext("Structure"));
        yield "
        </a>
    </td>
    <td class=\"text-center d-print-none\">
        <a href=\"";
        // line 52
        yield PhpMyAdmin\Url::getFromRoute("/table/search", ($context["table_url_params"] ?? null));
        yield "\">
          ";
        // line 53
        yield ((($context["may_have_rows"] ?? null)) ? (PhpMyAdmin\Html\Generator::getIcon("b_select", _gettext("Search"))) : (PhpMyAdmin\Html\Generator::getIcon("bd_select", _gettext("Search"))));
        yield "
        </a>
    </td>

    ";
        // line 57
        if ( !($context["db_is_system_schema"] ?? null)) {
            // line 58
            yield "        <td class=\"insert_table text-center d-print-none\">
            <a href=\"";
            // line 59
            yield PhpMyAdmin\Url::getFromRoute("/table/change", ($context["table_url_params"] ?? null));
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getIcon("b_insrow", _gettext("Insert"));
            yield "</a>
        </td>
        ";
            // line 61
            if (($context["table_is_view"] ?? null)) {
                // line 62
                yield "            <td class=\"text-center d-print-none\">
                <a href=\"";
                // line 63
                yield PhpMyAdmin\Url::getFromRoute("/view/create", ["db" =>                 // line 64
($context["db"] ?? null), "table" => (($_v3 =                 // line 65
($context["current_table"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["TABLE_NAME"] ?? null) : null)]);
                // line 66
                yield "\">";
                yield PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit"));
                yield "</a>
            </td>
        ";
            } else {
                // line 69
                yield "          <td class=\"text-center d-print-none\">
                <a class=\"truncate_table_anchor ajax\" href=\"";
                // line 70
                yield PhpMyAdmin\Url::getFromRoute("/sql");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["table_url_params"] ?? null), ["sql_query" =>                 // line 71
($context["empty_table_sql_query"] ?? null), "message_to_show" =>                 // line 72
($context["empty_table_message_to_show"] ?? null)]), "");
                // line 73
                yield "\">
                  ";
                // line 74
                yield ((($context["may_have_rows"] ?? null)) ? (PhpMyAdmin\Html\Generator::getIcon("b_empty", _gettext("Empty"))) : (PhpMyAdmin\Html\Generator::getIcon("bd_empty", _gettext("Empty"))));
                yield "
                </a>
          </td>
        ";
            }
            // line 78
            yield "        <td class=\"text-center d-print-none\">
            <a class=\"ajax drop_table_anchor";
            // line 80
            yield ((($context["table_is_view"] ?? null)) ? (" view") : (""));
            yield "\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\" data-post=\"";
            // line 81
            yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["table_url_params"] ?? null), ["reload" => 1, "purge" => 1, "sql_query" =>             // line 84
($context["drop_query"] ?? null), "message_to_show" =>             // line 85
($context["drop_message"] ?? null)]), "");
            // line 86
            yield "\">
                ";
            // line 87
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop"));
            yield "
            </a>
        </td>
    ";
        }
        // line 91
        yield "
    ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["current_table"] ?? null), "TABLE_ROWS", [], "array", true, true, false, 92) && (((($_v4 =         // line 93
($context["current_table"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["ENGINE"] ?? null) : null) != null) || ($context["table_is_view"] ?? null)))) {
            // line 94
            yield "        ";
            // line 95
            yield "        ";
            $context["row_count"] = PhpMyAdmin\Util::formatNumber((($_v5 = ($context["current_table"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["TABLE_ROWS"] ?? null) : null), 0);
            // line 96
            yield "
        ";
            // line 99
            yield "        <td class=\"value tbl_rows font-monospace text-end\"
            data-table=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = ($context["current_table"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["TABLE_NAME"] ?? null) : null), "html", null, true);
            yield "\">
            ";
            // line 101
            if (($context["approx_rows"] ?? null)) {
                // line 102
                yield "                <a href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/database/structure/real-row-count", ["ajax_request" => true, "db" =>                 // line 104
($context["db"] ?? null), "table" => (($_v7 =                 // line 105
($context["current_table"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["TABLE_NAME"] ?? null) : null)]);
                // line 106
                yield "\" class=\"ajax real_row_count\">
                    <bdi>
                        ~";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_count"] ?? null), "html", null, true);
                yield "
                    </bdi>
                </a>
            ";
            } else {
                // line 112
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_count"] ?? null), "html", null, true);
                yield "
            ";
            }
            // line 114
            yield "            ";
            yield ($context["show_superscript"] ?? null);
            yield "
        </td>

        ";
            // line 117
            if ( !(($context["properties_num_columns"] ?? null) > 1)) {
                // line 118
                yield "            <td class=\"text-nowrap\">
                ";
                // line 119
                if ( !Twig\Extension\CoreExtension::testEmpty((($_v8 = ($context["current_table"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["ENGINE"] ?? null) : null))) {
                    // line 120
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["current_table"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["ENGINE"] ?? null) : null), "html", null, true);
                    yield "
                ";
                } elseif (                // line 121
($context["table_is_view"] ?? null)) {
                    // line 122
                    yield "                    ";
yield _gettext("View");
                    // line 123
                    yield "                ";
                }
                // line 124
                yield "            </td>
            ";
                // line 125
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["collation"] ?? null)) > 0)) {
                    // line 126
                    yield "                <td class=\"text-nowrap\">
                    ";
                    // line 127
                    yield ($context["collation"] ?? null);
                    yield "
                </td>
            ";
                }
                // line 130
                yield "        ";
            }
            // line 131
            yield "
        ";
            // line 132
            if (($context["is_show_stats"] ?? null)) {
                // line 133
                yield "            <td class=\"value tbl_size font-monospace text-end\">
                <a href=\"";
                // line 134
                yield PhpMyAdmin\Url::getFromRoute("/table/structure", ($context["table_url_params"] ?? null));
                yield "#showusage\">
                    <span>";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formatted_size"] ?? null), "html", null, true);
                yield "</span>&nbsp;<span class=\"unit\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unit"] ?? null), "html", null, true);
                yield "</span>
                </a>
            </td>
            <td class=\"value tbl_overhead font-monospace text-end\">
                ";
                // line 139
                yield ($context["overhead"] ?? null);
                yield "
            </td>
        ";
            }
            // line 142
            yield "
        ";
            // line 143
            if (($context["show_charset"] ?? null)) {
                // line 144
                yield "            <td class=\"text-nowrap\">
                ";
                // line 145
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["charset"] ?? null)) > 0)) {
                    // line 146
                    yield "                    ";
                    yield ($context["charset"] ?? null);
                    yield "
                ";
                }
                // line 148
                yield "            </td>
        ";
            }
            // line 150
            yield "
        ";
            // line 151
            if (($context["show_comment"] ?? null)) {
                // line 152
                yield "            ";
                $context["comment"] = (($_v10 = ($context["current_table"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["Comment"] ?? null) : null);
                // line 153
                yield "            <td>
                ";
                // line 154
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["comment"] ?? null)) > ($context["limit_chars"] ?? null))) {
                    // line 155
                    yield "                    <abbr title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true);
                    yield "\">
                        ";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["comment"] ?? null), 0, ($context["limit_chars"] ?? null)), "html", null, true);
                    yield "
                        ...
                    </abbr>
                ";
                } else {
                    // line 160
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true);
                    yield "
                ";
                }
                // line 162
                yield "            </td>
        ";
            }
            // line 164
            yield "
        ";
            // line 165
            if (($context["show_creation"] ?? null)) {
                // line 166
                yield "            <td class=\"value tbl_creation font-monospace text-end\">
                ";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["create_time"] ?? null), "html", null, true);
                yield "
            </td>
        ";
            }
            // line 170
            yield "
        ";
            // line 171
            if (($context["show_last_update"] ?? null)) {
                // line 172
                yield "            <td class=\"value tbl_last_update font-monospace text-end\">
                ";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update_time"] ?? null), "html", null, true);
                yield "
            </td>
        ";
            }
            // line 176
            yield "
        ";
            // line 177
            if (($context["show_last_check"] ?? null)) {
                // line 178
                yield "            <td class=\"value tbl_last_check font-monospace text-end\">
                ";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["check_time"] ?? null), "html", null, true);
                yield "
            </td>
        ";
            }
            // line 182
            yield "
    ";
        } elseif (        // line 183
($context["table_is_view"] ?? null)) {
            // line 184
            yield "        <td class=\"value tbl_rows font-monospace text-end\">-</td>
        <td class=\"text-nowrap\">
            ";
yield _gettext("View");
            // line 187
            yield "        </td>
        <td class=\"text-nowrap\">---</td>
        ";
            // line 189
            if (($context["is_show_stats"] ?? null)) {
                // line 190
                yield "            <td class=\"value tbl_size font-monospace text-end\">-</td>
            <td class=\"value tbl_overhead font-monospace text-end\">-</td>
        ";
            }
            // line 193
            yield "        ";
            if (($context["show_charset"] ?? null)) {
                // line 194
                yield "            <td></td>
        ";
            }
            // line 196
            yield "        ";
            if (($context["show_comment"] ?? null)) {
                // line 197
                yield "            <td></td>
        ";
            }
            // line 199
            yield "        ";
            if (($context["show_creation"] ?? null)) {
                // line 200
                yield "            <td class=\"value tbl_creation font-monospace text-end\">-</td>
        ";
            }
            // line 202
            yield "        ";
            if (($context["show_last_update"] ?? null)) {
                // line 203
                yield "            <td class=\"value tbl_last_update font-monospace text-end\">-</td>
        ";
            }
            // line 205
            yield "        ";
            if (($context["show_last_check"] ?? null)) {
                // line 206
                yield "            <td class=\"value tbl_last_check font-monospace text-end\">-</td>
        ";
            }
            // line 208
            yield "
    ";
        } else {
            // line 210
            yield "
        ";
            // line 211
            if (($context["db_is_system_schema"] ?? null)) {
                // line 212
                yield "            ";
                $context["action_colspan"] = 2;
                // line 213
                yield "        ";
            } else {
                // line 214
                yield "            ";
                $context["action_colspan"] = 4;
                // line 215
                yield "        ";
            }
            // line 216
            yield "        ";
            if ((($context["num_favorite_tables"] ?? null) > 0)) {
                // line 217
                yield "            ";
                $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
                // line 218
                yield "        ";
            }
            // line 219
            yield "        ";
            if (($context["show_charset"] ?? null)) {
                // line 220
                yield "            ";
                $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
                // line 221
                yield "        ";
            }
            // line 222
            yield "        ";
            if (($context["show_comment"] ?? null)) {
                // line 223
                yield "            ";
                $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
                // line 224
                yield "        ";
            }
            // line 225
            yield "        ";
            if (($context["show_creation"] ?? null)) {
                // line 226
                yield "            ";
                $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
                // line 227
                yield "        ";
            }
            // line 228
            yield "        ";
            if (($context["show_last_update"] ?? null)) {
                // line 229
                yield "            ";
                $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
                // line 230
                yield "        ";
            }
            // line 231
            yield "        ";
            if (($context["show_last_check"] ?? null)) {
                // line 232
                yield "            ";
                $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
                // line 233
                yield "        ";
            }
            // line 234
            yield "
        <td colspan=\"";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action_colspan"] ?? null), "html", null, true);
            yield "\"
            class=\"text-center\">
            ";
yield _gettext("in use");
            // line 238
            yield "        </td>
    ";
        }
        // line 240
        yield "</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/structure_table_row.twig";
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
        return array (  587 => 240,  583 => 238,  577 => 235,  574 => 234,  571 => 233,  568 => 232,  565 => 231,  562 => 230,  559 => 229,  556 => 228,  553 => 227,  550 => 226,  547 => 225,  544 => 224,  541 => 223,  538 => 222,  535 => 221,  532 => 220,  529 => 219,  526 => 218,  523 => 217,  520 => 216,  517 => 215,  514 => 214,  511 => 213,  508 => 212,  506 => 211,  503 => 210,  499 => 208,  495 => 206,  492 => 205,  488 => 203,  485 => 202,  481 => 200,  478 => 199,  474 => 197,  471 => 196,  467 => 194,  464 => 193,  459 => 190,  457 => 189,  453 => 187,  448 => 184,  446 => 183,  443 => 182,  437 => 179,  434 => 178,  432 => 177,  429 => 176,  423 => 173,  420 => 172,  418 => 171,  415 => 170,  409 => 167,  406 => 166,  404 => 165,  401 => 164,  397 => 162,  391 => 160,  384 => 156,  379 => 155,  377 => 154,  374 => 153,  371 => 152,  369 => 151,  366 => 150,  362 => 148,  356 => 146,  354 => 145,  351 => 144,  349 => 143,  346 => 142,  340 => 139,  331 => 135,  327 => 134,  324 => 133,  322 => 132,  319 => 131,  316 => 130,  310 => 127,  307 => 126,  305 => 125,  302 => 124,  299 => 123,  296 => 122,  294 => 121,  289 => 120,  287 => 119,  284 => 118,  282 => 117,  275 => 114,  269 => 112,  262 => 108,  258 => 106,  256 => 105,  255 => 104,  253 => 102,  251 => 101,  247 => 100,  244 => 99,  241 => 96,  238 => 95,  236 => 94,  234 => 93,  233 => 92,  230 => 91,  223 => 87,  220 => 86,  218 => 85,  217 => 84,  216 => 81,  211 => 80,  208 => 78,  201 => 74,  198 => 73,  196 => 72,  195 => 71,  192 => 70,  189 => 69,  182 => 66,  180 => 65,  179 => 64,  178 => 63,  175 => 62,  173 => 61,  166 => 59,  163 => 58,  161 => 57,  154 => 53,  150 => 52,  143 => 48,  139 => 47,  132 => 43,  128 => 42,  124 => 40,  120 => 38,  118 => 36,  117 => 35,  116 => 34,  115 => 33,  113 => 32,  111 => 30,  110 => 29,  109 => 27,  107 => 26,  104 => 24,  101 => 23,  98 => 21,  92 => 18,  88 => 17,  85 => 16,  83 => 15,  78 => 13,  75 => 12,  73 => 11,  68 => 10,  62 => 7,  58 => 6,  54 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/structure/structure_table_row.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\database\\structure\\structure_table_row.twig");
    }
}
