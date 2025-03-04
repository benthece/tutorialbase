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

/* login/form.twig */
class __TwigTemplate_b7e156c29a8c9babb2d10dc36e7dd0e1 extends Template
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
        yield ($context["login_header"] ?? null);
        yield "

";
        // line 3
        if (($context["is_demo"] ?? null)) {
            // line 4
            yield "  <div class=\"card mb-4\">
    <div class=\"card-header\">";
yield _gettext("phpMyAdmin Demo Server");
            // line 5
            yield "</div>
    <div class=\"card-body\">
      ";
            // line 7
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "        ";
yield _gettext("You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s.");
                // line 11
                yield "      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 7
            yield Twig\Extension\CoreExtension::sprintf($_v0, "<a href=\"url.php?url=https://demo.phpmyadmin.net/\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>");
            // line 12
            yield "    </div>
  </div>
";
        }
        // line 15
        yield "
";
        // line 16
        yield ($context["error_messages"] ?? null);
        yield "

";
        // line 18
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["available_languages"] ?? null))) {
            // line 19
            yield "  <div class='hide js-show'>
    <div class=\"card mb-4\">
      <div class=\"card-header\">
        <span id=\"languageSelectLabel\">
          ";
yield _gettext("Language");
            // line 24
            yield "          ";
            if ((_gettext("Language") != "Language")) {
                // line 25
                yield "            ";
                // line 27
                yield "            <i lang=\"en\" dir=\"ltr\">(Language)</i>
          ";
            }
            // line 29
            yield "        </span>
      </div>
      <div class=\"card-body\">
        <form method=\"get\" action=\"";
            // line 32
            yield PhpMyAdmin\Url::getFromRoute("/");
            yield "\" class=\"disableAjax\">
          ";
            // line 33
            yield PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
            yield "
          <select name=\"lang\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\" aria-labelledby=\"languageSelectLabel\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 36
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getCode", [], "method", false, false, false, 36)), "html", null, true);
                yield "\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "isActive", [], "method", false, false, false, 36)) ? (" selected") : (""));
                yield ">";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getName", [], "method", false, false, false, 37);
                // line 38
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "          </select>
        </form>
      </div>
    </div>
  </div>
";
        }
        // line 46
        yield "
<form method=\"post\" id=\"login_form\" action=\"index.php?route=/\" name=\"login_form\" class=\"";
        // line 48
        yield (( !($context["is_session_expired"] ?? null)) ? ("disableAjax hide ") : (""));
        yield "js-show\"";
        yield (( !($context["has_autocomplete"] ?? null)) ? (" autocomplete=\"off\"") : (""));
        yield ">
  ";
        // line 50
        yield "  ";
        yield PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null), "", 0, "server");
        yield "
  <input type=\"hidden\" name=\"set_session\" value=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["session_id"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 52
        if (($context["is_session_expired"] ?? null)) {
            // line 53
            yield "    <input type=\"hidden\" name=\"session_timedout\" value=\"1\">
  ";
        }
        // line 55
        yield "
  <div class=\"card mb-4\">
    <div class=\"card-header\">
      ";
yield _gettext("Log in");
        // line 59
        yield "      ";
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("index");
        yield "
    </div>
    <div class=\"card-body\">
      ";
        // line 62
        if (($context["is_arbitrary_server_allowed"] ?? null)) {
            // line 63
            yield "        <div class=\"row mb-3\">
          <label for=\"serverNameInput\" class=\"col-sm-4 col-form-label\" title=\"";
yield _gettext("You can enter hostname/IP address and port separated by space.");
            // line 64
            yield "\">
            ";
yield _gettext("Server:");
            // line 66
            yield "          </label>
          <div class=\"col-sm-8\">
            <input type=\"text\" name=\"pma_servername\" id=\"serverNameInput\" value=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["default_server"] ?? null), "html", null, true);
            yield "\" class=\"form-control\" title=\"";
yield _gettext("You can enter hostname/IP address and port separated by space.");
            // line 69
            yield "\">
          </div>
        </div>
      ";
        }
        // line 73
        yield "
      <div class=\"row mb-3\">
        <label for=\"input_username\" class=\"col-sm-4 col-form-label\">
          ";
yield _gettext("Username:");
        // line 77
        yield "        </label>
        <div class=\"col-sm-8\">
          <input type=\"text\" name=\"pma_username\" id=\"input_username\" value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["default_user"] ?? null), "html", null, true);
        yield "\" class=\"form-control\" autocomplete=\"username\" spellcheck=\"false\">
        </div>
      </div>

      <div class=\"row\">
        <label for=\"input_password\" class=\"col-sm-4 col-form-label\">
          ";
yield _gettext("Password:");
        // line 86
        yield "        </label>
        <div class=\"col-sm-8\">
          <input type=\"password\" name=\"pma_password\" id=\"input_password\" value=\"\" class=\"form-control\" autocomplete=\"current-password\" spellcheck=\"false\">
        </div>
      </div>

      ";
        // line 92
        if (($context["has_servers"] ?? null)) {
            // line 93
            yield "        <div class=\"row mt-3\">
          <label for=\"select_server\" class=\"col-sm-4 col-form-label\">
            ";
yield _gettext("Server choice:");
            // line 96
            yield "          </label>
          <div class=\"col-sm-8\">
            <select name=\"server\" id=\"select_server\" class=\"form-select\"";
            // line 99
            if (($context["is_arbitrary_server_allowed"] ?? null)) {
                yield " onchange=\"document.forms['login_form'].elements['pma_servername'].value = ''\"";
            }
            yield ">
              ";
            // line 100
            yield ($context["server_options"] ?? null);
            yield "
            </select>
          </div>
        </div>
      ";
        } else {
            // line 105
            yield "        <input type=\"hidden\" name=\"server\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["server"] ?? null), "html", null, true);
            yield "\">
      ";
        }
        // line 107
        yield "    </div>
    <div class=\"card-footer\">
      ";
        // line 109
        if (($context["has_captcha"] ?? null)) {
            // line 110
            yield "        <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["captcha_api"] ?? null), "html", null, true);
            yield "?hl=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lang"] ?? null), "html", null, true);
            yield "\" async defer></script>
        ";
            // line 111
            if (($context["use_captcha_checkbox"] ?? null)) {
                // line 112
                yield "          <div class=\"row g-3\">
            <div class=\"col\">
              <div class=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["captcha_req"] ?? null), "html", null, true);
                yield "\" data-sitekey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["captcha_key"] ?? null), "html", null, true);
                yield "\"></div>
            </div>
            <div class=\"col align-self-center text-end\">
              <input class=\"btn btn-primary\" value=\"";
yield _gettext("Log in");
                // line 117
                yield "\" type=\"submit\" id=\"input_go\">
            </div>
          </div>
        ";
            } else {
                // line 121
                yield "          <input class=\"btn btn-primary ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["captcha_req"] ?? null), "html", null, true);
                yield "\" data-sitekey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["captcha_key"] ?? null), "html", null, true);
                yield "\" data-callback=\"Functions_recaptchaCallback\" value=\"";
yield _gettext("Log in");
                yield "\" type=\"submit\" id=\"input_go\">
        ";
            }
            // line 123
            yield "      ";
        } else {
            // line 124
            yield "        <input class=\"btn btn-primary\" value=\"";
yield _gettext("Log in");
            yield "\" type=\"submit\" id=\"input_go\">
      ";
        }
        // line 126
        yield "    </div>
  </div>
</form>

";
        // line 130
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["errors"] ?? null))) {
            // line 131
            yield "  <div id=\"pma_errors\">
    ";
            // line 132
            yield ($context["errors"] ?? null);
            yield "
  </div>
  </div>
  </div>
";
        }
        // line 137
        yield "
";
        // line 138
        yield ($context["login_footer"] ?? null);
        yield "

";
        // line 140
        yield ($context["config_footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/form.twig";
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
        return array (  340 => 140,  335 => 138,  332 => 137,  324 => 132,  321 => 131,  319 => 130,  313 => 126,  307 => 124,  304 => 123,  294 => 121,  288 => 117,  279 => 114,  275 => 112,  273 => 111,  266 => 110,  264 => 109,  260 => 107,  254 => 105,  246 => 100,  240 => 99,  236 => 96,  231 => 93,  229 => 92,  221 => 86,  211 => 79,  207 => 77,  201 => 73,  195 => 69,  191 => 68,  187 => 66,  183 => 64,  179 => 63,  177 => 62,  170 => 59,  164 => 55,  160 => 53,  158 => 52,  154 => 51,  149 => 50,  143 => 48,  140 => 46,  132 => 40,  125 => 38,  123 => 37,  117 => 36,  113 => 35,  108 => 33,  104 => 32,  99 => 29,  95 => 27,  93 => 25,  90 => 24,  83 => 19,  81 => 18,  76 => 16,  73 => 15,  68 => 12,  66 => 7,  62 => 11,  59 => 8,  57 => 7,  53 => 5,  49 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "login/form.twig", "C:\\Users\\helix\\Documents\\tutorialbase\\phpmyadmin\\templates\\login\\form.twig");
    }
}
