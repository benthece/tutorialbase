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

/* columns_definitions/table_fields_definitions.twig */
class __TwigTemplate_c6e63f740a0c006d299e560da3d89a36 extends Template
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
        yield "<div class=\"responsivetable\">
<table id=\"table_columns\" class=\"table table-striped caption-top align-middle mb-0 noclick\">
    <caption class=\"tblHeaders\">
        ";
yield _gettext("Structure");
        // line 5
        yield "        ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("CREATE_TABLE");
        yield "
    </caption>
    <tr>
        <th>
            ";
yield _gettext("Name");
        // line 10
        yield "        </th>
        <th>
            ";
yield _gettext("Type");
        // line 13
        yield "            ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("data-types");
        yield "
        </th>
        <th>
            ";
yield _gettext("Length/Values");
        // line 17
        yield "            ";
        yield PhpMyAdmin\Html\Generator::showHint(_gettext("If column type is \"enum\" or \"set\", please enter the values using this format: 'a','b','c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
        yield "
        </th>
        <th>
            ";
yield _gettext("Default");
        // line 21
        yield "            ";
        yield PhpMyAdmin\Html\Generator::showHint(_gettext("For default values, please enter just a single value, without backslash escaping or quotes, using this format: a"));
        yield "
        </th>
        <th>
            ";
yield _gettext("Collation");
        // line 25
        yield "        </th>
        <th>
            ";
yield _gettext("Attributes");
        // line 28
        yield "        </th>
        <th>
            ";
yield _gettext("Null");
        // line 31
        yield "        </th>

        ";
        // line 34
        yield "        ";
        if ((array_key_exists("change_column", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["change_column"] ?? null)))) {
            // line 35
            yield "            <th>
                ";
yield _gettext("Adjust privileges");
            // line 37
            yield "                ";
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
            yield "
            </th>
        ";
        }
        // line 40
        yield "
        ";
        // line 44
        yield "        ";
        if ( !($context["is_backup"] ?? null)) {
            // line 45
            yield "            <th>
                ";
yield _gettext("Index");
            // line 47
            yield "            </th>
        ";
        }
        // line 49
        yield "
        <th>
            <abbr title=\"AUTO_INCREMENT\">A_I</abbr>
        </th>
        <th>
            ";
yield _gettext("Comments");
        // line 55
        yield "        </th>

        ";
        // line 57
        if (($context["is_virtual_columns_supported"] ?? null)) {
            // line 58
            yield "            <th>
                ";
yield _gettext("Virtuality");
            // line 60
            yield "            </th>
        ";
        }
        // line 62
        yield "
        ";
        // line 63
        if (array_key_exists("fields_meta", $context)) {
            // line 64
            yield "            <th>
                ";
yield _gettext("Move column");
            // line 66
            yield "            </th>
        ";
        }
        // line 68
        yield "
        ";
        // line 69
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "browserTransformationFeature", [], "any", false, false, false, 69)) && ($context["browse_mime"] ?? null))) {
            // line 70
            yield "            <th>
                ";
yield _gettext("Media type");
            // line 72
            yield "            </th>
            <th>
                <a href=\"";
            // line 74
            yield PhpMyAdmin\Url::getFromRoute("/transformation/overview");
            yield "#transformation\" title=\"";
yield _gettext("List of available transformations and their options");
            // line 76
            yield "\" target=\"_blank\">
                    ";
yield _gettext("Browser display transformation");
            // line 78
            yield "                </a>
            </th>
            <th>
                ";
yield _gettext("Browser display transformation options");
            // line 82
            yield "                ";
            yield PhpMyAdmin\Html\Generator::showHint(_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            yield "
            </th>
            <th>
                <a href=\"";
            // line 85
            yield PhpMyAdmin\Url::getFromRoute("/transformation/overview");
            yield "#input_transformation\"
                   title=\"";
yield _gettext("List of available transformations and their options");
            // line 86
            yield "\"
                   target=\"_blank\">
                    ";
yield _gettext("Input transformation");
            // line 89
            yield "                </a>
            </th>
            <th>
                ";
yield _gettext("Input transformation options");
            // line 93
            yield "                ";
            yield PhpMyAdmin\Html\Generator::showHint(_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br>If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            yield "
            </th>
        ";
        }
        // line 96
        yield "    </tr>
    ";
        // line 97
        $context["options"] = ["" => "", "VIRTUAL" => "VIRTUAL"];
        // line 98
        yield "    ";
        if (($context["supports_stored_keyword"] ?? null)) {
            // line 99
            yield "        ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["STORED" => "STORED"]);
            // line 100
            yield "    ";
        } else {
            // line 101
            yield "        ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["PERSISTENT" => "PERSISTENT"]);
            // line 102
            yield "    ";
        }
        // line 103
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["content_cells"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["content_row"]) {
            // line 104
            yield "        <tr>
            ";
            // line 105
            yield from $this->loadTemplate("columns_definitions/column_attributes.twig", "columns_definitions/table_fields_definitions.twig", 105)->unwrap()->yield(CoreExtension::toArray(Twig\Extension\CoreExtension::merge($context["content_row"], ["options" =>             // line 106
($context["options"] ?? null), "change_column" =>             // line 107
($context["change_column"] ?? null), "is_virtual_columns_supported" =>             // line 108
($context["is_virtual_columns_supported"] ?? null), "browse_mime" =>             // line 109
($context["browse_mime"] ?? null), "max_rows" =>             // line 110
($context["max_rows"] ?? null), "char_editing" =>             // line 111
($context["char_editing"] ?? null), "attribute_types" =>             // line 112
($context["attribute_types"] ?? null), "privs_available" =>             // line 113
($context["privs_available"] ?? null), "max_length" =>             // line 114
($context["max_length"] ?? null), "charsets" =>             // line 115
($context["charsets"] ?? null), "relation_parameters" =>             // line 116
($context["relation_parameters"] ?? null)])));
            // line 118
            yield "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['content_row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "</table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/table_fields_definitions.twig";
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
        return array (  268 => 120,  261 => 118,  259 => 116,  258 => 115,  257 => 114,  256 => 113,  255 => 112,  254 => 111,  253 => 110,  252 => 109,  251 => 108,  250 => 107,  249 => 106,  248 => 105,  245 => 104,  240 => 103,  237 => 102,  234 => 101,  231 => 100,  228 => 99,  225 => 98,  223 => 97,  220 => 96,  213 => 93,  207 => 89,  202 => 86,  197 => 85,  190 => 82,  184 => 78,  180 => 76,  176 => 74,  172 => 72,  168 => 70,  166 => 69,  163 => 68,  159 => 66,  155 => 64,  153 => 63,  150 => 62,  146 => 60,  142 => 58,  140 => 57,  136 => 55,  128 => 49,  124 => 47,  120 => 45,  117 => 44,  114 => 40,  107 => 37,  103 => 35,  100 => 34,  96 => 31,  91 => 28,  86 => 25,  78 => 21,  70 => 17,  62 => 13,  57 => 10,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "columns_definitions/table_fields_definitions.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\columns_definitions\\table_fields_definitions.twig");
    }
}
