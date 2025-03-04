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

/* display/results/table.twig */
class __TwigTemplate_238270a7fbaed7f0dc3da3a8960c8c95 extends Template
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
        $context["navigation_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["navigation"] ?? null))) {
                // line 3
                yield "    <table class=\"navigation d-print-none\">
      <tr>
        <td class=\"navigation_separator\"></td>

        ";
                // line 7
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "move_backward_buttons", [], "any", false, false, false, 7);
                yield "
        ";
                // line 8
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "page_selector", [], "any", false, false, false, 8);
                yield "
        ";
                // line 9
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "move_forward_buttons", [], "any", false, false, false, 9);
                yield "

        ";
                // line 11
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "number_total_page", [], "any", false, false, false, 11) != 1)) {
                    // line 12
                    yield "          <td><div class=\"navigation_separator\">|</div></td>
        ";
                }
                // line 14
                yield "
        ";
                // line 15
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "has_show_all", [], "any", false, false, false, 15)) {
                    // line 16
                    yield "          <td>
            <form action=\"";
                    // line 17
                    yield PhpMyAdmin\Url::getFromRoute("/sql");
                    yield "\" method=\"post\">
              ";
                    // line 18
                    yield PhpMyAdmin\Url::getHiddenFields(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "hidden_fields", [], "any", false, false, false, 18), ["session_max_rows" => CoreExtension::getAttribute($this->env, $this->source,                     // line 19
($context["navigation"] ?? null), "session_max_rows", [], "any", false, false, false, 19), "pos" => "0"]));
                    // line 21
                    yield "
              <input type=\"checkbox\" name=\"navig\" id=\"showAll_";
                    // line 22
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
                    yield "\" class=\"showAllRows\" value=\"all\"";
                    // line 23
                    yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "is_showing_all", [], "any", false, false, false, 23)) ? (" checked") : (""));
                    yield ">
              <label for=\"showAll_";
                    // line 24
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
                    yield "\">";
yield _gettext("Show all");
                    yield "</label>
            </form>
          </td>
          <td><div class=\"navigation_separator\">|</div></td>
        ";
                }
                // line 29
                yield "
        <td>
          <div class=\"save_edited hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"";
yield _gettext("Save edited data");
                // line 32
                yield "\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td>
          <div class=\"restore_column hide\">
            <input class=\"btn btn-link\" type=\"submit\" value=\"";
yield _gettext("Restore column order");
                // line 38
                yield "\">
            <div class=\"navigation_separator\">|</div>
          </div>
        </td>
        <td class=\"navigation_goto\">
          <form action=\"";
                // line 43
                yield PhpMyAdmin\Url::getFromRoute("/sql");
                yield "\" method=\"post\" class=\"maxRowsForm\">
            ";
                // line 44
                yield PhpMyAdmin\Url::getHiddenFields(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "hidden_fields", [], "any", false, false, false, 44), ["pos" => CoreExtension::getAttribute($this->env, $this->source,                 // line 45
($context["navigation"] ?? null), "pos", [], "any", false, false, false, 45), "unlim_num_rows" =>                 // line 46
($context["unlim_num_rows"] ?? null)]));
                // line 47
                yield "

            <label for=\"sessionMaxRowsSelect\">";
yield _gettext("Number of rows:");
                // line 49
                yield "</label>
            <select class=\"autosubmit\" name=\"session_max_rows\" id=\"sessionMaxRowsSelect\">
              ";
                // line 51
                $context["rows_options"] = [25, 50, 100, 250, 500];
                // line 52
                yield "              ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "is_showing_all", [], "any", false, false, false, 52)) {
                    // line 53
                    yield "                <option value=\"\" disabled selected>";
yield _gettext("All");
                    yield "</option>
              ";
                } elseif (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 54
($context["navigation"] ?? null), "max_rows", [], "any", false, false, false, 54), ($context["rows_options"] ?? null))) {
                    // line 55
                    yield "                ";
                    $context["rows_options"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::merge(($context["rows_options"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "max_rows", [], "any", false, false, false, 55)]), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (($context["a"] ?? null) <=> ($context["b"] ?? null)); });
                    // line 56
                    yield "              ";
                }
                // line 57
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["rows_options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 58
                    yield "                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                    yield "\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "max_rows", [], "any", false, false, false, 58) == $context["option"])) ? (" selected") : (""));
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                    yield "</option>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                yield "            </select>
          </form>
        </td>
        <td class=\"navigation_separator\"></td>
        <td class=\"largescreenonly\">
          <span>";
yield _gettext("Filter rows");
                // line 65
                yield ":</span>
          <input type=\"text\" class=\"filter_rows\" placeholder=\"";
yield _gettext("Search this table");
                // line 67
                yield "\" data-for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
                yield "\">
        </td>
        <td class=\"largescreenonly\">
          ";
                // line 70
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "sort_by_key", [], "any", false, false, false, 70))) {
                    // line 71
                    yield "            <form action=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/sql");
                    yield "\" method=\"post\" class=\"d-print-none\">
              ";
                    // line 72
                    yield PhpMyAdmin\Url::getHiddenFields(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "sort_by_key", [], "any", false, false, false, 72), "hidden_fields", [], "any", false, false, false, 72));
                    yield "
              ";
yield _gettext("Sort by key:");
                    // line 74
                    yield "              <select name=\"sql_query\" class=\"autosubmit\">
                ";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navigation"] ?? null), "sort_by_key", [], "any", false, false, false, 75), "options", [], "any", false, false, false, 75));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 76
                        yield "                  <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 76), "html", null, true);
                        yield "\"";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "is_selected", [], "any", false, false, false, 76)) ? (" selected") : (""));
                        yield ">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "content", [], "any", false, false, false, 76), "html", null, true);
                        yield "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    yield "              </select>
            </form>
          ";
                }
                // line 81
                yield "        </td>
        <td class=\"navigation_separator\"></td>
      </tr>
    </table>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        yield "
";
        // line 88
        yield ($context["sql_query_message"] ?? null);
        yield "

";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["navigation_html"] ?? null), "html", null, true);
        yield "

<input class=\"save_cells_at_once\" type=\"hidden\" value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["save_cells_at_once"] ?? null), "html", null, true);
        yield "\">
<div class=\"common_hidden_inputs\">
  ";
        // line 94
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
</div>

";
        // line 97
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 97))) {
            // line 98
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 98), "order", [], "any", false, false, false, 98)) {
                // line 99
                yield "    <input class=\"col_order\" type=\"hidden\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 99), "order", [], "any", false, false, false, 99), ","), "html", null, true);
                yield "\">
  ";
            }
            // line 101
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 101), "visibility", [], "any", false, false, false, 101)) {
                // line 102
                yield "    <input class=\"col_visib\" type=\"hidden\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 102), "visibility", [], "any", false, false, false, 102), ","), "html", null, true);
                yield "\">
  ";
            }
            // line 104
            yield "  ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 104), "is_view", [], "any", false, false, false, 104)) {
                // line 105
                yield "    <input class=\"table_create_time\" type=\"hidden\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "column_order", [], "any", false, false, false, 105), "table_create_time", [], "any", false, false, false, 105), "html", null, true);
                yield "\">
  ";
            }
        }
        // line 108
        yield "
";
        // line 109
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 109))) {
            // line 110
            yield "  <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\" name=\"displayOptionsForm\" class=\"ajax d-print-none\">
    ";
            // line 111
            yield PhpMyAdmin\Url::getHiddenInputs(["db" =>             // line 112
($context["db"] ?? null), "table" =>             // line 113
($context["table"] ?? null), "sql_query" =>             // line 114
($context["sql_query"] ?? null), "goto" =>             // line 115
($context["goto"] ?? null), "display_options_form" => 1]);
            // line 117
            yield "

    ";
            // line 119
            if ((($context["default_sliders_state"] ?? null) != "disabled")) {
                // line 120
                yield "    <div class=\"mb-3\">
      <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#extraOptions\" aria-expanded=\"";
                // line 121
                yield (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
                yield "\" aria-controls=\"extraOptions\">
        ";
yield _gettext("Extra options");
                // line 123
                yield "      </button>
    </div>
    <div class=\"collapse mb-3";
                // line 125
                yield (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
                yield "\" id=\"extraOptions\">
    ";
            }
            // line 127
            yield "
      <fieldset class=\"pma-fieldset\">
        <div class=\"formelement\">
          <div>
            <input type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioP";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\" value=\"P\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 131), "pftext", [], "any", false, false, false, 131) == "P")) ? (" checked") : (""));
            yield ">
            <label for=\"partialFulltextRadioP";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\">";
yield _gettext("Partial texts");
            yield "</label>
          </div>
          <div>
            <input type=\"radio\" name=\"pftext\" id=\"partialFulltextRadioF";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\" value=\"F\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 135), "pftext", [], "any", false, false, false, 135) == "F")) ? (" checked") : (""));
            yield ">
            <label for=\"partialFulltextRadioF";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\">";
yield _gettext("Full texts");
            yield "</label>
          </div>
        </div>

        ";
            // line 140
            if ((($context["relwork"] ?? null) && ($context["displaywork"] ?? null))) {
                // line 141
                yield "          <div class=\"formelement\">
            <div>
              <input type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioK";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
                yield "\" value=\"K\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 143), "relational_display", [], "any", false, false, false, 143) == "K")) ? (" checked") : (""));
                yield ">
              <label for=\"relationalDisplayRadioK";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
                yield "\">";
yield _gettext("Relational key");
                yield "</label>
            </div>
            <div>
              <input type=\"radio\" name=\"relational_display\" id=\"relationalDisplayRadioD";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
                yield "\" value=\"D\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 147), "relational_display", [], "any", false, false, false, 147) == "D")) ? (" checked") : (""));
                yield ">
              <label for=\"relationalDisplayRadioD";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
                yield "\">";
yield _gettext("Display column for relationships");
                yield "</label>
            </div>
          </div>
        ";
            }
            // line 152
            yield "
        <div class=\"formelement\">
          <input type=\"checkbox\" name=\"display_binary\" id=\"display_binary_";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\"";
            // line 155
            yield (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 155), "display_binary", [], "any", false, false, false, 155))) ? (" checked") : (""));
            yield ">
          <label for=\"display_binary_";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\">";
yield _gettext("Show binary contents");
            yield "</label>

          <input type=\"checkbox\" name=\"display_blob\" id=\"display_blob_";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\"";
            // line 159
            yield (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 159), "display_blob", [], "any", false, false, false, 159))) ? (" checked") : (""));
            yield ">
          <label for=\"display_blob_";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\">";
yield _gettext("Show BLOB contents");
            yield "</label>
        </div>

        ";
            // line 167
            yield "        <div class=\"formelement\">
          <input type=\"checkbox\" name=\"hide_transformation\" id=\"hide_transformation_";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\"";
            // line 169
            yield (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 169), "hide_transformation", [], "any", false, false, false, 169))) ? (" checked") : (""));
            yield ">
          <label for=\"hide_transformation_";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\">";
yield _gettext("Hide browser transformation");
            yield "</label>
        </div>

        <div class=\"formelement\">
          ";
            // line 174
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 174), "possible_as_geometry", [], "any", false, false, false, 174)) {
                // line 175
                yield "            <div>
              <input type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioGeom";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
                yield "\" value=\"GEOM\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 176), "geo_option", [], "any", false, false, false, 176) == "GEOM")) ? (" checked") : (""));
                yield ">
              <label for=\"geoOptionRadioGeom";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
                yield "\">";
yield _gettext("Geometry");
                yield "</label>
            </div>
          ";
            }
            // line 180
            yield "          <div>
            <input type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkt";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\" value=\"WKT\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 181), "geo_option", [], "any", false, false, false, 181) == "WKT")) ? (" checked") : (""));
            yield ">
            <label for=\"geoOptionRadioWkt";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\">";
yield _gettext("Well Known Text");
            yield "</label>
          </div>
          <div>
            <input type=\"radio\" name=\"geoOption\" id=\"geoOptionRadioWkb";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\" value=\"WKB\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "options", [], "any", false, false, false, 185), "geo_option", [], "any", false, false, false, 185) == "WKB")) ? (" checked") : (""));
            yield ">
            <label for=\"geoOptionRadioWkb";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\">";
yield _gettext("Well Known Binary");
            yield "</label>
          </div>
        </div>
        <div class=\"clearfloat\"></div>
      </fieldset>

      <fieldset class=\"pma-fieldset tblFooters\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Go");
            // line 193
            yield "\">
      </fieldset>
    ";
            // line 195
            if ((($context["default_sliders_state"] ?? null) != "disabled")) {
                // line 196
                yield "    </div>
    ";
            }
            // line 198
            yield "  </form>
";
        }
        // line 200
        yield "
";
        // line 201
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "has_bulk_actions_form", [], "any", false, false, false, 201)) {
            // line 202
            yield "  <form method=\"post\" name=\"resultsForm\" id=\"resultsForm_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "\" class=\"ajax\">
    ";
            // line 203
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null), 1);
            yield "
    <input type=\"hidden\" name=\"goto\" value=\"";
            // line 204
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\">
";
        }
        // line 206
        yield "
  <div class=\"table-responsive-md\">
    <table class=\"table table-striped table-hover table-sm table_results data ajax w-auto\" data-uniqueId=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
        yield "\">

      ";
        // line 210
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "button", [], "any", false, false, false, 210);
        yield "
      ";
        // line 211
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "table_headers_for_columns", [], "any", false, false, false, 211);
        yield "
      ";
        // line 212
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["headers"] ?? null), "column_at_right_side", [], "any", false, false, false, 212);
        yield "

        </tr>
      </thead>

      <tbody>
        ";
        // line 218
        yield ($context["body"] ?? null);
        yield "
      </tbody>
    </table>
  </div>

";
        // line 223
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["bulk_links"] ?? null))) {
            // line 224
            yield "    <div class=\"d-print-none\">
      <img class=\"selectallarrow\" src=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath((("arrow_" . ($context["text_dir"] ?? null)) . ".png")), "html", null, true);
            yield "\" width=\"38\" height=\"22\" alt=\"";
yield _gettext("With selected:");
            yield "\">
      <input type=\"checkbox\" id=\"resultsForm_";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "_checkall\" class=\"checkall_box\" title=\"";
yield _gettext("Check all");
            yield "\">
      <label for=\"resultsForm_";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_id"] ?? null), "html", null, true);
            yield "_checkall\">";
yield _gettext("Check all");
            yield "</label>
      <em class=\"with-selected\">";
yield _gettext("With selected:");
            // line 228
            yield "</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"edit\" title=\"";
yield _gettext("Edit");
            // line 230
            yield "\">
        ";
            // line 231
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit"));
            yield "
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"copy\" title=\"";
yield _gettext("Copy");
            // line 234
            yield "\">
        ";
            // line 235
            yield PhpMyAdmin\Html\Generator::getIcon("b_insrow", _gettext("Copy"));
            yield "
      </button>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete\" title=\"";
yield _gettext("Delete");
            // line 238
            yield "\">
        ";
            // line 239
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete"));
            yield "
      </button>

      ";
            // line 242
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["bulk_links"] ?? null), "has_export_button", [], "any", false, false, false, 242)) {
                // line 243
                yield "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
yield _gettext("Export");
                yield "\">
          ";
                // line 244
                yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", _gettext("Export"));
                yield "
        </button>
      ";
            }
            // line 247
            yield "    </div>

    <input type=\"hidden\" name=\"clause_is_unique\" value=\"";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bulk_links"] ?? null), "clause_is_unique", [], "any", false, false, false, 249), "html", null, true);
            yield "\">
    <input type=\"hidden\" name=\"sql_query\" value=\"";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sql_query"] ?? null), "html", null, true);
            yield "\">
  </form>
";
        }
        // line 253
        yield "
";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["navigation_html"] ?? null), "html", null, true);
        yield "

";
        // line 256
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["operations"] ?? null))) {
            // line 257
            yield "  <fieldset class=\"pma-fieldset d-print-none\">
    <legend>";
yield _gettext("Query results operations");
            // line 258
            yield "</legend>

    ";
            // line 260
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["operations"] ?? null), "has_print_link", [], "any", false, false, false, 260)) {
                // line 261
                yield "      <button type=\"button\" class=\"btn btn-link jsPrintButton\">";
                yield PhpMyAdmin\Html\Generator::getIcon("b_print", _gettext("Print"), true);
                yield "</button>

      ";
                // line 263
                yield PhpMyAdmin\Html\Generator::linkOrButton("#", null, PhpMyAdmin\Html\Generator::getIcon("b_insrow", _gettext("Copy to clipboard"), true), ["id" => "copyToClipBoard", "class" => "btn"]);
                // line 268
                yield "
    ";
            }
            // line 270
            yield "
    ";
            // line 271
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["operations"] ?? null), "has_procedure", [], "any", false, false, false, 271)) {
                // line 272
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["operations"] ?? null), "has_export_link", [], "any", false, false, false, 272)) {
                    // line 273
                    yield "        ";
                    yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/table/export"), CoreExtension::getAttribute($this->env, $this->source,                     // line 275
($context["operations"] ?? null), "url_params", [], "any", false, false, false, 275), PhpMyAdmin\Html\Generator::getIcon("b_tblexport", _gettext("Export"), true), ["class" => "btn"]);
                    // line 278
                    yield "

        ";
                    // line 280
                    yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/table/chart"), CoreExtension::getAttribute($this->env, $this->source,                     // line 282
($context["operations"] ?? null), "url_params", [], "any", false, false, false, 282), PhpMyAdmin\Html\Generator::getIcon("b_chart", _gettext("Display chart"), true), ["class" => "btn"]);
                    // line 285
                    yield "

        ";
                    // line 287
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["operations"] ?? null), "has_geometry", [], "any", false, false, false, 287)) {
                        // line 288
                        yield "          ";
                        yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/table/gis-visualization"), CoreExtension::getAttribute($this->env, $this->source,                         // line 290
($context["operations"] ?? null), "url_params", [], "any", false, false, false, 290), PhpMyAdmin\Html\Generator::getIcon("b_globe", _gettext("Visualize GIS data"), true), ["class" => "btn"]);
                        // line 293
                        yield "
        ";
                    }
                    // line 295
                    yield "      ";
                }
                // line 296
                yield "
      <span>
        ";
                // line 298
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/view/create"), ["db" =>                 // line 300
($context["db"] ?? null), "table" => ($context["table"] ?? null), "sql_query" => ($context["sql_query"] ?? null), "printview" => true], PhpMyAdmin\Html\Generator::getIcon("b_view_add", _gettext("Create view"), true), ["class" => "btn create_view ajax"]);
                // line 303
                yield "
      </span>
    ";
            }
            // line 306
            yield "  </fieldset>
";
        }
        // line 308
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["operations"] ?? null)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["operations"] ?? null), "has_procedure", [], "any", false, false, false, 308))) {
            // line 309
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/create_view.twig");
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "display/results/table.twig";
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
        return array (  755 => 309,  753 => 308,  749 => 306,  744 => 303,  742 => 300,  741 => 298,  737 => 296,  734 => 295,  730 => 293,  728 => 290,  726 => 288,  724 => 287,  720 => 285,  718 => 282,  717 => 280,  713 => 278,  711 => 275,  709 => 273,  706 => 272,  704 => 271,  701 => 270,  697 => 268,  695 => 263,  689 => 261,  687 => 260,  683 => 258,  679 => 257,  677 => 256,  672 => 254,  669 => 253,  663 => 250,  659 => 249,  655 => 247,  649 => 244,  644 => 243,  642 => 242,  636 => 239,  633 => 238,  626 => 235,  623 => 234,  616 => 231,  613 => 230,  608 => 228,  601 => 227,  595 => 226,  589 => 225,  586 => 224,  584 => 223,  576 => 218,  567 => 212,  563 => 211,  559 => 210,  554 => 208,  550 => 206,  545 => 204,  541 => 203,  536 => 202,  534 => 201,  531 => 200,  527 => 198,  523 => 196,  521 => 195,  517 => 193,  504 => 186,  498 => 185,  490 => 182,  484 => 181,  481 => 180,  473 => 177,  467 => 176,  464 => 175,  462 => 174,  453 => 170,  449 => 169,  446 => 168,  443 => 167,  435 => 160,  431 => 159,  428 => 158,  421 => 156,  417 => 155,  414 => 154,  410 => 152,  401 => 148,  395 => 147,  387 => 144,  381 => 143,  377 => 141,  375 => 140,  366 => 136,  360 => 135,  352 => 132,  346 => 131,  340 => 127,  335 => 125,  331 => 123,  326 => 121,  323 => 120,  321 => 119,  317 => 117,  315 => 115,  314 => 114,  313 => 113,  312 => 112,  311 => 111,  306 => 110,  304 => 109,  301 => 108,  294 => 105,  291 => 104,  285 => 102,  282 => 101,  276 => 99,  273 => 98,  271 => 97,  265 => 94,  260 => 92,  255 => 90,  250 => 88,  247 => 87,  238 => 81,  233 => 78,  220 => 76,  216 => 75,  213 => 74,  208 => 72,  203 => 71,  201 => 70,  194 => 67,  190 => 65,  182 => 60,  169 => 58,  164 => 57,  161 => 56,  158 => 55,  156 => 54,  151 => 53,  148 => 52,  146 => 51,  142 => 49,  137 => 47,  135 => 46,  134 => 45,  133 => 44,  129 => 43,  122 => 38,  113 => 32,  107 => 29,  97 => 24,  93 => 23,  90 => 22,  87 => 21,  85 => 19,  84 => 18,  80 => 17,  77 => 16,  75 => 15,  72 => 14,  68 => 12,  66 => 11,  61 => 9,  57 => 8,  53 => 7,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "display/results/table.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\display\\results\\table.twig");
    }
}
