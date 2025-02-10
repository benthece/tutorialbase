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

/* console/display.twig */
class __TwigTemplate_07a4a84c1eb9f6f841e4571992ae3fb3 extends Template
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
        yield "<div id=\"pma_console_container\" class=\"d-print-none\">
    <div id=\"pma_console\">
        ";
        // line 4
        yield "        ";
        yield from $this->loadTemplate("console/toolbar.twig", "console/display.twig", 4)->unwrap()->yield(CoreExtension::toArray(["parent_div_classes" => "collapsed", "content_array" => [["switch_button console_switch", _gettext("Console"), "image" =>         // line 7
($context["image"] ?? null)], ["button clear", _gettext("Clear")], ["button history", _gettext("History")], ["button options", _gettext("Options")], ((        // line 11
($context["has_bookmark_feature"] ?? null)) ? (["button bookmarks", _gettext("Bookmarks")]) : (null)), ["button debug hide", _gettext("Debug SQL")]]]));
        // line 15
        yield "        ";
        // line 16
        yield "        <div class=\"content\">
            <div class=\"console_message_container\">
                <div class=\"message welcome\">
                    <span id=\"instructions-0\">
                        ";
yield _gettext("Press Ctrl+Enter to execute query");
        // line 21
        yield "                    </span>
                    <span class=\"hide\" id=\"instructions-1\">
                        ";
yield _gettext("Press Enter to execute query");
        // line 24
        yield "                    </span>
                </div>
                ";
        // line 26
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["sql_history"] ?? null))) {
            // line 27
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), ($context["sql_history"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 28
                yield "                        <div class=\"message history collapsed hide";
                // line 29
                yield ((CoreExtension::matches("@^SELECT[[:space:]]+@i", (($_v0 = $context["record"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["sqlquery"] ?? null) : null))) ? (" select") : (""));
                yield "\"
                            targetdb=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["record"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["db"] ?? null) : null), "html", null, true);
                yield "\" targettable=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["record"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["table"] ?? null) : null), "html", null, true);
                yield "\">
                            ";
                // line 31
                yield from $this->loadTemplate("console/query_action.twig", "console/display.twig", 31)->unwrap()->yield(CoreExtension::toArray(["parent_div_classes" => "action_content", "content_array" => [["action collapse", _gettext("Collapse")], ["action expand", _gettext("Expand")], ["action requery", _gettext("Requery")], ["action edit", _gettext("Edit")], ["action explain", _gettext("Explain")], ["action profiling", _gettext("Profiling")], ((                // line 40
($context["has_bookmark_feature"] ?? null)) ? (["action bookmark", _gettext("Bookmark")]) : (null)), ["text failed", _gettext("Query failed")], ["text targetdb", _gettext("Database"), "extraSpan" => (($_v3 =                 // line 42
$context["record"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["db"] ?? null) : null)], ["text query_time", _gettext("Queried time"), "extraSpan" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 46
$context["record"], "timevalue", [], "array", true, true, false, 46)) ? ((($_v4 =                 // line 47
$context["record"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["timevalue"] ?? null) : null)) : (_gettext("During current session")))]]]));
                // line 51
                yield "                            <span class=\"query\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["record"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["sqlquery"] ?? null) : null), "html", null, true);
                yield "</span>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['record'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                ";
        }
        // line 55
        yield "            </div><!-- console_message_container -->
            <div class=\"query_input\">
                <span class=\"console_query_input\"></span>
            </div>
        </div><!-- message end -->
        ";
        // line 61
        yield "        <div class=\"mid_layer\"></div>
        ";
        // line 63
        yield "        <div class=\"card\" id=\"debug_console\">
            ";
        // line 64
        yield from $this->loadTemplate("console/toolbar.twig", "console/display.twig", 64)->unwrap()->yield(CoreExtension::toArray(["parent_div_classes" => "", "content_array" => [["button order order_asc", _gettext("ascending")], ["button order order_desc", _gettext("descending")], ["text", _gettext("Order:")], ["switch_button", _gettext("Debug SQL")], ["button order_by sort_count", _gettext("Count")], ["button order_by sort_exec", _gettext("Execution order")], ["button order_by sort_time", _gettext("Time taken")], ["text", _gettext("Order by:")], ["button group_queries", _gettext("Group queries")], ["button ungroup_queries", _gettext("Ungroup queries")]]]));
        // line 79
        yield "            <div class=\"content debug\">
                <div class=\"message welcome\"></div>
                <div class=\"debugLog\"></div>
            </div> <!-- Content -->
            <div class=\"templates\">
                ";
        // line 84
        yield from $this->loadTemplate("console/query_action.twig", "console/display.twig", 84)->unwrap()->yield(CoreExtension::toArray(["parent_div_classes" => "debug_query action_content", "content_array" => [["action collapse", _gettext("Collapse")], ["action expand", _gettext("Expand")], ["action dbg_show_trace", _gettext("Show trace")], ["action dbg_hide_trace", _gettext("Hide trace")], ["text count hide", _gettext("Count"), "extraSpan" => ""], ["text time", _gettext("Time taken"), "extraSpan" => ""]]]));
        // line 95
        yield "            </div> <!-- Template -->
        </div> <!-- Debug SQL card -->
        ";
        // line 97
        if (($context["has_bookmark_feature"] ?? null)) {
            // line 98
            yield "            <div class=\"card\" id=\"pma_bookmarks\">
                ";
            // line 99
            yield from $this->loadTemplate("console/toolbar.twig", "console/display.twig", 99)->unwrap()->yield(CoreExtension::toArray(["parent_div_classes" => "", "content_array" => [["switch_button", _gettext("Bookmarks")], ["button refresh", _gettext("Refresh")], ["button add", _gettext("Add")]]]));
            // line 107
            yield "                <div class=\"content bookmark\">
                    ";
            // line 108
            yield ($context["bookmark_content"] ?? null);
            yield "
                </div>
                <div class=\"mid_layer\"></div>
                <div class=\"card add\">
                    ";
            // line 112
            yield from $this->loadTemplate("console/toolbar.twig", "console/display.twig", 112)->unwrap()->yield(CoreExtension::toArray(["parent_div_classes" => "", "content_array" => [["switch_button", _gettext("Add bookmark")]]]));
            // line 118
            yield "                    <div class=\"content add_bookmark\">
                        <div class=\"options\">
                            <label>
                                ";
yield _gettext("Label");
            // line 121
            yield ": <input type=\"text\" name=\"label\">
                            </label>
                            <label>
                                ";
yield _gettext("Target database");
            // line 124
            yield ": <input type=\"text\" name=\"targetdb\">
                            </label>
                            <label>
                                <input type=\"checkbox\" name=\"shared\">";
yield _gettext("Share this bookmark");
            // line 128
            yield "                            </label>
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"submit\">";
yield _gettext("OK");
            // line 129
            yield "</button>
                        </div> <!-- options -->
                        <div class=\"query_input\">
                            <span class=\"bookmark_add_input\"></span>
                        </div>
                    </div>
                </div> <!-- Add bookmark card -->
            </div> <!-- Bookmarks card -->
        ";
        }
        // line 138
        yield "        ";
        // line 139
        yield "        <div class=\"card\" id=\"pma_console_options\">
            ";
        // line 140
        yield from $this->loadTemplate("console/toolbar.twig", "console/display.twig", 140)->unwrap()->yield(CoreExtension::toArray(["parent_div_classes" => "", "content_array" => [["switch_button", _gettext("Options")], ["button default", _gettext("Set default")]]]));
        // line 147
        yield "            <div class=\"content\">
                <label>
                    <input type=\"checkbox\" name=\"always_expand\">";
yield _gettext("Always expand query messages");
        // line 150
        yield "                </label>
                <br>
                <label>
                    <input type=\"checkbox\" name=\"start_history\">";
yield _gettext("Show query history at start");
        // line 154
        yield "                </label>
                <br>
                <label>
                    <input type=\"checkbox\" name=\"current_query\">";
yield _gettext("Show current browsing query");
        // line 158
        yield "                </label>
                <br>
                <label>
                    <input type=\"checkbox\" name=\"enter_executes\">
                        ";
yield _gettext("Execute queries on Enter and insert new line with Shift+Enter. To make this permanent, view settings.");
        // line 165
        yield "                </label>
                <br>
                <label>
                    <input type=\"checkbox\" name=\"dark_theme\">";
yield _gettext("Switch to dark theme");
        // line 169
        yield "                </label>
                <br>
            </div>
        </div> <!-- Options card -->
        <div class=\"templates\">
            ";
        // line 175
        yield "            ";
        yield from $this->loadTemplate("console/query_action.twig", "console/display.twig", 175)->unwrap()->yield(CoreExtension::toArray(["parent_div_classes" => "query_actions", "content_array" => [["action collapse", _gettext("Collapse")], ["action expand", _gettext("Expand")], ["action requery", _gettext("Requery")], ["action edit", _gettext("Edit")], ["action explain", _gettext("Explain")], ["action profiling", _gettext("Profiling")], ((        // line 184
($context["has_bookmark_feature"] ?? null)) ? (["action bookmark", _gettext("Bookmark")]) : (null)), ["text failed", _gettext("Query failed")], ["text targetdb", _gettext("Database"), "extraSpan" => ""], ["text query_time", _gettext("Queried time"), "extraSpan" => ""]]]));
        // line 190
        yield "        </div>
    </div> <!-- #console end -->
</div> <!-- #console_container end -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "console/display.twig";
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
        return array (  235 => 190,  233 => 184,  231 => 175,  224 => 169,  218 => 165,  211 => 158,  205 => 154,  199 => 150,  194 => 147,  192 => 140,  189 => 139,  187 => 138,  176 => 129,  172 => 128,  166 => 124,  160 => 121,  154 => 118,  152 => 112,  145 => 108,  142 => 107,  140 => 99,  137 => 98,  135 => 97,  131 => 95,  129 => 84,  122 => 79,  120 => 64,  117 => 63,  114 => 61,  107 => 55,  104 => 54,  94 => 51,  92 => 47,  91 => 46,  90 => 42,  89 => 40,  88 => 31,  82 => 30,  78 => 29,  76 => 28,  71 => 27,  69 => 26,  65 => 24,  60 => 21,  53 => 16,  51 => 15,  49 => 11,  48 => 7,  46 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "console/display.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\console\\display.twig");
    }
}
