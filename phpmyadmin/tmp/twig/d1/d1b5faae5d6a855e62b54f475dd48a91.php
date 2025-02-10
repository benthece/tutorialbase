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

/* columns_definitions/column_attributes.twig */
class __TwigTemplate_152282e73bd621be44226b7fd597072c extends Template
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
        // line 2
        $context["ci"] = 0;
        // line 3
        yield "
";
        // line 6
        $context["ci_offset"] =  -1;
        // line 7
        yield "
<td class=\"text-center\">
    ";
        // line 10
        yield "    ";
        yield from $this->loadTemplate("columns_definitions/column_name.twig", "columns_definitions/column_attributes.twig", 10)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 11
($context["column_number"] ?? null), "ci" =>         // line 12
($context["ci"] ?? null), "ci_offset" =>         // line 13
($context["ci_offset"] ?? null), "column_meta" =>         // line 14
($context["column_meta"] ?? null), "has_central_columns_feature" =>  !(null === CoreExtension::getAttribute($this->env, $this->source,         // line 15
($context["relation_parameters"] ?? null), "centralColumnsFeature", [], "any", false, false, false, 15)), "max_rows" =>         // line 16
($context["max_rows"] ?? null)]));
        // line 18
        yield "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 19
        yield "</td>
<td class=\"text-center\">
  <select class=\"column_type\" name=\"field_type[";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\"";
        // line 22
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 22) &&  !(($_v0 = (($_v1 = ($context["column_meta"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["column_status"] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["isEditable"] ?? null) : null))) ? (" disabled") : (""));
        yield ">
    ";
        // line 23
        yield PhpMyAdmin\Util::getSupportedDatatypes(true, ($context["type_upper"] ?? null));
        yield "
  </select>
  ";
        // line 25
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 26
        yield "</td>
<td class=\"text-center\">
  <input id=\"field_";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" type=\"text\" name=\"field_length[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" size=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["length_values_input_size"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["length"] ?? null), "html", null, true);
        yield "\" class=\"textfield\">
  <p class=\"enum_notice\" id=\"enum_notice_";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\">
    <a href=\"#\" class=\"open_enum_editor\">";
yield _gettext("Edit ENUM/SET values");
        // line 31
        yield "</a>
  </p>
  ";
        // line 33
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 34
        yield "</td>
<td class=\"text-center\">
  <select name=\"field_default_type[";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" class=\"default_type\">
    <option value=\"NONE\"";
        // line 37
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 37) && ((($_v2 = ($context["column_meta"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["DefaultType"] ?? null) : null) == "NONE"))) ? (" selected") : (""));
        yield ">
      ";
yield _pgettext("for default", "None");
        // line 39
        yield "    </option>
    <option value=\"USER_DEFINED\"";
        // line 40
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 40) && ((($_v3 = ($context["column_meta"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["DefaultType"] ?? null) : null) == "USER_DEFINED"))) ? (" selected") : (""));
        yield ">
      ";
yield _gettext("As defined:");
        // line 42
        yield "    </option>
    <option value=\"NULL\"";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 43) && ((($_v4 = ($context["column_meta"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["DefaultType"] ?? null) : null) == "NULL"))) ? (" selected") : (""));
        yield ">
      NULL
    </option>
    <option value=\"CURRENT_TIMESTAMP\"";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 46) && ((($_v5 = ($context["column_meta"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["DefaultType"] ?? null) : null) == "CURRENT_TIMESTAMP"))) ? (" selected") : (""));
        yield ">
      CURRENT_TIMESTAMP
    </option>
    ";
        // line 49
        if (PhpMyAdmin\Util::isUUIDSupported()) {
            // line 50
            yield "    <option value=\"UUID\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "DefaultType", [], "array", true, true, false, 50) && ((($_v6 = ($context["column_meta"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["DefaultType"] ?? null) : null) == "UUID"))) ? (" selected") : (""));
            yield ">
      UUID
    </option>
    ";
        }
        // line 54
        yield "  </select>
  ";
        // line 55
        if ((($context["char_editing"] ?? null) == "textarea")) {
            // line 56
            yield "    <textarea name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" cols=\"15\" class=\"textfield default_value\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["default_value"] ?? null), "html", null, true);
            yield "</textarea>
  ";
        } else {
            // line 58
            yield "    <input type=\"text\" name=\"field_default_value[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" size=\"12\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["default_value"] ?? null), "html", null, true);
            yield "\" class=\"textfield default_value\">
  ";
        }
        // line 60
        yield "  ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 61
        yield "</td>
<td class=\"text-center\">
  ";
        // line 64
        yield "  <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\">
    <option value=\"\"></option>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 67
            yield "      <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 67), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 67), "html", null, true);
            yield "\">
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 69
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 69), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 69), "html", null, true);
                yield "\"";
                // line 70
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 70) == (($_v7 = ($context["column_meta"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["Collation"] ?? null) : null))) ? (" selected") : (""));
                yield ">";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 71), "html", null, true);
                // line 72
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "      </optgroup>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "  </select>
  ";
        // line 77
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 78
        yield "</td>
<td class=\"text-center\">
    ";
        // line 81
        yield "    ";
        yield from $this->loadTemplate("columns_definitions/column_attribute.twig", "columns_definitions/column_attributes.twig", 81)->unwrap()->yield(CoreExtension::toArray(["column_number" =>         // line 82
($context["column_number"] ?? null), "ci" =>         // line 83
($context["ci"] ?? null), "ci_offset" =>         // line 84
($context["ci_offset"] ?? null), "column_meta" =>         // line 85
($context["column_meta"] ?? null), "extracted_columnspec" =>         // line 86
($context["extracted_columnspec"] ?? null), "submit_attribute" =>         // line 87
($context["submit_attribute"] ?? null), "attribute_types" =>         // line 88
($context["attribute_types"] ?? null)]));
        // line 90
        yield "    ";
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 91
        yield "</td>
<td class=\"text-center\">
    <input name=\"field_null[";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"";
        // line 94
        yield (((( !Twig\Extension\CoreExtension::testEmpty((($_v8 = ($context["column_meta"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["Null"] ?? null) : null)) && ((($_v9 = ($context["column_meta"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["Null"] ?? null) : null) != "NO")) && ((($_v10 = ($context["column_meta"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["Null"] ?? null) : null) != "NOT NULL"))) ? (" checked") : (""));
        yield ">
    ";
        // line 95
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 96
        yield "</td>
";
        // line 97
        if ((array_key_exists("change_column", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["change_column"] ?? null)))) {
            // line 98
            yield "    ";
            // line 99
            yield "    <td class=\"text-center\">
      <input name=\"field_adjust_privileges[";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" type=\"checkbox\" value=\"NULL\" class=\"allow_null\"";
            // line 101
            if (($context["privs_available"] ?? null)) {
                yield " checked>";
            } else {
                // line 102
                yield " title=\"";
yield _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details");
                yield "\" disabled>";
            }
            // line 104
            yield "      ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 105
            yield "    </td>
";
        }
        // line 107
        if ( !($context["is_backup"] ?? null)) {
            // line 108
            yield "    ";
            // line 109
            yield "    <td class=\"text-center\">
      <select name=\"field_key[";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" data-index=\"\">
        <option value=\"none_";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\">---</option>
        <option value=\"primary_";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\" title=\"";
yield _gettext("Primary");
            yield "\"";
            // line 113
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 113) && ((($_v11 = ($context["column_meta"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["Key"] ?? null) : null) == "PRI"))) ? (" selected") : (""));
            yield ">
          PRIMARY
        </option>
        <option value=\"unique_";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\" title=\"";
yield _gettext("Unique");
            yield "\"";
            // line 117
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 117) && ((($_v12 = ($context["column_meta"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["Key"] ?? null) : null) == "UNI"))) ? (" selected") : (""));
            yield ">
          UNIQUE
        </option>
        <option value=\"index_";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\" title=\"";
yield _gettext("Index");
            yield "\"";
            // line 121
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 121) && ((($_v13 = ($context["column_meta"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["Key"] ?? null) : null) == "MUL"))) ? (" selected") : (""));
            yield ">
          INDEX
        </option>
        <option value=\"fulltext_";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\" title=\"";
yield _gettext("Fulltext");
            yield "\"";
            // line 125
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 125) && ((($_v14 = ($context["column_meta"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["Key"] ?? null) : null) == "FULLTEXT"))) ? (" selected") : (""));
            yield ">
          FULLTEXT
        </option>
        <option value=\"spatial_";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "\" title=\"";
yield _gettext("Spatial");
            yield "\"";
            // line 129
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Key", [], "array", true, true, false, 129) && ((($_v15 = ($context["column_meta"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["Key"] ?? null) : null) == "SPATIAL"))) ? (" selected") : (""));
            yield ">
          SPATIAL
        </option>
      </select>
      ";
            // line 133
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 134
            yield "    </td>
";
        }
        // line 136
        yield "<td class=\"text-center\">
  <input name=\"field_extra[";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" id=\"field_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" type=\"checkbox\" value=\"AUTO_INCREMENT\"";
        // line 138
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 138) && (Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($_v16 = ($context["column_meta"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["Extra"] ?? null) : null)) == "auto_increment"))) ? (" checked") : (""));
        yield ">
  ";
        // line 139
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 140
        yield "</td>
<td class=\"text-center\">
  <textarea id=\"field_";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\" rows=\"1\" name=\"field_comments[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\" maxlength=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_length"] ?? null), "html", null, true);
        yield "\">";
        // line 143
        yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 143) && is_iterable(($context["comments_map"] ?? null))) && CoreExtension::getAttribute($this->env, $this->source, ($context["comments_map"] ?? null), (($_v17 = ($context["column_meta"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["Field"] ?? null) : null), [], "array", true, true, false, 143))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v18 = ($context["comments_map"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[(($_v19 = ($context["column_meta"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["Field"] ?? null) : null)] ?? null) : null), "html", null, true)) : (""));
        // line 144
        yield "</textarea>
  ";
        // line 145
        $context["ci"] = (($context["ci"] ?? null) + 1);
        // line 146
        yield "</td>
 ";
        // line 148
        if (($context["is_virtual_columns_supported"] ?? null)) {
            // line 149
            yield "    <td class=\"text-center\">
      <select name=\"field_virtuality[";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" id=\"field_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" class=\"virtuality\">
        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 152
                yield "          ";
                $context["virtuality"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 152)) ? ((($_v20 = ($context["column_meta"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["Extra"] ?? null) : null)) : (null));
                // line 153
                yield "          ";
                // line 154
                yield "          ";
                $context["virtuality"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Virtuality", [], "array", true, true, false, 154)) ? ((($_v21 = ($context["column_meta"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["Virtuality"] ?? null) : null)) : (($context["virtuality"] ?? null)));
                // line 155
                yield "
          <option value=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                yield (((( !(null === ($context["virtuality"] ?? null)) && ($context["key"] != "")) && (Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["virtuality"] ?? null), 0, Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["key"])) === $context["key"]))) ? (" selected") : (""));
                yield ">
            ";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            yield "      </select>

      ";
            // line 162
            if ((($context["char_editing"] ?? null) == "textarea")) {
                // line 163
                yield "        <textarea name=\"field_expression[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
                yield "]\" cols=\"15\" class=\"textfield expression\">";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 163)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v22 = ($context["column_meta"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["Expression"] ?? null) : null), "html", null, true)) : (""));
                yield "</textarea>
      ";
            } else {
                // line 165
                yield "        <input type=\"text\" name=\"field_expression[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
                yield "]\" size=\"12\" value=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Expression", [], "array", true, true, false, 165)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v23 = ($context["column_meta"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["Expression"] ?? null) : null), "html", null, true)) : (""));
                yield "\" placeholder=\"";
yield _gettext("Expression");
                yield "\" class=\"textfield expression\">
      ";
            }
            // line 167
            yield "      ";
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 168
            yield "    </td>
";
        }
        // line 171
        if (array_key_exists("fields_meta", $context)) {
            // line 172
            yield "    ";
            $context["current_index"] = 0;
            // line 173
            yield "    ";
            $context["cols"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["move_columns"] ?? null)) - 1);
            // line 174
            yield "    ";
            $context["break"] = false;
            // line 175
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, ($context["cols"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["mi"]) {
                // line 176
                yield "      ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (($_v24 = ($context["move_columns"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[$context["mi"]] ?? null) : null), "name", [], "any", false, false, false, 176) == (($_v25 = ($context["column_meta"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["Field"] ?? null) : null)) &&  !($context["break"] ?? null))) {
                    // line 177
                    yield "        ";
                    $context["current_index"] = $context["mi"];
                    // line 178
                    yield "        ";
                    $context["break"] = true;
                    // line 179
                    yield "      ";
                }
                // line 180
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mi'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            yield "
    <td class=\"text-center\">
      <select id=\"field_";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" name=\"field_move_to[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" size=\"1\" width=\"5em\">
        <option value=\"\" selected=\"selected\">&nbsp;</option>
        <option value=\"-first\"";
            // line 185
            yield (((($context["current_index"] ?? null) == 0)) ? (" disabled=\"disabled\"") : (""));
            yield ">
          ";
yield _gettext("first");
            // line 187
            yield "        </option>
        ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["move_columns"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["mi"]) {
                // line 189
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v26 = ($context["move_columns"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[$context["mi"]] ?? null) : null), "name", [], "any", false, false, false, 189), "html", null, true);
                yield "\"";
                // line 190
                yield ((((($context["current_index"] ?? null) == $context["mi"]) || (($context["current_index"] ?? null) == ($context["mi"] + 1)))) ? (" disabled") : (""));
                yield ">
            ";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("after %s"), PhpMyAdmin\Util::backquote($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v27 = ($context["move_columns"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[$context["mi"]] ?? null) : null), "name", [], "any", false, false, false, 191)))), "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['mi'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            yield "      </select>
      ";
            // line 195
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 196
            yield "    </td>
";
        }
        // line 198
        yield "
";
        // line 199
        if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "browserTransformationFeature", [], "any", false, false, false, 199)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "columnCommentsFeature", [], "any", false, false, false, 199))) && ($context["browse_mime"] ?? null))) {
            // line 200
            yield "    <td class=\"text-center\">
      <select id=\"field_";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" size=\"1\" name=\"field_mimetype[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\">
        <option value=\"\">&nbsp;</option>
        ";
            // line 203
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "mimetype", [], "array", true, true, false, 203) && is_iterable((($_v28 = ($context["available_mime"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["mimetype"] ?? null) : null)))) {
                // line 204
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v29 = ($context["available_mime"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["mimetype"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["media_type"]) {
                    // line 205
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["media_type"], ["/" => "_"]), "html", null, true);
                    yield "\"";
                    // line 206
                    yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 206) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), (($_v30 = ($context["column_meta"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["Field"] ?? null) : null), [], "array", false, true, false, 206), "mimetype", [], "array", true, true, false, 206)) && ((($_v31 = (($_v32 =                     // line 207
($context["mime_map"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[(($_v33 = ($context["column_meta"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["mimetype"] ?? null) : null) == Twig\Extension\CoreExtension::replace($context["media_type"], ["/" => "_"])))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["media_type"]), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['media_type'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                yield "        ";
            }
            // line 212
            yield "      </select>
      ";
            // line 213
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 214
            yield "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" size=\"1\" name=\"field_transformation[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\">
        <option value=\"\" title=\"";
yield _gettext("None");
            // line 217
            yield "\"></option>
        ";
            // line 218
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "transformation", [], "array", true, true, false, 218) && is_iterable((($_v34 = ($context["available_mime"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["transformation"] ?? null) : null)))) {
                // line 219
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v35 = ($context["available_mime"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["transformation"] ?? null) : null));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 220
                    yield "            ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["transform"], ":");
                    // line 221
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v36 = (($_v37 = ($context["available_mime"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["transformation_file"] ?? null) : null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[$context["mimekey"]] ?? null) : null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('get_description')->getCallable()((($_v38 = (($_v39 = ($context["available_mime"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["transformation_file"] ?? null) : null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[$context["mimekey"]] ?? null) : null)), "html", null, true);
                    yield "\"";
                    // line 222
                    yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 222) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 223
($context["mime_map"] ?? null), (($_v40 = ($context["column_meta"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["Field"] ?? null) : null), [], "array", false, true, false, 223), "transformation", [], "array", true, true, false, 223)) &&  !(null === (($_v41 = (($_v42 =                     // line 224
($context["mime_map"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[(($_v43 = ($context["column_meta"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["transformation"] ?? null) : null))) && CoreExtension::matches((("@" . (($_v44 = (($_v45 =                     // line 225
($context["available_mime"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["transformation_file_quoted"] ?? null) : null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[$context["mimekey"]] ?? null) : null)) . "3?@i"), (($_v46 = (($_v47 = ($context["mime_map"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[(($_v48 = ($context["column_meta"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["transformation"] ?? null) : null)))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 226
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((($this->env->getFunction('get_name')->getCallable()((($_v49 = (($_v50 = ($context["available_mime"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["transformation_file"] ?? null) : null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[$context["mimekey"]] ?? null) : null)) . " (") . Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($_v51 = ($context["parts"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[0] ?? null) : null))) . ":") . (($_v52 = ($context["parts"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[1] ?? null) : null)) . ")"), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['mimekey'], $context['transform'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                yield "        ";
            }
            // line 230
            yield "      </select>
      ";
            // line 231
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 232
            yield "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" type=\"text\" name=\"field_transformation_options[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" size=\"16\" class=\"textfield\" value=\"";
            // line 235
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 235) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), (($_v53 = ($context["column_meta"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53["Field"] ?? null) : null), [], "array", false, true, false, 235), "transformation_options", [], "array", true, true, false, 235))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v54 = (($_v55 = ($context["mime_map"] ?? null)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55[(($_v56 = ($context["column_meta"] ?? null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["transformation_options"] ?? null) : null), "html", null, true)) : (""));
            yield "\">
      ";
            // line 236
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 237
            yield "    </td>
    <td class=\"text-center\">
      <select id=\"field_";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" size=\"1\" name=\"field_input_transformation[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\">
        <option value=\"\" title=\"";
yield _gettext("None");
            // line 240
            yield "\"></option>
        ";
            // line 241
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["available_mime"] ?? null), "input_transformation", [], "array", true, true, false, 241) && is_iterable((($_v57 = ($context["available_mime"] ?? null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57["input_transformation"] ?? null) : null)))) {
                // line 242
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v58 = ($context["available_mime"] ?? null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58["input_transformation"] ?? null) : null));
                foreach ($context['_seq'] as $context["mimekey"] => $context["transform"]) {
                    // line 243
                    yield "            ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["transform"], ":");
                    // line 244
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v59 = (($_v60 = ($context["available_mime"] ?? null)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60["input_transformation_file"] ?? null) : null)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59[$context["mimekey"]] ?? null) : null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('get_description')->getCallable()((($_v61 = (($_v62 = ($context["available_mime"] ?? null)) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62["input_transformation_file"] ?? null) : null)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61[$context["mimekey"]] ?? null) : null)), "html", null, true);
                    yield "\"";
                    // line 245
                    yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 245) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), (($_v63 = ($context["column_meta"] ?? null)) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63["Field"] ?? null) : null), [], "array", false, true, false, 245), "input_transformation", [], "array", true, true, false, 245)) && CoreExtension::matches((("@" . (($_v64 = (($_v65 =                     // line 246
($context["available_mime"] ?? null)) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65["input_transformation_file_quoted"] ?? null) : null)) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64[$context["mimekey"]] ?? null) : null)) . "3?@i"), (($_v66 = (($_v67 = ($context["mime_map"] ?? null)) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67[(($_v68 = ($context["column_meta"] ?? null)) && is_array($_v68) || $_v68 instanceof ArrayAccess ? ($_v68["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v66) || $_v66 instanceof ArrayAccess ? ($_v66["input_transformation"] ?? null) : null)))) ? (" selected") : (""));
                    yield ">
              ";
                    // line 247
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((($this->env->getFunction('get_name')->getCallable()((($_v69 = (($_v70 = ($context["available_mime"] ?? null)) && is_array($_v70) || $_v70 instanceof ArrayAccess ? ($_v70["input_transformation_file"] ?? null) : null)) && is_array($_v69) || $_v69 instanceof ArrayAccess ? ($_v69[$context["mimekey"]] ?? null) : null)) . " (") . Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($_v71 = ($context["parts"] ?? null)) && is_array($_v71) || $_v71 instanceof ArrayAccess ? ($_v71[0] ?? null) : null))) . ":") . (($_v72 = ($context["parts"] ?? null)) && is_array($_v72) || $_v72 instanceof ArrayAccess ? ($_v72[1] ?? null) : null)) . ")"), "html", null, true);
                    yield "
            </option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['mimekey'], $context['transform'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 250
                yield "        ";
            }
            // line 251
            yield "      </select>
      ";
            // line 252
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 253
            yield "    </td>
    <td class=\"text-center\">
      <input id=\"field_";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\" type=\"text\" name=\"field_input_transformation_options[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "]\" size=\"16\" class=\"textfield\" value=\"";
            // line 256
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 256) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mime_map"] ?? null), (($_v73 = ($context["column_meta"] ?? null)) && is_array($_v73) || $_v73 instanceof ArrayAccess ? ($_v73["Field"] ?? null) : null), [], "array", false, true, false, 256), "input_transformation_options", [], "array", true, true, false, 256))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v74 = (($_v75 = ($context["mime_map"] ?? null)) && is_array($_v75) || $_v75 instanceof ArrayAccess ? ($_v75[(($_v76 = ($context["column_meta"] ?? null)) && is_array($_v76) || $_v76 instanceof ArrayAccess ? ($_v76["Field"] ?? null) : null)] ?? null) : null)) && is_array($_v74) || $_v74 instanceof ArrayAccess ? ($_v74["input_transformation_options"] ?? null) : null), "html", null, true)) : (""));
            yield "\">
      ";
            // line 257
            $context["ci"] = (($context["ci"] ?? null) + 1);
            // line 258
            yield "    </td>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_attributes.twig";
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
        return array (  790 => 258,  788 => 257,  784 => 256,  777 => 255,  773 => 253,  771 => 252,  768 => 251,  765 => 250,  756 => 247,  752 => 246,  751 => 245,  745 => 244,  742 => 243,  737 => 242,  735 => 241,  732 => 240,  723 => 239,  719 => 237,  717 => 236,  713 => 235,  706 => 234,  702 => 232,  700 => 231,  697 => 230,  694 => 229,  685 => 226,  681 => 225,  680 => 224,  679 => 223,  678 => 222,  672 => 221,  669 => 220,  664 => 219,  662 => 218,  659 => 217,  650 => 216,  646 => 214,  644 => 213,  641 => 212,  638 => 211,  629 => 208,  625 => 207,  624 => 206,  620 => 205,  615 => 204,  613 => 203,  604 => 201,  601 => 200,  599 => 199,  596 => 198,  592 => 196,  590 => 195,  587 => 194,  578 => 191,  574 => 190,  570 => 189,  566 => 188,  563 => 187,  558 => 185,  549 => 183,  545 => 181,  539 => 180,  536 => 179,  533 => 178,  530 => 177,  527 => 176,  522 => 175,  519 => 174,  516 => 173,  513 => 172,  511 => 171,  507 => 168,  504 => 167,  494 => 165,  486 => 163,  484 => 162,  480 => 160,  471 => 157,  465 => 156,  462 => 155,  459 => 154,  457 => 153,  454 => 152,  450 => 151,  442 => 150,  439 => 149,  437 => 148,  434 => 146,  432 => 145,  429 => 144,  427 => 143,  418 => 142,  414 => 140,  412 => 139,  408 => 138,  401 => 137,  398 => 136,  394 => 134,  392 => 133,  385 => 129,  380 => 128,  374 => 125,  369 => 124,  363 => 121,  358 => 120,  352 => 117,  347 => 116,  341 => 113,  336 => 112,  332 => 111,  324 => 110,  321 => 109,  319 => 108,  317 => 107,  313 => 105,  310 => 104,  305 => 102,  301 => 101,  294 => 100,  291 => 99,  289 => 98,  287 => 97,  284 => 96,  282 => 95,  278 => 94,  271 => 93,  267 => 91,  264 => 90,  262 => 88,  261 => 87,  260 => 86,  259 => 85,  258 => 84,  257 => 83,  256 => 82,  254 => 81,  250 => 78,  248 => 77,  245 => 76,  238 => 74,  231 => 72,  229 => 71,  226 => 70,  220 => 69,  216 => 68,  209 => 67,  205 => 66,  195 => 64,  191 => 61,  188 => 60,  180 => 58,  172 => 56,  170 => 55,  167 => 54,  159 => 50,  157 => 49,  151 => 46,  145 => 43,  142 => 42,  137 => 40,  134 => 39,  129 => 37,  121 => 36,  117 => 34,  115 => 33,  111 => 31,  104 => 30,  98 => 29,  91 => 28,  87 => 26,  85 => 25,  80 => 23,  76 => 22,  69 => 21,  65 => 19,  62 => 18,  60 => 16,  59 => 15,  58 => 14,  57 => 13,  56 => 12,  55 => 11,  53 => 10,  49 => 7,  47 => 6,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "columns_definitions/column_attributes.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\columns_definitions\\column_attributes.twig");
    }
}
