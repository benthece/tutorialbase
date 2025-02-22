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

/* home/index.twig */
class __TwigTemplate_2b3fdbb0c88a4cfac78396b3fa3f6ea7 extends Template
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
        if (($context["is_git_revision"] ?? null)) {
            // line 2
            yield "  <div id=\"is_git_revision\"></div>
";
        }
        // line 4
        yield "
";
        // line 5
        yield ($context["message"] ?? null);
        yield "

";
        // line 7
        yield ($context["partial_logout"] ?? null);
        yield "

<div id=\"maincontainer\">
  ";
        // line 10
        yield ($context["sync_favorite_tables"] ?? null);
        yield "
  <div class=\"container-fluid\">
    <div class=\"row mb-3\">
      <div class=\"col-lg-7 col-12\">
        ";
        // line 14
        if (($context["has_server"] ?? null)) {
            // line 15
            yield "          ";
            if (($context["is_demo"] ?? null)) {
                // line 16
                yield "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
yield _gettext("phpMyAdmin Demo Server");
                // line 19
                yield "              </div>
              <div class=\"card-body\">
                ";
                // line 21
                $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 22
                    yield "                  ";
yield _gettext("You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s.");
                    // line 25
                    yield "                ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 21
                yield Twig\Extension\CoreExtension::sprintf($_v0, "<a href=\"url.php?url=https://demo.phpmyadmin.net/\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>");
                // line 26
                yield "              </div>
            </div>
          ";
            }
            // line 29
            yield "
            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
yield _gettext("General settings");
            // line 33
            yield "              </div>
              <ul class=\"list-group list-group-flush\">
                ";
            // line 35
            if (($context["has_server_selection"] ?? null)) {
                // line 36
                yield "                  <li id=\"li_select_server\" class=\"list-group-item\">
                    ";
                // line 37
                yield PhpMyAdmin\Html\Generator::getImage("s_host");
                yield "
                    ";
                // line 38
                yield ($context["server_selection"] ?? null);
                yield "
                  </li>
                ";
            }
            // line 41
            yield "
                ";
            // line 42
            if ((($context["server"] ?? null) > 0)) {
                // line 43
                yield "                  ";
                if (($context["has_change_password_link"] ?? null)) {
                    // line 44
                    yield "                    <li id=\"li_change_password\" class=\"list-group-item\">
                      <a href=\"";
                    // line 45
                    yield PhpMyAdmin\Url::getFromRoute("/user-password");
                    yield "\" id=\"change_password_anchor\" class=\"ajax\">
                        ";
                    // line 46
                    yield PhpMyAdmin\Html\Generator::getIcon("s_passwd", _gettext("Change password"), true);
                    yield "
                      </a>
                    </li>
                  ";
                }
                // line 50
                yield "
                  <li id=\"li_select_mysql_collation\" class=\"list-group-item\">
                    <form method=\"post\" action=\"";
                // line 52
                yield PhpMyAdmin\Url::getFromRoute("/collation-connection");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 53
                yield PhpMyAdmin\Url::getHiddenInputs(null, null, 4, "collation_connection");
                yield "
                      <div class=\"col-12\">
                        <label for=\"collationConnectionSelect\" class=\"col-form-label\">
                          ";
                // line 56
                yield PhpMyAdmin\Html\Generator::getImage("s_asci");
                yield "
                          ";
yield _gettext("Server connection collation:");
                // line 58
                yield "                          ";
                yield PhpMyAdmin\Html\MySQLDocumentation::show("charset-connection");
                yield "
                        </label>
                      </div>
                      ";
                // line 61
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["charsets"] ?? null))) {
                    // line 62
                    yield "                      <div class=\"col-12\">
                        <select lang=\"en\" dir=\"ltr\" name=\"collation_connection\" id=\"collationConnectionSelect\" class=\"form-select autosubmit\">
                          <option value=\"\">";
yield _gettext("Collation");
                    // line 64
                    yield "</option>
                          <option value=\"\"></option>
                          ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                        // line 67
                        yield "                            <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 67), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 67), "html", null, true);
                        yield "\">
                              ";
                        // line 68
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 68));
                        foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                            // line 69
                            yield "                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 69), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 69), "html", null, true);
                            yield "\"";
                            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "is_selected", [], "any", false, false, false, 69)) ? (" selected") : (""));
                            yield ">";
                            // line 70
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 70), "html", null, true);
                            // line 71
                            yield "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['collation'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 73
                        yield "                            </optgroup>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['charset'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    yield "                        </select>
                      </div>
                      ";
                }
                // line 78
                yield "                    </form>
                  </li>

                  <li id=\"li_user_preferences\" class=\"list-group-item\">
                    <a href=\"";
                // line 82
                yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
                yield "\">
                      ";
                // line 83
                yield PhpMyAdmin\Html\Generator::getIcon("b_tblops", _gettext("More settings"), true);
                yield "
                    </a>
                  </li>
                ";
            }
            // line 87
            yield "              </ul>
            </div>
          ";
        }
        // line 90
        yield "
            ";
        // line 91
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["available_languages"] ?? null)) || ($context["has_theme_manager"] ?? null))) {
            // line 92
            yield "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
yield _gettext("Appearance settings");
            // line 95
            yield "              </div>
              <ul class=\"list-group list-group-flush\">
                ";
            // line 97
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["available_languages"] ?? null))) {
                // line 98
                yield "                  <li id=\"li_select_lang\" class=\"list-group-item\">
                    <form method=\"get\" action=\"";
                // line 99
                yield PhpMyAdmin\Url::getFromRoute("/");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 100
                yield PhpMyAdmin\Url::getHiddenInputs(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                yield "
                      <div class=\"col-12\">
                        <label for=\"languageSelect\" class=\"col-form-label text-nowrap\">
                          ";
                // line 103
                yield PhpMyAdmin\Html\Generator::getImage("s_lang");
                yield "
                          ";
yield _gettext("Language");
                // line 105
                yield "                          ";
                if ((_gettext("Language") != "Language")) {
                    // line 106
                    yield "                            ";
                    // line 108
                    yield "                            <i lang=\"en\" dir=\"ltr\">(Language)</i>
                          ";
                }
                // line 110
                yield "                          ";
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq7-2");
                yield "
                        </label>
                      </div>
                      <div class=\"col-12\">
                        <select name=\"lang\" class=\"form-select autosubmit w-auto\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\">
                          ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 116
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getCode", [], "method", false, false, false, 116)), "html", null, true);
                    yield "\"";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "isActive", [], "method", false, false, false, 116)) ? (" selected") : (""));
                    yield ">";
                    // line 117
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getName", [], "method", false, false, false, 117);
                    // line 118
                    yield "</option>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                yield "                        </select>
                      </div>
                    </form>
                  </li>
                ";
            }
            // line 125
            yield "
                ";
            // line 126
            if (($context["has_theme_manager"] ?? null)) {
                // line 127
                yield "                  <li id=\"li_select_theme\" class=\"list-group-item\">
                    <form method=\"post\" action=\"";
                // line 128
                yield PhpMyAdmin\Url::getFromRoute("/themes/set");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 129
                yield PhpMyAdmin\Url::getHiddenInputs();
                yield "
                      <div class=\"col-12\">
                        <label for=\"themeSelect\" class=\"col-form-label\">
                          ";
                // line 132
                yield PhpMyAdmin\Html\Generator::getIcon("s_theme", _gettext("Theme"));
                yield "
                        </label>
                      </div>
                      <div class=\"col-12\">
                        <div class=\"input-group\">
                          <select name=\"set_theme\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"themeSelect\">
                            ";
                // line 138
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 139
                    yield "                              <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 139), "html", null, true);
                    yield "\"";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "is_active", [], "any", false, false, false, 139)) ? (" selected") : (""));
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 139), "html", null, true);
                    yield "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                yield "                          </select>
                          <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#themesModal\">
                            ";
yield _pgettext("View all themes", "View all");
                // line 144
                yield "                          </button>
                        </div>
                      </div>
                    </form>
                  </li>
                ";
            }
            // line 150
            yield "              </ul>
            </div>
            ";
        }
        // line 153
        yield "          </div>

      <div class=\"col-lg-5 col-12\">
        ";
        // line 156
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["database_server"] ?? null))) {
            // line 157
            yield "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              ";
yield _gettext("Database server");
            // line 160
            yield "            </div>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item\">
                ";
yield _gettext("Server:");
            // line 164
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "host", [], "any", false, false, false, 164), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("Server type:");
            // line 168
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "type", [], "any", false, false, false, 168), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("Server connection:");
            // line 172
            yield "                ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "connection", [], "any", false, false, false, 172);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("Server version:");
            // line 176
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "version", [], "any", false, false, false, 176), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("Protocol version:");
            // line 180
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "protocol", [], "any", false, false, false, 180), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("User:");
            // line 184
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "user", [], "any", false, false, false, 184), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("Server charset:");
            // line 188
            yield "                <span lang=\"en\" dir=\"ltr\">
                  ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "charset", [], "any", false, false, false, 189), "html", null, true);
            yield "
                </span>
              </li>
            </ul>
          </div>
        ";
        }
        // line 195
        yield "
        ";
        // line 196
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["web_server"] ?? null)) || ($context["show_php_info"] ?? null))) {
            // line 197
            yield "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              ";
yield _gettext("Web server");
            // line 200
            yield "            </div>
            <ul class=\"list-group list-group-flush\">
              ";
            // line 202
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["web_server"] ?? null))) {
                // line 203
                yield "                ";
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "software", [], "any", false, false, false, 203))) {
                    // line 204
                    yield "                <li class=\"list-group-item\">
                  ";
                    // line 205
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "software", [], "any", false, false, false, 205), "html", null, true);
                    yield "
                </li>
                ";
                }
                // line 208
                yield "                <li class=\"list-group-item\" id=\"li_mysql_client_version\">
                  ";
yield _gettext("Database client version:");
                // line 210
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "database", [], "any", false, false, false, 210), "html", null, true);
                yield "
                </li>
                <li class=\"list-group-item\">
                  ";
yield _gettext("PHP extension:");
                // line 214
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "php_extensions", [], "any", false, false, false, 214));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 215
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["extension"], "html", null, true);
                    yield "
                    ";
                    // line 216
                    yield PhpMyAdmin\Html\Generator::showPHPDocumentation((("book." . $context["extension"]) . ".php"));
                    yield "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                yield "                </li>
                <li class=\"list-group-item\">
                  ";
yield _gettext("PHP version:");
                // line 221
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "php_version", [], "any", false, false, false, 221), "html", null, true);
                yield "
                </li>
              ";
            }
            // line 224
            yield "              ";
            if (($context["show_php_info"] ?? null)) {
                // line 225
                yield "                <li class=\"list-group-item\">
                  <a href=\"";
                // line 226
                yield PhpMyAdmin\Url::getFromRoute("/phpinfo");
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                    ";
yield _gettext("Show PHP information");
                // line 228
                yield "                  </a>
                </li>
              ";
            }
            // line 231
            yield "            </ul>
          </div>
        ";
        }
        // line 234
        yield "
          <div class=\"card mt-4\">
            <div class=\"card-header\">
              phpMyAdmin
            </div>
            <ul class=\"list-group list-group-flush\">
              <li id=\"li_pma_version\" class=\"list-group-item";
        // line 240
        yield ((($context["is_version_checked"] ?? null)) ? (" jsversioncheck") : (""));
        yield "\">
                ";
yield _gettext("Version information:");
        // line 242
        yield "                <span class=\"version\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["phpmyadmin_version"] ?? null), "html", null, true);
        yield "</span>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 245
        yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("index");
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
yield _gettext("Documentation");
        // line 247
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
yield _gettext("Official Homepage");
        // line 252
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/contribute/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
yield _gettext("Contribute");
        // line 257
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/support/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
yield _gettext("Get support");
        // line 262
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 265
        yield PhpMyAdmin\Url::getFromRoute("/changelog");
        yield "\" target=\"_blank\">
                  ";
yield _gettext("List of changes");
        // line 267
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 270
        yield PhpMyAdmin\Url::getFromRoute("/license");
        yield "\" target=\"_blank\">
                  ";
yield _gettext("License");
        // line 272
        yield "                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 280
            yield "        <div class=\"alert ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 280) == "warning")) ? ("alert-warning") : ("alert-info"));
            yield "\" role=\"alert\">
          ";
            // line 281
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 281) == "warning")) {
                // line 282
                yield "            ";
                yield PhpMyAdmin\Html\Generator::getImage("s_attention", _gettext("Warning"));
                yield "
          ";
            } else {
                // line 284
                yield "            ";
                yield PhpMyAdmin\Html\Generator::getImage("s_notice", _gettext("Notice"));
                yield "
          ";
            }
            // line 286
            yield "          ";
            yield PhpMyAdmin\Sanitize::sanitizeMessage(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 286));
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        yield "    </div>
  </div>

";
        // line 292
        if (($context["has_theme_manager"] ?? null)) {
            // line 293
            yield "  <div class=\"modal fade\" id=\"themesModal\" tabindex=\"-1\" aria-labelledby=\"themesModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"themesModalLabel\">";
yield _gettext("phpMyAdmin Themes");
            // line 297
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Close");
            // line 298
            yield "\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">";
yield _gettext("Loading…");
            // line 302
            yield "</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
yield _gettext("Close");
            // line 306
            yield "</button>
          <a href=\"";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/themes/"), "html", null, true);
            yield "#pma_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["phpmyadmin_major_version"] ?? null), ["." => "_"]), "html", null, true);
            yield "\" class=\"btn btn-primary\" rel=\"noopener noreferrer\" target=\"_blank\">
            ";
yield _gettext("Get more themes!");
            // line 309
            yield "          </a>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 315
        yield "
";
        // line 316
        yield ($context["config_storage_message"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.twig";
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
        return array (  728 => 316,  725 => 315,  717 => 309,  710 => 307,  707 => 306,  700 => 302,  693 => 298,  689 => 297,  682 => 293,  680 => 292,  675 => 289,  665 => 286,  659 => 284,  653 => 282,  651 => 281,  646 => 280,  642 => 279,  633 => 272,  628 => 270,  623 => 267,  618 => 265,  613 => 262,  608 => 260,  603 => 257,  598 => 255,  593 => 252,  588 => 250,  583 => 247,  578 => 245,  571 => 242,  566 => 240,  558 => 234,  553 => 231,  548 => 228,  543 => 226,  540 => 225,  537 => 224,  530 => 221,  525 => 218,  517 => 216,  512 => 215,  507 => 214,  499 => 210,  495 => 208,  489 => 205,  486 => 204,  483 => 203,  481 => 202,  477 => 200,  472 => 197,  470 => 196,  467 => 195,  458 => 189,  455 => 188,  447 => 184,  439 => 180,  431 => 176,  423 => 172,  415 => 168,  407 => 164,  401 => 160,  396 => 157,  394 => 156,  389 => 153,  384 => 150,  376 => 144,  371 => 141,  358 => 139,  354 => 138,  345 => 132,  339 => 129,  335 => 128,  332 => 127,  330 => 126,  327 => 125,  320 => 120,  313 => 118,  311 => 117,  305 => 116,  301 => 115,  292 => 110,  288 => 108,  286 => 106,  283 => 105,  278 => 103,  272 => 100,  268 => 99,  265 => 98,  263 => 97,  259 => 95,  254 => 92,  252 => 91,  249 => 90,  244 => 87,  237 => 83,  233 => 82,  227 => 78,  222 => 75,  215 => 73,  208 => 71,  206 => 70,  198 => 69,  194 => 68,  187 => 67,  183 => 66,  179 => 64,  174 => 62,  172 => 61,  165 => 58,  160 => 56,  154 => 53,  150 => 52,  146 => 50,  139 => 46,  135 => 45,  132 => 44,  129 => 43,  127 => 42,  124 => 41,  118 => 38,  114 => 37,  111 => 36,  109 => 35,  105 => 33,  99 => 29,  94 => 26,  92 => 21,  88 => 25,  85 => 22,  83 => 21,  79 => 19,  74 => 16,  71 => 15,  69 => 14,  62 => 10,  56 => 7,  51 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\home\\index.twig");
    }
}
