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

/* database/structure/index.twig */
class __TwigTemplate_626ed0ff387093d01907bc7086ed112d extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getRuntime('PhpMyAdmin\FlashMessages')->getMessages());
        foreach ($context['_seq'] as $context["flash_key"] => $context["flash_messages"]) {
            // line 2
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 3
                yield "    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_key"], "html", null, true);
                yield "\" role=\"alert\">
      ";
                // line 4
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
                yield "
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['flash_message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['flash_key'], $context['flash_messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "
";
        // line 9
        if (($context["has_tables"] ?? null)) {
            // line 10
            yield "  <div id=\"tableslistcontainer\">
    ";
            // line 11
            yield ($context["list_navigator_html"] ?? null);
            yield "

    ";
            // line 13
            yield ($context["table_list_html"] ?? null);
            yield "

    ";
            // line 15
            yield ($context["list_navigator_html"] ?? null);
            yield "
  </div>
  <hr>
  <p class=\"d-print-none\">
    <button type=\"button\" class=\"btn btn-link p-0 jsPrintButton\">";
            // line 19
            yield PhpMyAdmin\Html\Generator::getIcon("b_print", _gettext("Print"), true);
            yield "</button>
    <a href=\"";
            // line 20
            yield PhpMyAdmin\Url::getFromRoute("/database/data-dictionary", ["db" => ($context["database"] ?? null), "goto" => PhpMyAdmin\Url::getFromRoute("/database/structure")]);
            yield "\">
      ";
            // line 21
            yield PhpMyAdmin\Html\Generator::getIcon("b_tblanalyse", _gettext("Data dictionary"), true);
            yield "
    </a>
  </p>
";
        } else {
            // line 25
            yield "  ";
            yield $this->env->getFilter('notice')->getCallable()(_gettext("No tables found in database."));
            yield "
";
        }
        // line 27
        yield "
";
        // line 28
        if ( !($context["is_system_schema"] ?? null)) {
            // line 29
            yield "  ";
            yield ($context["create_table_html"] ?? null);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/index.twig";
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
        return array (  120 => 29,  118 => 28,  115 => 27,  109 => 25,  102 => 21,  98 => 20,  94 => 19,  87 => 15,  82 => 13,  77 => 11,  74 => 10,  72 => 9,  69 => 8,  56 => 4,  51 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/structure/index.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\database\\structure\\index.twig");
    }
}
