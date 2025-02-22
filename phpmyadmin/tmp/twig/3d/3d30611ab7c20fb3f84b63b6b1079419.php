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

/* setup/servers/index.twig */
class __TwigTemplate_d3caafe5c4c64f55c1b96e7087ce2bed extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "setup/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("setup/base.twig", "setup/servers/index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "
";
        // line 4
        if (((($context["mode"] ?? null) == "edit") && ($context["has_server"] ?? null))) {
            // line 5
            yield "  <h2>
    ";
yield _gettext("Edit server");
            // line 7
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["server_id"] ?? null), "html", null, true);
            yield "
    <small>(";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["server_dsn"] ?? null), "html", null, true);
            yield ")</small>
  </h2>
";
        } elseif (((        // line 10
($context["mode"] ?? null) != "revert") ||  !($context["has_server"] ?? null))) {
            // line 11
            yield "  <h2>";
yield _gettext("Add a new server");
            yield "</h2>
";
        }
        // line 13
        yield "
";
        // line 14
        if ((((($context["mode"] ?? null) == "add") || (($context["mode"] ?? null) == "edit")) || (($context["mode"] ?? null) == "revert"))) {
            // line 15
            yield "  ";
            yield ($context["page"] ?? null);
            yield "
";
        } else {
            // line 17
            yield "  <p>";
yield _gettext("Something went wrong.");
            yield "</p>
";
        }
        // line 19
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "setup/servers/index.twig";
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
        return array (  102 => 19,  96 => 17,  90 => 15,  88 => 14,  85 => 13,  79 => 11,  77 => 10,  72 => 8,  67 => 7,  63 => 5,  61 => 4,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "setup/servers/index.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\setup\\servers\\index.twig");
    }
}
