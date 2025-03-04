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

/* menu/breadcrumbs.twig */
class __TwigTemplate_c0c764d2c61d63855302d1479a6d454d extends Template
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
        yield "<div id=\"floating_menubar\" class=\"d-print-none\"></div>
<nav id=\"server-breadcrumb\" aria-label=\"breadcrumb\">
  <ol class=\"breadcrumb breadcrumb-navbar\">
    <li class=\"breadcrumb-item\">
      ";
        // line 5
        yield ((PhpMyAdmin\Util::showIcons("TabsMode")) ? (PhpMyAdmin\Html\Generator::getImage("s_host")) : (""));
        yield "
      <a href=\"";
        // line 6
        yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, ($context["server"] ?? null), "url", [], "any", false, false, false, 6));
        yield "\" data-raw-text=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "\" draggable=\"false\">
        ";
        // line 7
        if (PhpMyAdmin\Util::showText("TabsMode")) {
yield _gettext("Server:");
        }
        // line 8
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "
      </a>
    </li>

    ";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["database"] ?? null))) {
            // line 13
            yield "      <li class=\"breadcrumb-item\">
        ";
            // line 14
            yield ((PhpMyAdmin\Util::showIcons("TabsMode")) ? (PhpMyAdmin\Html\Generator::getImage("s_db")) : (""));
            yield "
        <a href=\"";
            // line 15
            yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "url", [], "any", false, false, false, 15), ["db" => CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 15)]);
            yield "\" data-raw-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
            yield "\" draggable=\"false\">
          ";
            // line 16
            if (PhpMyAdmin\Util::showText("TabsMode")) {
yield _gettext("Database:");
            }
            // line 17
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
            yield "
        </a>
      </li>

      ";
            // line 21
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["table"] ?? null))) {
                // line 22
                yield "        <li class=\"breadcrumb-item\">
          ";
                // line 23
                yield ((PhpMyAdmin\Util::showIcons("TabsMode")) ? (PhpMyAdmin\Html\Generator::getImage(((CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "is_view", [], "any", false, false, false, 23)) ? ("b_views") : ("s_tbl")))) : (""));
                yield "
          <a href=\"";
                // line 24
                yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "url", [], "any", false, false, false, 24), ["db" => CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "name", [], "any", false, false, false, 24), "table" => CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "name", [], "any", false, false, false, 24)]);
                yield "\" data-raw-text=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
                yield "\" draggable=\"false\">
            ";
                // line 25
                if (PhpMyAdmin\Util::showText("TabsMode")) {
                    // line 26
                    yield "              ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "is_view", [], "any", false, false, false, 26)) {
                        // line 27
                        yield "                ";
yield _gettext("View:");
                        // line 28
                        yield "              ";
                    } else {
                        // line 29
                        yield "                ";
yield _gettext("Table:");
                        // line 30
                        yield "              ";
                    }
                    // line 31
                    yield "            ";
                }
                // line 32
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
                yield "
          </a>
        </li>

        ";
                // line 36
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "comment", [], "any", false, false, false, 36))) {
                    // line 37
                    yield "          <span class=\"breadcrumb-comment\" draggable=\"false\">“";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["table"] ?? null), "comment", [], "any", false, false, false, 37), "html", null, true);
                    yield "”</span>
        ";
                }
                // line 39
                yield "      ";
            } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "comment", [], "any", false, false, false, 39))) {
                // line 40
                yield "        <span class=\"breadcrumb-comment\" draggable=\"false\">“";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database"] ?? null), "comment", [], "any", false, false, false, 40), "html", null, true);
                yield "”</span>
      ";
            }
            // line 42
            yield "    ";
        }
        // line 43
        yield "  </ol>
</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menu/breadcrumbs.twig";
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
        return array (  160 => 43,  157 => 42,  151 => 40,  148 => 39,  142 => 37,  140 => 36,  132 => 32,  129 => 31,  126 => 30,  123 => 29,  120 => 28,  117 => 27,  114 => 26,  112 => 25,  106 => 24,  102 => 23,  99 => 22,  97 => 21,  89 => 17,  85 => 16,  79 => 15,  75 => 14,  72 => 13,  70 => 12,  62 => 8,  58 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "menu/breadcrumbs.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\menu\\breadcrumbs.twig");
    }
}
