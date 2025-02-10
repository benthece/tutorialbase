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

/* columns_definitions/column_attribute.twig */
class __TwigTemplate_79c0c03b9d5194f16d450ade2e7091df extends Template
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
        if ((array_key_exists("submit_attribute", $context) && (($context["submit_attribute"] ?? null) != false))) {
            // line 2
            yield "    ";
            $context["attribute"] = ($context["submit_attribute"] ?? null);
            // line 3
            yield "    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 4) && (CoreExtension::inFilter("on update current_timestamp", Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($_v0 =         // line 5
($context["column_meta"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["Extra"] ?? null) : null))) || CoreExtension::inFilter("on update current_timestamp()", Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($_v1 = ($context["column_meta"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["Extra"] ?? null) : null)))))) {
            // line 6
            yield "    ";
            $context["attribute"] = "on update CURRENT_TIMESTAMP";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["extracted_columnspec"] ?? null), "attribute", [], "array", true, true, false, 7)) {
            // line 8
            yield "    ";
            $context["attribute"] = (($_v2 = ($context["extracted_columnspec"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["attribute"] ?? null) : null);
        } else {
            // line 10
            yield "    ";
            $context["attribute"] = "";
        }
        // line 12
        $context["attribute"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["attribute"] ?? null));
        // line 13
        yield "<select name=\"field_attribute[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\"
    id=\"field_";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\">
    ";
        // line 15
        $context["cnt_attribute_types"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["attribute_types"] ?? null)) - 1);
        // line 16
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, ($context["cnt_attribute_types"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["attribute_types"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[$context["i"]] ?? null) : null), "html", null, true);
            yield "\"";
            // line 18
            yield (((($context["attribute"] ?? null) == Twig\Extension\CoreExtension::upper($this->env->getCharset(), (($_v4 = ($context["attribute_types"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[$context["i"]] ?? null) : null)))) ? (" selected=\"selected\"") : (""));
            yield ">
            ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["attribute_types"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[$context["i"]] ?? null) : null), "html", null, true);
            yield "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "</select>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_attribute.twig";
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
        return array (  102 => 22,  93 => 19,  89 => 18,  85 => 17,  80 => 16,  78 => 15,  72 => 14,  67 => 13,  65 => 12,  61 => 10,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "columns_definitions/column_attribute.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\columns_definitions\\column_attribute.twig");
    }
}
