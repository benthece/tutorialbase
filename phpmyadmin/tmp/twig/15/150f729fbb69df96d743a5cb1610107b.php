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

/* navigation/tree/state.twig */
class __TwigTemplate_7ec6dff93945615d0d8408097da2ba44 extends Template
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
        yield ($context["quick_warp"] ?? null);
        yield "

<div class=\"clearfloat\"></div>

<ul>
  ";
        // line 6
        yield ($context["fast_filter"] ?? null);
        yield "
  ";
        // line 7
        yield ($context["controls"] ?? null);
        yield "
</ul>

";
        // line 10
        yield ($context["page_selector"] ?? null);
        yield "

<div id='pma_navigation_tree_content'>
  <ul>
    ";
        // line 14
        yield ($context["nodes"] ?? null);
        yield "
  </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/tree/state.twig";
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
        return array (  67 => 14,  60 => 10,  54 => 7,  50 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navigation/tree/state.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\navigation\\tree\\state.twig");
    }
}
