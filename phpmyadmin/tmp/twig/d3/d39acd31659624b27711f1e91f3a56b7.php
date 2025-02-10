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

/* display/results/table_headers_for_columns.twig */
class __TwigTemplate_93ed09a74be58354cd30ca87a83d87cb extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 2
            yield "  <th class=\"draggable position-sticky";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_column_numeric", [], "any", false, false, false, 2)) ? (" text-end") : (""));
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_column_hidden", [], "any", false, false, false, 2)) ? (" hide") : (""));
            // line 3
            yield ((($context["is_sortable"] ?? null)) ? (" column_heading") : (""));
            yield (((($context["is_sortable"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_browse_marker_enabled", [], "any", false, false, false, 3))) ? (" marker") : (""));
            yield (((($context["is_sortable"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "is_browse_pointer_enabled", [], "any", false, false, false, 3))) ? (" pointer") : (""));
            // line 4
            yield ((( !($context["is_sortable"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, $context["column"], "has_condition", [], "any", false, false, false, 4))) ? (" condition") : (""));
            yield "\" data-column=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "column_name", [], "any", false, false, false, 4), "html", null, true);
            yield "\">
    ";
            // line 5
            if (($context["is_sortable"] ?? null)) {
                // line 6
                yield "      ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["column"], "order_link", [], "any", false, false, false, 6);
                yield "
    ";
            } else {
                // line 8
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "column_name", [], "any", false, false, false, 8), "html", null, true);
                yield "
    ";
            }
            // line 10
            yield "    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["column"], "comments", [], "any", false, false, false, 10);
            yield "
  </th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "display/results/table_headers_for_columns.twig";
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
        return array (  74 => 10,  68 => 8,  62 => 6,  60 => 5,  54 => 4,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "display/results/table_headers_for_columns.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\display\\results\\table_headers_for_columns.twig");
    }
}
