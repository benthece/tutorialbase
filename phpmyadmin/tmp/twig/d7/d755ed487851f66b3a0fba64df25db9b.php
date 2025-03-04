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

/* display/results/checkbox_and_links.twig */
class __TwigTemplate_189fa87f8a9c7914a08a180f005ee200 extends Template
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
        if ((($context["position"] ?? null) == "left")) {
            // line 2
            yield "  ";
            if (($context["has_checkbox"] ?? null)) {
                // line 3
                yield "    <td class=\"text-center d-print-none\">
      <input type=\"checkbox\" class=\"multi_checkbox checkall\" id=\"id_rows_to_delete";
                // line 5
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_number"] ?? null), "html", null, true);
                yield "_left\" name=\"rows_to_delete[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_number"] ?? null), "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["where_clause"] ?? null), "html", null, true);
                yield "\">
      <input type=\"hidden\" class=\"condition_array\" value=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["condition"] ?? null), "html", null, true);
                yield "\">
    </td>
  ";
            }
            // line 9
            yield "
  ";
            // line 10
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["edit"] ?? null), "url", [], "any", false, false, false, 10))) {
                // line 11
                yield "    <td class=\"text-center d-print-none edit_row_anchor";
                yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["edit"] ?? null), "clause_is_unique", [], "any", false, false, false, 11)) ? (" nonunique") : (""));
                yield "\">
      <span class=\"text-nowrap\">
        ";
                // line 13
                yield PhpMyAdmin\Html\Generator::linkOrButton(CoreExtension::getAttribute($this->env, $this->source, ($context["edit"] ?? null), "url", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, ($context["edit"] ?? null), "params", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, ($context["edit"] ?? null), "string", [], "any", false, false, false, 13));
                yield "
        ";
                // line 14
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["where_clause"] ?? null))) {
                    // line 15
                    yield "          <input type=\"hidden\" class=\"where_clause\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["where_clause"] ?? null), "html", null, true);
                    yield "\">
        ";
                }
                // line 17
                yield "      </span>
    </td>
  ";
            }
            // line 20
            yield "
  ";
            // line 21
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["copy"] ?? null), "url", [], "any", false, false, false, 21))) {
                // line 22
                yield "    <td class=\"text-center d-print-none\">
      <span class=\"text-nowrap\">
        ";
                // line 24
                yield PhpMyAdmin\Html\Generator::linkOrButton(CoreExtension::getAttribute($this->env, $this->source, ($context["copy"] ?? null), "url", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, ($context["copy"] ?? null), "params", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, ($context["copy"] ?? null), "string", [], "any", false, false, false, 24));
                yield "
        ";
                // line 25
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["where_clause"] ?? null))) {
                    // line 26
                    yield "          <input type=\"hidden\" class=\"where_clause\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["where_clause"] ?? null), "html", null, true);
                    yield "\">
        ";
                }
                // line 28
                yield "      </span>
    </td>
  ";
            }
            // line 31
            yield "
  ";
            // line 32
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["delete"] ?? null), "url", [], "any", false, false, false, 32))) {
                // line 33
                yield "    <td class=\"text-center d-print-none";
                yield ((($context["is_ajax"] ?? null)) ? (" ajax") : (""));
                yield "\">
      <span class=\"text-nowrap\">
        ";
                // line 35
                yield PhpMyAdmin\Html\Generator::linkOrButton(CoreExtension::getAttribute($this->env, $this->source, ($context["delete"] ?? null), "url", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, ($context["delete"] ?? null), "params", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, ($context["delete"] ?? null), "string", [], "any", false, false, false, 35), ["class" => ("delete_row requireConfirm" . ((($context["is_ajax"] ?? null)) ? (" ajax") : ("")))]);
                yield "
        ";
                // line 36
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["js_conf"] ?? null))) {
                    // line 37
                    yield "          <div class=\"hide\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_conf"] ?? null), "html", null, true);
                    yield "</div>
        ";
                }
                // line 39
                yield "      </span>
    </td>
  ";
            }
        } elseif ((        // line 42
($context["position"] ?? null) == "right")) {
            // line 43
            yield "  ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["delete"] ?? null), "url", [], "any", false, false, false, 43))) {
                // line 44
                yield "    <td class=\"text-center d-print-none";
                yield ((($context["is_ajax"] ?? null)) ? (" ajax") : (""));
                yield "\">
      <span class=\"text-nowrap\">
        ";
                // line 46
                yield PhpMyAdmin\Html\Generator::linkOrButton(CoreExtension::getAttribute($this->env, $this->source, ($context["delete"] ?? null), "url", [], "any", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, ($context["delete"] ?? null), "params", [], "any", false, false, false, 46), CoreExtension::getAttribute($this->env, $this->source, ($context["delete"] ?? null), "string", [], "any", false, false, false, 46), ["class" => ("delete_row requireConfirm" . ((($context["is_ajax"] ?? null)) ? (" ajax") : ("")))]);
                yield "
        ";
                // line 47
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["js_conf"] ?? null))) {
                    // line 48
                    yield "          <div class=\"hide\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_conf"] ?? null), "html", null, true);
                    yield "</div>
        ";
                }
                // line 50
                yield "      </span>
    </td>
  ";
            }
            // line 53
            yield "
  ";
            // line 54
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["copy"] ?? null), "url", [], "any", false, false, false, 54))) {
                // line 55
                yield "    <td class=\"text-center d-print-none\">
      <span class=\"text-nowrap\">
        ";
                // line 57
                yield PhpMyAdmin\Html\Generator::linkOrButton(CoreExtension::getAttribute($this->env, $this->source, ($context["copy"] ?? null), "url", [], "any", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source, ($context["copy"] ?? null), "params", [], "any", false, false, false, 57), CoreExtension::getAttribute($this->env, $this->source, ($context["copy"] ?? null), "string", [], "any", false, false, false, 57));
                yield "
        ";
                // line 58
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["where_clause"] ?? null))) {
                    // line 59
                    yield "          <input type=\"hidden\" class=\"where_clause\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["where_clause"] ?? null), "html", null, true);
                    yield "\">
        ";
                }
                // line 61
                yield "      </span>
    </td>
  ";
            }
            // line 64
            yield "
  ";
            // line 65
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["edit"] ?? null), "url", [], "any", false, false, false, 65))) {
                // line 66
                yield "    <td class=\"text-center d-print-none edit_row_anchor";
                yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["edit"] ?? null), "clause_is_unique", [], "any", false, false, false, 66)) ? (" nonunique") : (""));
                yield "\">
      <span class=\"text-nowrap\">
        ";
                // line 68
                yield PhpMyAdmin\Html\Generator::linkOrButton(CoreExtension::getAttribute($this->env, $this->source, ($context["edit"] ?? null), "url", [], "any", false, false, false, 68), CoreExtension::getAttribute($this->env, $this->source, ($context["edit"] ?? null), "params", [], "any", false, false, false, 68), CoreExtension::getAttribute($this->env, $this->source, ($context["edit"] ?? null), "string", [], "any", false, false, false, 68));
                yield "
        ";
                // line 69
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["where_clause"] ?? null))) {
                    // line 70
                    yield "          <input type=\"hidden\" class=\"where_clause\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["where_clause"] ?? null), "html", null, true);
                    yield "\">
        ";
                }
                // line 72
                yield "      </span>
    </td>
  ";
            }
            // line 75
            yield "
  ";
            // line 76
            if (($context["has_checkbox"] ?? null)) {
                // line 77
                yield "    <td class=\"text-center d-print-none\">
      <input type=\"checkbox\" class=\"multi_checkbox checkall\" id=\"id_rows_to_delete";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_number"] ?? null), "html", null, true);
                yield "_right\" name=\"rows_to_delete[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_number"] ?? null), "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["where_clause"] ?? null), "html", null, true);
                yield "\">
      <input type=\"hidden\" class=\"condition_array\" value=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["condition"] ?? null), "html", null, true);
                yield "\">
    </td>
  ";
            }
        } else {
            // line 84
            yield "  ";
            if (($context["has_checkbox"] ?? null)) {
                // line 85
                yield "    <td class=\"text-center d-print-none\">
      <input type=\"checkbox\" class=\"multi_checkbox checkall\" id=\"id_rows_to_delete";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_number"] ?? null), "html", null, true);
                yield "_left\" name=\"rows_to_delete[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_number"] ?? null), "html", null, true);
                yield "]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["where_clause"] ?? null), "html", null, true);
                yield "\">
      <input type=\"hidden\" class=\"condition_array\" value=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["condition"] ?? null), "html", null, true);
                yield "\">
    </td>
  ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "display/results/checkbox_and_links.twig";
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
        return array (  265 => 88,  257 => 87,  254 => 85,  251 => 84,  244 => 80,  236 => 79,  233 => 77,  231 => 76,  228 => 75,  223 => 72,  217 => 70,  215 => 69,  211 => 68,  205 => 66,  203 => 65,  200 => 64,  195 => 61,  189 => 59,  187 => 58,  183 => 57,  179 => 55,  177 => 54,  174 => 53,  169 => 50,  163 => 48,  161 => 47,  157 => 46,  151 => 44,  148 => 43,  146 => 42,  141 => 39,  135 => 37,  133 => 36,  129 => 35,  123 => 33,  121 => 32,  118 => 31,  113 => 28,  107 => 26,  105 => 25,  101 => 24,  97 => 22,  95 => 21,  92 => 20,  87 => 17,  81 => 15,  79 => 14,  75 => 13,  69 => 11,  67 => 10,  64 => 9,  58 => 6,  50 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "display/results/checkbox_and_links.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\display\\results\\checkbox_and_links.twig");
    }
}
