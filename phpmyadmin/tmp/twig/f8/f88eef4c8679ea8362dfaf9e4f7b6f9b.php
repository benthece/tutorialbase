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

/* display/results/comment_for_row.twig */
class __TwigTemplate_be7c58ce95bcc3cf28a5fafa58dc8764 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["comments_map"] ?? null), ($context["table_name"] ?? null), [], "array", true, true, false, 1) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 2
($context["comments_map"] ?? null), ($context["table_name"] ?? null), [], "array", false, true, false, 2), ($context["column_name"] ?? null), [], "array", true, true, false, 2))) {
            // line 3
            yield "    <br><span class=\"tblcomment\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = (($_v1 = ($context["comments_map"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["table_name"] ?? null)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["column_name"] ?? null)] ?? null) : null), "html", null, true);
            yield "\">
        ";
            // line 4
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v2 = (($_v3 = ($context["comments_map"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[($context["table_name"] ?? null)] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["column_name"] ?? null)] ?? null) : null)) > ($context["limit_chars"] ?? null))) {
                // line 5
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (($_v4 = (($_v5 = ($context["comments_map"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["table_name"] ?? null)] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[($context["column_name"] ?? null)] ?? null) : null), 0, ($context["limit_chars"] ?? null)), "html", null, true);
                yield "…
        ";
            } else {
                // line 7
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = (($_v7 = ($context["comments_map"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[($context["table_name"] ?? null)] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["column_name"] ?? null)] ?? null) : null), "html", null, true);
                yield "
        ";
            }
            // line 9
            yield "    </span>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "display/results/comment_for_row.twig";
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
        return array (  64 => 9,  58 => 7,  52 => 5,  50 => 4,  45 => 3,  43 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "display/results/comment_for_row.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\display\\results\\comment_for_row.twig");
    }
}
