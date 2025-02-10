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

/* config/form_display/input.twig */
class __TwigTemplate_e60c435b25c2c1d13e1b26d7a75376c7 extends Template
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
        if (($context["option_is_disabled"] ?? null)) {
            // line 2
            yield "  ";
            $context["tr_class"] = (($context["tr_class"] ?? null) . " disabled-field");
        }
        // line 4
        yield "<tr";
        if (($context["tr_class"] ?? null)) {
            yield " class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tr_class"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
  <th>
    <label for=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
        yield "\">";
        yield ($context["name"] ?? null);
        yield "</label>

    ";
        // line 8
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["doc"] ?? null))) {
            // line 9
            yield "      <span class=\"doc\">
        <a href=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc"] ?? null), "html", null, true);
            yield "\" target=\"documentation\">";
            yield PhpMyAdmin\Html\Generator::getImage("b_help", _gettext("Documentation"));
            yield "</a>
      </span>
    ";
        }
        // line 13
        yield "
    ";
        // line 14
        if (($context["option_is_disabled"] ?? null)) {
            // line 15
            yield "      <span class=\"disabled-notice\" title=\"";
yield _gettext("This setting is disabled, it will not be applied to your configuration.");
            yield "\">
        ";
yield _gettext("Disabled");
            // line 17
            yield "      </span>
    ";
        }
        // line 19
        yield "
    ";
        // line 20
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) {
            // line 21
            yield "      <small>";
            yield ($context["description"] ?? null);
            yield "</small>
    ";
        }
        // line 23
        yield "  </th>

  <td>
    ";
        // line 26
        if ((($context["type"] ?? null) == "text")) {
            // line 27
            yield "      <input type=\"text\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" class=\"w-75";
            yield (( !($context["value_is_default"] ?? null)) ? (((($context["has_errors"] ?? null)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\">
    ";
        } elseif ((        // line 28
($context["type"] ?? null) == "password")) {
            // line 29
            yield "      <input type=\"password\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" class=\"w-75";
            yield (( !($context["value_is_default"] ?? null)) ? (((($context["has_errors"] ?? null)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\" spellcheck=\"false\">
    ";
        } elseif (((        // line 30
($context["type"] ?? null) == "short_text") &&  !is_iterable(($context["value"] ?? null)))) {
            // line 31
            yield "      ";
            // line 32
            yield "      <input type=\"text\" size=\"25\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield (( !($context["value_is_default"] ?? null)) ? (((($context["has_errors"] ?? null)) ? ("custom field-error") : ("custom"))) : (""));
            yield "\">
    ";
        } elseif ((        // line 33
($context["type"] ?? null) == "number_text")) {
            // line 34
            yield "      <input type=\"number\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield (( !($context["value_is_default"] ?? null)) ? (((($context["has_errors"] ?? null)) ? ("custom field-error") : ("custom"))) : (""));
            yield "\">
    ";
        } elseif ((        // line 35
($context["type"] ?? null) == "checkbox")) {
            // line 36
            yield "      <span class=\"checkbox";
            yield (( !($context["value_is_default"] ?? null)) ? (((($context["has_errors"] ?? null)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\">
        <input type=\"checkbox\" name=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\"";
            yield ((($context["value"] ?? null)) ? (" checked") : (""));
            yield ">
      </span>
    ";
        } elseif ((        // line 39
($context["type"] ?? null) == "select")) {
            // line 40
            yield "      <select name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" class=\"w-75";
            yield (( !($context["value_is_default"] ?? null)) ? (((($context["has_errors"] ?? null)) ? (" custom field-error") : (" custom"))) : (""));
            yield "\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["select_values"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 42
                yield "          ";
                if (($context["val"] === true)) {
                    $context["val"] = _gettext("Yes");
                } elseif (($context["val"] === false)) {
                    $context["val"] = _gettext("No");
                }
                // line 43
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"";
                yield ((((($context["key"] === ($context["value"] ?? null)) || ((($context["value"] ?? null) === true) && ($context["key"] === 1))) || ((($context["value"] ?? null) === false) && ($context["key"] === 0)))) ? (" selected") : (""));
                yield ((CoreExtension::inFilter($context["key"], ($context["select_values_disabled"] ?? null))) ? (" disabled") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "      </select>
    ";
        } elseif ((        // line 46
($context["type"] ?? null) == "list")) {
            // line 47
            yield "      <textarea cols=\"35\" rows=\"5\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" class=\"";
            yield (( !($context["value_is_default"] ?? null)) ? (((($context["has_errors"] ?? null)) ? ("custom field-error") : ("custom"))) : (""));
            yield "\">";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != "wrapper_params")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                    yield (( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 48)) ? ("
") : (""));
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "</textarea>
    ";
        }
        // line 51
        yield "
    ";
        // line 52
        if ((($context["is_setup"] ?? null) && ($context["comment"] ?? null))) {
            // line 53
            yield "      <a class=\"userprefs-comment\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true);
            yield "\">";
            yield PhpMyAdmin\Html\Generator::getImage("b_tblops", _gettext("Comment"));
            yield "</a>
    ";
        }
        // line 55
        yield "
    ";
        // line 56
        if (($context["set_value"] ?? null)) {
            // line 57
            yield "      <a class=\"set-value hide\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["set_value"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Set value: %s"), ($context["set_value"] ?? null)), "html", null, true);
            yield "\">";
            // line 58
            yield PhpMyAdmin\Html\Generator::getImage("b_edit", Twig\Extension\CoreExtension::sprintf(_gettext("Set value: %s"), ($context["set_value"] ?? null)));
            // line 59
            yield "</a>
    ";
        }
        // line 61
        yield "
    ";
        // line 62
        if (($context["show_restore_default"] ?? null)) {
            // line 63
            yield "      <a class=\"restore-default hide\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "\" title=\"";
yield _gettext("Restore default value");
            yield "\">";
            // line 64
            yield PhpMyAdmin\Html\Generator::getImage("s_reload", _gettext("Restore default value"));
            // line 65
            yield "</a>
    ";
        }
        // line 67
        yield "
    ";
        // line 69
        yield "    ";
        if (($context["has_errors"] ?? null)) {
            // line 70
            yield "      <dl class=\"inline_errors\">
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 72
                yield "          <dd>";
                yield $context["error"];
                yield "</dd>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "      </dl>
    ";
        }
        // line 76
        yield "  </td>

  ";
        // line 78
        if ((($context["is_setup"] ?? null) &&  !(null === ($context["allows_customization"] ?? null)))) {
            // line 79
            yield "    <td class=\"userprefs-allow\" title=\"";
yield _gettext("Allow users to customize this value");
            yield "\">
      <input type=\"checkbox\" name=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["path"] ?? null), "html", null, true);
            yield "-userprefs-allow\"";
            yield ((($context["allows_customization"] ?? null)) ? (" checked") : (""));
            yield " aria-label=\"";
yield _gettext("Allow users to customize this value");
            yield "\">
    </td>
  ";
        } elseif (        // line 82
($context["is_setup"] ?? null)) {
            // line 83
            yield "    <td>&nbsp;</td>
  ";
        }
        // line 85
        yield "</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "config/form_display/input.twig";
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
        return array (  367 => 85,  363 => 83,  361 => 82,  352 => 80,  347 => 79,  345 => 78,  341 => 76,  337 => 74,  328 => 72,  324 => 71,  321 => 70,  318 => 69,  315 => 67,  311 => 65,  309 => 64,  303 => 63,  301 => 62,  298 => 61,  294 => 59,  292 => 58,  284 => 57,  282 => 56,  279 => 55,  271 => 53,  269 => 52,  266 => 51,  262 => 49,  228 => 48,  220 => 47,  218 => 46,  215 => 45,  201 => 43,  194 => 42,  190 => 41,  181 => 40,  179 => 39,  170 => 37,  165 => 36,  163 => 35,  152 => 34,  150 => 33,  139 => 32,  137 => 31,  135 => 30,  124 => 29,  122 => 28,  111 => 27,  109 => 26,  104 => 23,  98 => 21,  96 => 20,  93 => 19,  89 => 17,  83 => 15,  81 => 14,  78 => 13,  70 => 10,  67 => 9,  65 => 8,  58 => 6,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "config/form_display/input.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\config\\form_display\\input.twig");
    }
}
