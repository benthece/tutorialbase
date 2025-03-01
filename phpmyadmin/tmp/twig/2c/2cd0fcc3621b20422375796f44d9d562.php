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

/* modals/create_view.twig */
class __TwigTemplate_e68460e3d7a6dab07637925191471fce extends Template
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
        yield "<div class=\"modal fade\" id=\"createViewModal\" tabindex=\"-1\" aria-labelledby=\"createViewModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" id=\"createViewModalDialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"createViewModalLabel\">";
yield _gettext("Create view");
        // line 5
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Close");
        // line 6
        yield "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"createViewModalGoButton\">";
yield _gettext("Go");
        // line 10
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
yield _gettext("Close");
        // line 11
        yield "</button>
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modals/create_view.twig";
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
        return array (  64 => 11,  60 => 10,  53 => 6,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modals/create_view.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\modals\\create_view.twig");
    }
}
