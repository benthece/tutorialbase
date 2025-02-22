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

/* setup/base.twig */
class __TwigTemplate_2ed1e0e64f8a6fb8a3b1ed7527e5efa1 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!doctype html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>phpMyAdmin setup</title>
  <link href=\"../favicon.ico\" rel=\"icon\" type=\"image/x-icon\">
  <link href=\"../favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\">
  <link href=\"../setup/styles.css\" rel=\"stylesheet\" type=\"text/css\">
  <script type=\"text/javascript\" src=\"../js/vendor/jquery/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"../js/vendor/jquery/jquery-ui.min.js\"></script>
  <script type=\"text/javascript\" src=\"../js/vendor/bootstrap/bootstrap.bundle.min.js\"></script>
  <script type=\"text/javascript\" src=\"../js/dist/setup/ajax.js\"></script>
  <script type=\"text/javascript\" src=\"../js/dist/config.js\"></script>
  <script type=\"text/javascript\" src=\"../js/dist/setup/scripts.js\"></script>
  <script type=\"text/javascript\" src=\"../js/messages.php\"></script>
</head>
<body>

<h1>
  <span class=\"blue\">php</span><span class=\"orange\">MyAdmin</span>
  setup
</h1>

<div id=\"menu\">
  <ul>
    <li>
      <a href=\"index.php";
        // line 28
        yield PhpMyAdmin\Url::getCommon();
        yield "\"";
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["formset"] ?? null))) ? (" class=\"active\"") : (""));
        yield ">
        ";
yield _gettext("Overview");
        // line 30
        yield "      </a>
    </li>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 33
            yield "      <li>
        <a href=\"index.php";
            // line 34
            yield PhpMyAdmin\Url::getCommon(["page" => "form", "formset" => CoreExtension::getAttribute($this->env, $this->source,             // line 36
$context["page"], "formset", [], "any", false, false, false, 36)]);
            // line 37
            yield "\"";
            yield (((($context["formset"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["page"], "formset", [], "any", false, false, false, 37))) ? (" class=\"active\"") : (""));
            yield ">
          ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 38), "html", null, true);
            yield "
        </a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "  </ul>
</div>

<div id=\"page\" class=\"setup-page\">
  ";
        // line 46
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 47
        yield "</div>

</body>
</html>
";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "setup/base.twig";
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
        return array (  125 => 46,  116 => 47,  114 => 46,  108 => 42,  98 => 38,  93 => 37,  91 => 36,  90 => 34,  87 => 33,  83 => 32,  79 => 30,  72 => 28,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "setup/base.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\setup\\base.twig");
    }
}
