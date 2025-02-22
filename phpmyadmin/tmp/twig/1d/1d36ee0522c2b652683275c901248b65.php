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

/* columns_definitions/column_name.twig */
class __TwigTemplate_59ee74799ee8fe7c2353130867e97439 extends Template
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
        $context["title"] = "";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 2)) {
            // line 3
            yield "    ";
            if ((($_v0 = (($_v1 = ($context["column_meta"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["column_status"] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["isReferenced"] ?? null) : null)) {
                // line 4
                yield "        ";
                $context["title"] = (($context["title"] ?? null) . Twig\Extension\CoreExtension::sprintf(_gettext("Referenced by %s."), Twig\Extension\CoreExtension::join((($_v2 = (($_v3 =                 // line 5
($context["column_meta"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["column_status"] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["references"] ?? null) : null), ",")));
                // line 7
                yield "    ";
            }
            // line 8
            yield "    ";
            if ((($_v4 = (($_v5 = ($context["column_meta"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["column_status"] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["isForeignKey"] ?? null) : null)) {
                // line 9
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) {
                    // line 10
                    yield "            ";
                    $context["title"] = (($context["title"] ?? null) . "
");
                    // line 11
                    yield "        ";
                }
                // line 12
                yield "        ";
                $context["title"] = (($context["title"] ?? null) . _gettext("Is a foreign key."));
                // line 13
                yield "    ";
            }
        }
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) {
            // line 16
            yield "    ";
            $context["title"] = _gettext("Column");
        }
        // line 18
        yield "
<input id=\"field_";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\"
    ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 20) &&  !(($_v6 = (($_v7 =         // line 21
($context["column_meta"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["column_status"] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["isEditable"] ?? null) : null))) {
            // line 22
            yield "        disabled=\"disabled\"
    ";
        }
        // line 24
        yield "    type=\"text\"
    name=\"field_name[";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\"
    maxlength=\"64\"
    class=\"textfield\"
    title=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\"
    size=\"10\"
    value=\"";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = ($context["column_meta"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["Field"] ?? null) : null), "html", null, true)) : (""));
        yield "\">

";
        // line 32
        if ((($context["has_central_columns_feature"] ?? null) &&  !(CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 33) &&  !(($_v9 = (($_v10 =         // line 34
($context["column_meta"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["column_status"] ?? null) : null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["isEditable"] ?? null) : null)))) {
            // line 35
            yield "    <p class=\"column_name\" id=\"central_columns_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\">
        <a data-maxrows=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_rows"] ?? null), "html", null, true);
            yield "\"
            href=\"#\"
            class=\"central_columns_dialog\">
            ";
yield _gettext("Pick from Central Columns");
            // line 40
            yield "        </a>
    </p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_name.twig";
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
        return array (  135 => 40,  128 => 36,  121 => 35,  119 => 34,  118 => 33,  117 => 32,  112 => 30,  107 => 28,  101 => 25,  98 => 24,  94 => 22,  92 => 21,  91 => 20,  85 => 19,  82 => 18,  78 => 16,  76 => 15,  72 => 13,  69 => 12,  66 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "columns_definitions/column_name.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\columns_definitions\\column_name.twig");
    }
}
