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

/* footer.twig */
class __TwigTemplate_75063d13a8ea4565b3a8564ecf14c0e8 extends Template
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
        if ( !($context["is_ajax"] ?? null)) {
            // line 2
            yield "  </div>
";
        }
        // line 4
        if (( !($context["is_ajax"] ?? null) &&  !($context["is_minimal"] ?? null))) {
            // line 5
            yield "  ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["self_url"] ?? null))) {
                // line 6
                yield "    <div id=\"selflink\" class=\"d-print-none\">
      <a href=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["self_url"] ?? null), "html", null, true);
                yield "\" title=\"";
yield _gettext("Open new phpMyAdmin window");
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
        ";
                // line 8
                if (PhpMyAdmin\Util::showIcons("TabsMode")) {
                    // line 9
                    yield "          ";
                    yield PhpMyAdmin\Html\Generator::getImage("window-new", _gettext("Open new phpMyAdmin window"));
                    yield "
        ";
                } else {
                    // line 11
                    yield "          ";
yield _gettext("Open new phpMyAdmin window");
                    // line 12
                    yield "        ";
                }
                // line 13
                yield "      </a>
    </div>
  ";
            }
            // line 16
            yield "
  <div class=\"clearfloat d-print-none\" id=\"pma_errors\">
    ";
            // line 18
            yield ($context["error_messages"] ?? null);
            yield "
  </div>

  ";
            // line 21
            yield ($context["scripts"] ?? null);
            yield "

  ";
            // line 23
            if (($context["is_demo"] ?? null)) {
                // line 24
                yield "    <div id=\"pma_demo\" class=\"d-print-none\">
      ";
                // line 25
                $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 26
                    yield "        <a href=\"";
                    yield PhpMyAdmin\Url::getFromRoute("/");
                    yield "\">";
yield _gettext("phpMyAdmin Demo Server");
                    yield ":</a>
        ";
                    // line 27
                    if ( !Twig\Extension\CoreExtension::testEmpty(($context["git_revision_info"] ?? null))) {
                        // line 28
                        yield "          ";
                        $context["revision_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 29
                            yield "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL(CoreExtension::getAttribute($this->env, $this->source, ($context["git_revision_info"] ?? null), "revisionUrl", [], "any", false, false, false, 29)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["git_revision_info"] ?? null), "revision", [], "any", false, false, false, 29), "html", null, true);
                            yield "</a>";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 31
                        yield "          ";
                        $context["branch_info"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 32
                            yield "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL(CoreExtension::getAttribute($this->env, $this->source, ($context["git_revision_info"] ?? null), "branchUrl", [], "any", false, false, false, 32)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["git_revision_info"] ?? null), "branch", [], "any", false, false, false, 32), "html", null, true);
                            yield "</a>";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 34
                        yield "          ";
                        yield Twig\Extension\CoreExtension::sprintf(_gettext("Currently running Git revision %1\$s from the %2\$s branch."), ($context["revision_info"] ?? null), ($context["branch_info"] ?? null));
                        yield "
        ";
                    } else {
                        // line 36
                        yield "          ";
yield _gettext("Git information missing!");
                        // line 37
                        yield "        ";
                    }
                    // line 38
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 25
                yield $this->env->getFilter('notice')->getCallable()($_v0);
                // line 39
                yield "    </div>
  ";
            }
            // line 41
            yield "
  ";
            // line 42
            yield ($context["footer"] ?? null);
            yield "
";
        }
        // line 44
        if ( !($context["is_ajax"] ?? null)) {
            // line 45
            yield "  </body>
</html>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "footer.twig";
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
        return array (  166 => 45,  164 => 44,  159 => 42,  156 => 41,  152 => 39,  150 => 25,  146 => 38,  143 => 37,  140 => 36,  134 => 34,  126 => 32,  123 => 31,  115 => 29,  112 => 28,  110 => 27,  103 => 26,  101 => 25,  98 => 24,  96 => 23,  91 => 21,  85 => 18,  81 => 16,  76 => 13,  73 => 12,  70 => 11,  64 => 9,  62 => 8,  56 => 7,  53 => 6,  50 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "footer.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\footer.twig");
    }
}
