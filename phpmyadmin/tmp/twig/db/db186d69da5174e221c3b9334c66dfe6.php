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

/* navigation/tree/path.twig */
class __TwigTemplate_2c23dba69db47e4e6de16dca0e4e1a7f extends Template
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
        yield "<div class='list_container hide'>
  <ul";
        // line 2
        yield ((($context["has_search_results"] ?? null)) ? (" class=\"search_results\"") : (""));
        yield ">
    ";
        // line 3
        yield ($context["list_content"] ?? null);
        yield "
  </ul>

  ";
        // line 6
        if ( !($context["is_tree"] ?? null)) {
            // line 7
            yield "    <span class='hide loaded_db'>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(($context["parent_name"] ?? null)), "html", null, true);
            yield "</span>
    ";
            // line 8
            if (Twig\Extension\CoreExtension::testEmpty(($context["list_content"] ?? null))) {
                // line 9
                yield "      <div>";
yield _gettext("No tables found in database.");
                yield "</div>
    ";
            }
            // line 11
            yield "  ";
        }
        // line 12
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/tree/path.twig";
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
        return array (  73 => 12,  70 => 11,  64 => 9,  62 => 8,  57 => 7,  55 => 6,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "navigation/tree/path.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\navigation\\tree\\path.twig");
    }
}
