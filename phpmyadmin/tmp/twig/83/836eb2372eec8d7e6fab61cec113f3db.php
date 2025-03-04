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

/* database/structure/favorite_anchor.twig */
class __TwigTemplate_0dd1647880c812f3f20fd65b4275ef95 extends Template
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
        yield "<a id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_name_hash"] ?? null), "html", null, true);
        yield "_favorite_anchor\"
    class=\"ajax favorite_table_anchor\"
    href=\"";
        // line 3
        yield PhpMyAdmin\Url::getFromRoute("/database/structure/favorite-table", ($context["fav_params"] ?? null));
        yield "\"
    title=\"";
        // line 4
        yield ((($context["already_favorite"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Remove from Favorites"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Add to Favorites"), "html", null, true)));
        yield "\"
    data-favtargets=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db_table_name_hash"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 6
        yield ((($context["already_favorite"] ?? null)) ? (PhpMyAdmin\Html\Generator::getIcon("b_favorite")) : (PhpMyAdmin\Html\Generator::getIcon("b_no_favorite")));
        yield "
</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/favorite_anchor.twig";
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
        return array (  60 => 6,  56 => 5,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/structure/favorite_anchor.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\database\\structure\\favorite_anchor.twig");
    }
}
