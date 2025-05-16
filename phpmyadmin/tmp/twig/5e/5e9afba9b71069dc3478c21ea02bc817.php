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

/* preferences/header.twig */
class __TwigTemplate_7ec8256625ecbcadcf99699b4a982778 extends Template
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
        yield "<div class=\"container-fluid\">
  <div class=\"row\">
    <ul id=\"user_prefs_tabs\" class=\"nav nav-pills m-2\">
      <li class=\"nav-item\">
        <a href=\"";
        // line 5
        yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
        yield "\" class=\"nav-link";
        yield (((($context["route"] ?? null) == "/preferences/manage")) ? (" active") : (""));
        yield " disableAjax\">
          ";
yield _gettext("Manage your settings");
        // line 7
        yield "        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 11
        yield PhpMyAdmin\Url::getFromRoute("/preferences/two-factor");
        yield "\" class=\"nav-link";
        yield (((($context["route"] ?? null) == "/preferences/two-factor")) ? (" active") : (""));
        yield " disableAjax\">
          ";
yield _gettext("Two-factor authentication");
        // line 13
        yield "        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 17
        yield PhpMyAdmin\Url::getFromRoute("/preferences/features");
        yield "\" class=\"nav-link";
        yield (((($context["route"] ?? null) == "/preferences/features")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 18
        yield PhpMyAdmin\Html\Generator::getIcon("b_tblops", _gettext("Features"), false, false, "TabsMode");
        yield "
        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 23
        yield PhpMyAdmin\Url::getFromRoute("/preferences/sql");
        yield "\" class=\"nav-link";
        yield (((($context["route"] ?? null) == "/preferences/sql")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 24
        yield PhpMyAdmin\Html\Generator::getIcon("b_sql", _gettext("SQL queries"), false, false, "TabsMode");
        yield "
        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 29
        yield PhpMyAdmin\Url::getFromRoute("/preferences/navigation");
        yield "\" class=\"nav-link";
        yield (((($context["route"] ?? null) == "/preferences/navigation")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 30
        yield PhpMyAdmin\Html\Generator::getIcon("b_select", _gettext("Navigation panel"), false, false, "TabsMode");
        yield "
        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 35
        yield PhpMyAdmin\Url::getFromRoute("/preferences/main-panel");
        yield "\" class=\"nav-link";
        yield (((($context["route"] ?? null) == "/preferences/main-panel")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 36
        yield PhpMyAdmin\Html\Generator::getIcon("b_props", _gettext("Main panel"), false, false, "TabsMode");
        yield "
        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 41
        yield PhpMyAdmin\Url::getFromRoute("/preferences/export");
        yield "\" class=\"nav-link";
        yield (((($context["route"] ?? null) == "/preferences/export")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 42
        yield PhpMyAdmin\Html\Generator::getIcon("b_export", _gettext("Export"), false, false, "TabsMode");
        yield "
        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 47
        yield PhpMyAdmin\Url::getFromRoute("/preferences/import");
        yield "\" class=\"nav-link";
        yield (((($context["route"] ?? null) == "/preferences/import")) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 48
        yield PhpMyAdmin\Html\Generator::getIcon("b_import", _gettext("Import"), false, false, "TabsMode");
        yield "
        </a>
      </li>
    </ul>
  </div>

  ";
        // line 54
        if (($context["is_saved"] ?? null)) {
            // line 55
            yield "    ";
            yield $this->env->getFilter('raw_success')->getCallable()(_gettext("Configuration has been saved."));
            yield "
  ";
        }
        // line 57
        yield "
  ";
        // line 58
        if ( !($context["has_config_storage"] ?? null)) {
            // line 59
            yield "    ";
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 60
                yield "      ";
yield _gettext("Your preferences will be saved for current session only. Storing them permanently requires %sphpMyAdmin configuration storage%s.");
                // line 61
                yield "    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            yield $this->env->getFilter('notice')->getCallable()(Twig\Extension\CoreExtension::sprintf($_v0, (("<a href=\"" . PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("setup", "linked-tables")) . "\" target=\"_blank\" rel=\"noopener noreferrer\">"), "</a>"));
            // line 62
            yield "  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "preferences/header.twig";
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
        return array (  184 => 62,  182 => 59,  178 => 61,  175 => 60,  172 => 59,  170 => 58,  167 => 57,  161 => 55,  159 => 54,  150 => 48,  144 => 47,  136 => 42,  130 => 41,  122 => 36,  116 => 35,  108 => 30,  102 => 29,  94 => 24,  88 => 23,  80 => 18,  74 => 17,  68 => 13,  61 => 11,  55 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "preferences/header.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\preferences\\header.twig");
    }
}
