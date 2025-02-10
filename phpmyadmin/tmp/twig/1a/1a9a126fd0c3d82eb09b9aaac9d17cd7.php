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

/* server/privileges/subnav.twig */
class __TwigTemplate_26a78b43a286140d8c1252109364b47f extends Template
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
        yield "<div class=\"row\">
  <ul class=\"nav nav-pills m-2\">
    <li class=\"nav-item\">
      <a class=\"nav-link";
        // line 4
        yield (((($context["active"] ?? null) == "privileges")) ? (" active") : (""));
        yield " disableAjax\" href=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["viewing_mode" => "server"]);
        yield "\">
        ";
yield _gettext("User accounts overview");
        // line 6
        yield "      </a>
    </li>
    ";
        // line 8
        if (($context["is_super_user"] ?? null)) {
            // line 9
            yield "      <li class=\"nav-item\">
        <a class=\"nav-link";
            // line 10
            yield (((($context["active"] ?? null) == "user-groups")) ? (" active") : (""));
            yield " disableAjax\" href=\"";
            yield PhpMyAdmin\Url::getFromRoute("/server/user-groups");
            yield "\">
          ";
yield _gettext("User groups");
            // line 12
            yield "        </a>
      </li>
    ";
        }
        // line 15
        yield "  </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/subnav.twig";
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
        return array (  75 => 15,  70 => 12,  63 => 10,  60 => 9,  58 => 8,  54 => 6,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/subnav.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\server\\privileges\\subnav.twig");
    }
}
