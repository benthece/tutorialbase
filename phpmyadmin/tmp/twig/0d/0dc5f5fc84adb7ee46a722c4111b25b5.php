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

/* console/toolbar.twig */
class __TwigTemplate_26a043cfc212c6b1df8a7fc9b070e98e extends Template
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
        yield "<div class=\"toolbar ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["parent_div_classes"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["content_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 3
            yield "        ";
            if ((array_key_exists("content", $context) &&  !(null === $context["content"]))) {
                // line 4
                yield "        <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["content"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "html", null, true);
                yield "\">
            ";
                // line 5
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["content"], "image", [], "array", true, true, false, 5)) ? ((($_v1 = $context["content"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["image"] ?? null) : null)) : (""));
                yield "
            <span>";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["content"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[1] ?? null) : null), "html", null, true);
                yield "</span>
        </div>
        ";
            }
            // line 9
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['content'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "console/toolbar.twig";
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
        return array (  75 => 10,  69 => 9,  63 => 6,  59 => 5,  54 => 4,  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "console/toolbar.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\console\\toolbar.twig");
    }
}
