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

/* server/privileges/user_overview.twig */
class __TwigTemplate_f87a8b6458a37d9c7568c08bb0efe531 extends Template
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
  <div class=\"col-12\">
    <h2>
      ";
        // line 4
        yield PhpMyAdmin\Html\Generator::getIcon("b_usrlist");
        yield "
      ";
yield _gettext("User accounts overview");
        // line 6
        yield "    </h2>
  </div>
</div>

";
        // line 10
        yield ($context["error_messages"] ?? null);
        yield "

";
        // line 12
        yield ($context["empty_user_notice"] ?? null);
        yield "

";
        // line 14
        yield ($context["initials"] ?? null);
        yield "

";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["users_overview"] ?? null))) {
            // line 17
            yield "  ";
            yield ($context["users_overview"] ?? null);
            yield "
";
        } elseif (        // line 18
($context["is_createuser"] ?? null)) {
            // line 19
            yield "  <div class=\"row\">
    <div class=\"col-12\">
      <fieldset class=\"pma-fieldset\" id=\"fieldset_add_user\">
        <legend>";
yield _pgettext("Create new user", "New");
            // line 22
            yield "</legend>
        <a id=\"add_user_anchor\" href=\"";
            // line 23
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true]);
            yield "\">
          ";
            // line 24
            yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", _gettext("Add user account"));
            yield "
        </a>
      </fieldset>
    </div>
  </div>
";
        }
        // line 30
        yield "
";
        // line 31
        yield ($context["flush_notice"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/user_overview.twig";
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
        return array (  107 => 31,  104 => 30,  95 => 24,  91 => 23,  88 => 22,  82 => 19,  80 => 18,  75 => 17,  73 => 16,  68 => 14,  63 => 12,  58 => 10,  52 => 6,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/user_overview.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\server\\privileges\\user_overview.twig");
    }
}
