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

/* top_menu.twig */
class __TwigTemplate_d4d11d1f471c2cc312279605bd755a42 extends Template
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
        yield "<div id=\"topmenucontainer\" class=\"menucontainer\">
  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-label=\"";
// l10n: Show or hide the menu using the hamburger style button
yield _gettext("Toggle navigation");
        // line 4
        yield "\" aria-controls=\"navbarNav\" aria-expanded=\"false\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul id=\"topmenu\" class=\"navbar-nav\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 10
            yield "          <li class=\"nav-item";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 10)) ? (" active") : (""));
            yield "\">
            <a class=\"nav-link text-nowrap disableAjax\" href=\"";
            // line 11
            yield PhpMyAdmin\Url::getFromRoute(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "route", [], "any", false, false, false, 11), Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), (((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "args", [], "any", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "args", [], "any", false, false, false, 11)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "args", [], "any", false, false, false, 11)) : ([]))));
            yield "\">
              ";
            // line 12
            yield PhpMyAdmin\Html\Generator::getIcon(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "icon", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "text", [], "any", false, false, false, 12), false, true, "TabsMode");
            yield "
              ";
            // line 13
            if (CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 13)) {
                // line 14
                yield "                <span class=\"visually-hidden\">";
// l10n: Current page
yield _gettext("(current)");
                yield "</span>
              ";
            }
            // line 16
            yield "            </a>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "      </ul>
    </div>
  </nav>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "top_menu.twig";
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
        return array (  89 => 19,  81 => 16,  74 => 14,  72 => 13,  68 => 12,  64 => 11,  59 => 10,  55 => 9,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "top_menu.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\top_menu.twig");
    }
}
