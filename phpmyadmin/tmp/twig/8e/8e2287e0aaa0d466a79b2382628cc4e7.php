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

/* scripts.twig */
class __TwigTemplate_67f0a83c0eac7e2358055eadeb731784 extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 2
            yield "  <script data-cfasync=\"false\" type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_dir"] ?? null), "html", null, true);
            yield "js/";
            // line 3
            yield ((((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)) && is_string($_v1 = "vendor/") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)) && is_string($_v3 = "messages.php") && str_starts_with($_v2, $_v3)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("dist/" . CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 3)), "html", null, true)));
            // line 4
            yield ((CoreExtension::inFilter(".php", CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 4))) ? (PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "params", [], "any", false, false, false, 4), ["v" => ($context["version"] ?? null)]))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("?v=" . Twig\Extension\CoreExtension::urlencode(($context["version"] ?? null))), "html", null, true)));
            yield "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        yield "
<script data-cfasync=\"false\" type=\"text/javascript\">
// <![CDATA[
";
        // line 9
        yield ($context["code"] ?? null);
        yield "
";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["files"] ?? null))) {
            // line 11
            yield "AJAX.scriptHandler
";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 13
                yield "  .add('";
                yield PhpMyAdmin\Sanitize::escapeJsString(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 13));
                yield "', ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["file"], "has_onload", [], "any", false, false, false, 13)) ? (1) : (0));
                yield ")
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield ";
\$(function() {
";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 18
                yield "  ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["file"], "has_onload", [], "any", false, false, false, 18)) {
                    // line 19
                    yield "  AJAX.fireOnload('";
                    yield PhpMyAdmin\Sanitize::escapeJsString(CoreExtension::getAttribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 19));
                    yield "');
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "});
";
        }
        // line 24
        yield "// ]]>
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "scripts.twig";
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
        return array (  114 => 24,  110 => 22,  100 => 19,  97 => 18,  93 => 17,  89 => 15,  78 => 13,  74 => 12,  71 => 11,  69 => 10,  65 => 9,  60 => 6,  52 => 4,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "scripts.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\scripts.twig");
    }
}
