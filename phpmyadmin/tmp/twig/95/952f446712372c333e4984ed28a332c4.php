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

/* preferences/manage/main.twig */
class __TwigTemplate_d38815b4a23d6016f0063428c1c24b48 extends Template
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
        yield ($context["error"] ?? null);
        yield "
<script type=\"text/javascript\">
    ";
        // line 3
        yield PhpMyAdmin\Sanitize::getJsValue("Messages.strSavedOn", _gettext("Saved on: @DATE@"));
        yield "
</script>
<div class=\"row\">
<div id=\"maincontainer\" class=\"container-fluid\">
<div class=\"row\">
    <div class=\"col-12 col-md-7\">
        <div class=\"card mt-4\">
          <div class=\"card-header\">
            ";
yield _gettext("Import");
        // line 12
        yield "          </div>
          <div class=\"card-body\">
            <form class=\"prefs-form disableAjax\" name=\"prefs_import\" action=\"";
        // line 14
        yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
        yield "\" method=\"post\"
                  enctype=\"multipart/form-data\">
                ";
        // line 16
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
                <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_upload_size"] ?? null), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"json\" value=\"\">
                <input type=\"radio\" id=\"import_text_file\" name=\"import_type\" value=\"text_file\" checked=\"checked\">
                <label for=\"import_text_file\"> ";
yield _gettext("Import from file");
        // line 20
        yield " </label>
                <div id=\"opts_import_text_file\" class=\"prefsmanage_opts\">
                    <label for=\"input_import_file\"> ";
yield _gettext("Browse your computer:");
        // line 22
        yield " </label>
                    <input type=\"file\" name=\"import_file\" id=\"input_import_file\">
                </div>
                <input type=\"radio\" id=\"import_local_storage\" name=\"import_type\" value=\"local_storage\"
                       disabled=\"disabled\">
                <label for=\"import_local_storage\"> ";
yield _gettext("Import from browser's storage");
        // line 27
        yield " </label>
                <div id=\"opts_import_local_storage\" class=\"prefsmanage_opts disabled\">
                    <div class=\"localStorage-supported\">
                        ";
yield _gettext("Settings will be imported from your browser's local storage.");
        // line 31
        yield "                        <br>
                        <div class=\"localStorage-exists\">
                            ";
yield _gettext("Saved on: @DATE@");
        // line 34
        yield "                        </div>
                        <div class=\"localStorage-empty\">
                            ";
        // line 36
        yield $this->env->getFilter('notice')->getCallable()(_gettext("You have no saved settings!"));
        yield "
                        </div>
                    </div>
                    <div class=\"localStorage-unsupported\">
                        ";
        // line 40
        yield $this->env->getFilter('notice')->getCallable()(_gettext("This feature is not supported by your web browser"));
        yield "
                    </div>
                </div>
                <input type=\"checkbox\" id=\"import_merge\" name=\"import_merge\">
                <label for=\"import_merge\"> ";
yield _gettext("Merge with current configuration");
        // line 44
        yield " </label>
                <br><br>
                <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_import\" value=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Go"), "html", null, true);
        yield "\">
            </form>
          </div>
        </div>
        ";
        // line 50
        if (($context["exists_setup_and_not_exists_config"] ?? null)) {
            // line 51
            yield "            ";
            // line 52
            yield "            ";
            // line 53
            yield "            ";
            // line 54
            yield "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
yield _gettext("More settings");
            // line 57
            yield "              </div>
              <div class=\"card-body\">
                ";
            // line 59
            yield Twig\Extension\CoreExtension::sprintf(_gettext("You can set more settings by modifying config.inc.php, eg. by using %sSetup script%s."), "<a href=\"setup/index.php\" target=\"_blank\">", "</a>");
            yield "
                ";
            // line 60
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("setup", "setup-script");
            yield "
              </div>
            </div>
        ";
        }
        // line 64
        yield "    </div>
    <div class=\"col-12 col-md-5\">
        <div class=\"card mt-4\">
          <div class=\"card-header\">
            ";
yield _gettext("Export");
        // line 69
        yield "          </div>
          <div class=\"card-body\">
            <div class=\"click-hide-message hide\">
                ";
        // line 72
        yield $this->env->getFilter('raw_success')->getCallable()(_gettext("Configuration has been saved."));
        yield "
            </div>
            <form class=\"prefs-form disableAjax\" name=\"prefs_export\"
                  action=\"";
        // line 75
        yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
        yield "\" method=\"post\">
                ";
        // line 76
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
                <div>
                    <input type=\"radio\" id=\"export_text_file\" name=\"export_type\"
                           value=\"text_file\" checked=\"checked\">
                    <label for=\"export_text_file\">
                        ";
yield _gettext("Save as JSON file");
        // line 82
        yield "                    </label><br>
                    <input type=\"radio\" id=\"export_php_file\" name=\"export_type\" value=\"php_file\">
                    <label for=\"export_php_file\">
                        ";
yield _gettext("Save as PHP file");
        // line 86
        yield "                    </label><br>
                    <input type=\"radio\" id=\"export_local_storage\" name=\"export_type\" value=\"local_storage\"
                           disabled=\"disabled\">
                    <label for=\"export_local_storage\">
                        ";
yield _gettext("Save to browser's storage");
        // line 91
        yield "                    </label>
                </div>
                <div id=\"opts_export_local_storage\"
                     class=\"prefsmanage_opts disabled\">
                    <span class=\"localStorage-supported\">
                        ";
yield _gettext("Settings will be saved in your browser's local storage.");
        // line 97
        yield "                      <div class=\"localStorage-exists\">
                            <b>
                                ";
yield _gettext("Existing settings will be overwritten!");
        // line 100
        yield "                            </b>
                        </div>
                    </span>
                    <div class=\"localStorage-unsupported\">
                        ";
        // line 104
        yield $this->env->getFilter('notice')->getCallable()(_gettext("This feature is not supported by your web browser"));
        yield "
                    </div>
                </div>
                <br>
                <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_export\" value=\"";
yield _gettext("Go");
        // line 108
        yield "\">
            </form>
          </div>
        </div>
        <div class=\"card mt-4\">
          <div class=\"card-header\">
            ";
yield _gettext("Reset");
        // line 115
        yield "          </div>
          <div class=\"card-body\">
            <form class=\"prefs-form disableAjax\" name=\"prefs_reset\"
                  action=\"";
        // line 118
        yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
        yield "\" method=\"post\">
                ";
        // line 119
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
                ";
yield _gettext("You can reset all your settings and restore them to default values.");
        // line 121
        yield "                <br><br>
                <input class=\"btn btn-secondary\" type=\"submit\" name=\"submit_clear\" value=\"";
yield _gettext("Reset");
        // line 122
        yield "\">
            </form>
          </div>
        </div>
    </div>
</div>
    <br class=\"clearfloat\">
</div>
</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "preferences/manage/main.twig";
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
        return array (  259 => 122,  255 => 121,  250 => 119,  246 => 118,  241 => 115,  232 => 108,  224 => 104,  218 => 100,  213 => 97,  205 => 91,  198 => 86,  192 => 82,  183 => 76,  179 => 75,  173 => 72,  168 => 69,  161 => 64,  154 => 60,  150 => 59,  146 => 57,  141 => 54,  139 => 53,  137 => 52,  135 => 51,  133 => 50,  126 => 46,  122 => 44,  114 => 40,  107 => 36,  103 => 34,  98 => 31,  92 => 27,  84 => 22,  79 => 20,  72 => 17,  68 => 16,  63 => 14,  59 => 12,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "preferences/manage/main.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\preferences\\manage\\main.twig");
    }
}
