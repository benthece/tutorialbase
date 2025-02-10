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

/* console/bookmark_content.twig */
class __TwigTemplate_646bf1f1dbba0410b50e83365bb0ade5 extends Template
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
        yield "<div class=\"message welcome\">
    <span>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["welcome_message"] ?? null), "html", null, true);
        yield "</span>
</div>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bookmarks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
            // line 5
            yield "    <div class=\"message collapsed bookmark\" bookmarkid=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getId", [], "method", false, false, false, 5), "html", null, true);
            yield "\"
        targetdb=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getDatabase", [], "method", false, false, false, 6), "html", null, true);
            yield "\">
        ";
            // line 7
            yield from $this->loadTemplate("console/query_action.twig", "console/bookmark_content.twig", 7)->unwrap()->yield(CoreExtension::toArray(["parent_div_classes" => "action_content", "content_array" => [["action collapse", _gettext("Collapse")], ["action expand", _gettext("Expand")], ["action requery", _gettext("Requery")], ["action edit_bookmark", _gettext("Edit")], ["action delete_bookmark", _gettext("Delete")], ["text targetdb", _gettext("Database"), "extraSpan" => CoreExtension::getAttribute($this->env, $this->source,             // line 15
$context["bookmark"], "getDatabase", [], "method", false, false, false, 15)]]]));
            // line 18
            yield "        <span class=\"bookmark_label";
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getUser", [], "method", false, false, false, 18))) ? (" shared") : (""));
            yield "\">
            ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getLabel", [], "method", false, false, false, 19), "html", null, true);
            yield "
        </span>
        <span class=\"query\">
            ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bookmark"], "getQuery", [], "method", false, false, false, 22), "html", null, true);
            yield "
        </span>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bookmark'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "console/bookmark_content.twig";
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
        return array (  77 => 22,  71 => 19,  66 => 18,  64 => 15,  63 => 7,  59 => 6,  54 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "console/bookmark_content.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\console\\bookmark_content.twig");
    }
}
