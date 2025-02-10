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

/* setup/home/index.twig */
class __TwigTemplate_e30cd40afe833ce8f54972363a0b0b7d extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "setup/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("setup/base.twig", "setup/home/index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "
<form id=\"select_lang\" method=\"post\">
  ";
        // line 5
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
  <bdo lang=\"en\" dir=\"ltr\">
    <label for=\"lang\">
      ";
yield _gettext("Language");
        // line 9
        yield "      ";
        yield (((_gettext("Language") != "Language")) ? (" - Language") : (""));
        yield "
    </label>
  </bdo>
  <br>
  <select id=\"lang\" name=\"lang\" class=\"autosubmit\" lang=\"en\" dir=\"ltr\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 15
            yield "      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 15), "html", null, true);
            yield "\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "is_active", [], "any", false, false, false, 15)) ? (" selected") : (""));
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 15);
            yield "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "  </select>
</form>

<h2>";
yield _gettext("Overview");
        // line 20
        yield "</h2>

<a href=\"#\" id=\"show_hidden_messages\" class=\"hide\">
  ";
yield _gettext("Show hidden messages");
        // line 23
        yield " (#MSG_COUNT)
</a>

";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            yield "  <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 27), "html", null, true);
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "is_hidden", [], "any", false, false, false, 27)) ? (" hiddenmessage") : (""));
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "\">
    <h4 class=\"fs-6\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "title", [], "any", false, false, false, 28), "html", null, true);
            yield "</h4>
    ";
            // line 29
            yield CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 29);
            yield "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "
<fieldset class=\"pma-fieldset simple\">
  <legend>";
yield _gettext("Servers");
        // line 34
        yield "</legend>

  <form method=\"get\" action=\"index.php\" class=\"config-form disableAjax\">
    <input type=\"hidden\" name=\"tab_hash\" value=\"\">
    ";
        // line 38
        if (($context["has_check_page_refresh"] ?? null)) {
            // line 39
            yield "      <input type=\"hidden\" name=\"check_page_refresh\" id=\"check_page_refresh\" value=\"\">
    ";
        }
        // line 41
        yield "    ";
        yield PhpMyAdmin\Url::getHiddenInputs("", "", 0, "server");
        yield "
    ";
        // line 42
        yield PhpMyAdmin\Url::getHiddenFields(["page" => "servers", "mode" => "add"], "", true);
        yield "

  <div class=\"form\">
    ";
        // line 45
        if ((($context["server_count"] ?? null) > 0)) {
            // line 46
            yield "      <table class=\"table w-auto datatable\">
        <tr>
          <th>#</th>
          <th>";
yield _gettext("Name");
            // line 49
            yield "</th>
          <th>";
yield _gettext("Authentication type");
            // line 50
            yield "</th>
          <th colspan=\"2\">DSN</th>
        </tr>

        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["servers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 55
                yield "          <tr>
            <td>";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 56), "html", null, true);
                yield "</td>
            <td>";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 57), "html", null, true);
                yield "</td>
            <td>";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "auth_type", [], "any", false, false, false, 58), "html", null, true);
                yield "</td>
            <td>";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "dsn", [], "any", false, false, false, 59), "html", null, true);
                yield "</td>
            <td class=\"text-nowrap\">
              <small>
                <a href=\"";
                // line 62
                yield PhpMyAdmin\Url::getCommon(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["server"], "params", [], "any", false, false, false, 62), "edit", [], "any", false, false, false, 62));
                yield "\">
                  ";
yield _gettext("Edit");
                // line 64
                yield "                </a>
                |
                <a class=\"delete-server\" href=\"";
                // line 66
                yield PhpMyAdmin\Url::getCommon(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["server"], "params", [], "any", false, false, false, 66), "remove", [], "any", false, false, false, 66));
                yield "\" data-post=\"";
                // line 67
                yield PhpMyAdmin\Url::getCommon(["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["server"], "params", [], "any", false, false, false, 67), "token", [], "any", false, false, false, 67)], "", false);
                yield "\">
                  ";
yield _gettext("Delete");
                // line 69
                yield "                </a>
              </small>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "      </table>
    ";
        } else {
            // line 76
            yield "      <table class=\"table mb-0\">
        <tr>
          <td>
            <em>";
yield _gettext("There are no configured servers");
            // line 79
            yield "</em>
          </td>
        </tr>
      </table>
    ";
        }
        // line 84
        yield "
    <table class=\"table mb-0\">
      <tr>
        <td class=\"lastrow text-start\">
          <input type=\"submit\" name=\"submit\" value=\"";
yield _gettext("New server");
        // line 88
        yield "\">
        </td>
      </tr>
    </table>
  </div>

  </form>
</fieldset>

<fieldset class=\"pma-fieldset simple\">
  <legend>";
yield _gettext("Configuration file");
        // line 98
        yield "</legend>

  <form method=\"post\" action=\"config.php\" class=\"config-form disableAjax\">
    <input type=\"hidden\" name=\"tab_hash\" value=\"\">
    ";
        // line 102
        if (($context["has_check_page_refresh"] ?? null)) {
            // line 103
            yield "      <input type=\"hidden\" name=\"check_page_refresh\" id=\"check_page_refresh\" value=\"\">
    ";
        }
        // line 105
        yield "    ";
        yield PhpMyAdmin\Url::getHiddenInputs("", "", 0, "server");
        yield "

  <table class=\"table table-borderless\">
    <tr>
      <th>
        <label for=\"DefaultLang\">";
yield _gettext("Default language");
        // line 110
        yield "</label>
        <span class=\"doc\">
          <a href=\"";
        // line 112
        yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("config", "cfg_DefaultLang", "../");
        yield "\" target=\"_blank\" rel=\"noreferrer noopener\">";
        // line 113
        yield PhpMyAdmin\Html\Generator::getImage("b_help", _gettext("Documentation"));
        // line 114
        yield "</a>
        </span>
      </th>
      <td>
        <select name=\"DefaultLang\" id=\"DefaultLang\" class=\"w-75\">
          ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 120
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 120), "html", null, true);
            yield "\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "is_active", [], "any", false, false, false, 120)) ? (" selected") : (""));
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 120);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "        </select>
      </td>
    </tr>

    <tr>
      <th>
        <label for=\"ServerDefault\">";
yield _gettext("Default server");
        // line 128
        yield "</label>
        <span class=\"doc\">
          <a href=\"";
        // line 130
        yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("config", "cfg_ServerDefault", "../");
        yield "\" target=\"_blank\" rel=\"noreferrer noopener\">";
        // line 131
        yield PhpMyAdmin\Html\Generator::getImage("b_help", _gettext("Documentation"));
        // line 132
        yield "</a>
        </span>
      </th>
      <td>
        <select name=\"ServerDefault\" id=\"ServerDefault\" class=\"w-75\">
          ";
        // line 137
        if ((($context["server_count"] ?? null) > 0)) {
            // line 138
            yield "            ";
            if ((($context["server_count"] ?? null) > 1)) {
                // line 139
                yield "              <option value=\"0\">";
yield _gettext("let the user choose");
                yield "</option>
              <option value=\"\" disabled>------------------------------</option>
            ";
            }
            // line 142
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["servers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 143
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 143), "html", null, true);
                yield "\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 143) == 1)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 143), "html", null, true);
                yield " [";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 143), "html", null, true);
                yield "]</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            yield "          ";
        } else {
            // line 146
            yield "            <option value=\"1\">";
yield _gettext("- none -");
            yield "</option>
          ";
        }
        // line 148
        yield "        </select>
      </td>
    </tr>

    <tr>
      <th><label for=\"eol\">";
yield _gettext("End of line");
        // line 153
        yield "</label></th>
      <td>
        <select name=\"eol\" id=\"eol\" class=\"w-75\">
          <option value=\"unix\"";
        // line 156
        yield (((($context["eol"] ?? null) == "unix")) ? (" selected") : (""));
        yield ">UNIX / Linux (\\n)</option>
          <option value=\"win\"";
        // line 157
        yield (((($context["eol"] ?? null) == "win")) ? (" selected") : (""));
        yield ">Windows (\\r\\n)</option>
        </select>
      </td>
    </tr>

    <tr>
      <td colspan=\"2\" class=\"lastrow text-start\">
        <input type=\"submit\" name=\"submit_display\" value=\"";
yield _gettext("Display");
        // line 164
        yield "\">
        <input type=\"submit\" name=\"submit_download\" value=\"";
yield _gettext("Download");
        // line 165
        yield "\">
        <input class=\"red\" type=\"submit\" name=\"submit_clear\" value=\"";
yield _gettext("Clear");
        // line 166
        yield "\">
      </td>
    </tr>
  </table>

  </form>
</fieldset>

<div id=\"footer\">
  <a href=\"../url.php?url=https://www.phpmyadmin.net/\">";
yield _gettext("phpMyAdmin homepage");
        // line 175
        yield "</a>
  <a href=\"../url.php?url=https://www.phpmyadmin.net/donate/\">";
yield _gettext("Donate");
        // line 176
        yield "</a>
  <a href=\"";
        // line 177
        yield PhpMyAdmin\Url::getCommon(["version_check" => "1"]);
        yield "\">";
yield _gettext("Check for latest version");
        yield "</a>
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "setup/home/index.twig";
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
        return array (  448 => 177,  445 => 176,  441 => 175,  429 => 166,  425 => 165,  421 => 164,  410 => 157,  406 => 156,  401 => 153,  393 => 148,  387 => 146,  384 => 145,  369 => 143,  364 => 142,  357 => 139,  354 => 138,  352 => 137,  345 => 132,  343 => 131,  340 => 130,  336 => 128,  327 => 122,  314 => 120,  310 => 119,  303 => 114,  301 => 113,  298 => 112,  294 => 110,  284 => 105,  280 => 103,  278 => 102,  272 => 98,  259 => 88,  252 => 84,  245 => 79,  239 => 76,  235 => 74,  225 => 69,  220 => 67,  217 => 66,  213 => 64,  208 => 62,  202 => 59,  198 => 58,  194 => 57,  190 => 56,  187 => 55,  183 => 54,  177 => 50,  173 => 49,  167 => 46,  165 => 45,  159 => 42,  154 => 41,  150 => 39,  148 => 38,  142 => 34,  137 => 32,  128 => 29,  124 => 28,  116 => 27,  112 => 26,  107 => 23,  101 => 20,  95 => 17,  82 => 15,  78 => 14,  69 => 9,  62 => 5,  58 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "setup/home/index.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\setup\\home\\index.twig");
    }
}
