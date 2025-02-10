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

/* server/privileges/users_overview.twig */
class __TwigTemplate_1ed1d51268bd521f5c58a0487c4a8dd2 extends Template
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
        yield "<form name=\"usersForm\" id=\"usersForm\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" method=\"post\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
  <div class=\"table-responsive\">
    <table id=\"userRightsTable\" class=\"table table-striped table-hover w-auto\">
      <thead>
        <tr>
          <th></th>
          <th scope=\"col\">";
yield _gettext("User name");
        // line 8
        yield "</th>
          <th scope=\"col\">";
yield _gettext("Host name");
        // line 9
        yield "</th>
          <th scope=\"col\">";
yield _gettext("Password");
        // line 10
        yield "</th>
          <th scope=\"col\">
            ";
yield _gettext("Global privileges");
        // line 13
        yield "            ";
        yield PhpMyAdmin\Html\Generator::showHint("Note: MySQL privilege names are expressed in English.");
        yield "
          </th>
          ";
        // line 15
        if (($context["menus_work"] ?? null)) {
            // line 16
            yield "            <th scope=\"col\">";
yield _gettext("User group");
            yield "</th>
          ";
        }
        // line 18
        yield "          <th scope=\"col\">";
yield _gettext("Grant");
        yield "</th>";
        // line 19
        $context["action_colspan"] = 2;
        // line 20
        if ((($context["user_group_count"] ?? null) > 0)) {
            $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
        }
        // line 21
        if (($context["has_account_locking"] ?? null)) {
            $context["action_colspan"] = (($context["action_colspan"] ?? null) + 1);
        }
        // line 22
        yield "          <th scope=\"col\" colspan=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action_colspan"] ?? null), "html", null, true);
        yield "\">";
yield _gettext("Action");
        yield "</th>
        </tr>
      </thead>

      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["hosts"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["host"]) {
            // line 28
            yield "          <tr>
            <td>
              <input type=\"checkbox\" class=\"checkall\" id=\"checkbox_sel_users_";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            yield "\" value=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 31) . "&amp;#27;") . CoreExtension::getAttribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 31)), "html", null, true);
            yield "\" name=\"selected_usr[]\">
            </td>
            <td>
              <label for=\"checkbox_sel_users_";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
            yield "\">
                ";
            // line 35
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 35))) {
                // line 36
                yield "                  <span class=\"text-danger\">";
yield _gettext("Any");
                yield "</span>
                ";
            } else {
                // line 38
                yield "                 <a class=\"edit_user_anchor\" href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                 // line 39
$context["host"], "user", [], "any", false, false, false, 39), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                 // line 40
$context["host"], "host", [], "any", false, false, false, 40), "dbname" => "", "tablename" => "", "routinename" => ""]);
                // line 44
                yield "\">
                 ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 45), "html", null, true);
                yield "
                 </a>
                ";
            }
            // line 48
            yield "              </label>
            </td>
            <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
            <td>
              ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, $context["host"], "has_password", [], "any", false, false, false, 52)) {
                // line 53
                yield "                ";
yield _gettext("Yes");
                // line 54
                yield "              ";
            } else {
                // line 55
                yield "                <span class=\"text-danger\">";
yield _gettext("No");
                yield "</span>
              ";
            }
            // line 57
            yield "              ";
            yield (( !CoreExtension::getAttribute($this->env, $this->source, $context["host"], "has_select_priv", [], "any", false, false, false, 57)) ? (PhpMyAdmin\Html\Generator::showHint(_gettext("The selected user was not found in the privilege table."))) : (""));
            yield "
            </td>
            <td>
              <code>";
            // line 60
            yield Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "privileges", [], "any", false, false, false, 60), ", ");
            yield "</code>
            </td>
            ";
            // line 62
            if (($context["menus_work"] ?? null)) {
                // line 63
                yield "              <td class=\"usrGroup\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "group", [], "any", false, false, false, 63), "html", null, true);
                yield "</td>
            ";
            }
            // line 65
            yield "            <td>";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["host"], "has_grant", [], "any", false, false, false, 65)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("No"), "html", null, true)));
            yield "</td>
            ";
            // line 66
            if (($context["is_grantuser"] ?? null)) {
                // line 67
                yield "              <td class=\"text-center\">
                <a class=\"edit_user_anchor\" href=\"";
                // line 68
                yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                 // line 69
$context["host"], "user", [], "any", false, false, false, 69), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["host"], "host", [], "any", false, false, false, 70), "dbname" => "", "tablename" => "", "routinename" => ""]);
                // line 74
                yield "\">
                  ";
                // line 75
                yield PhpMyAdmin\Html\Generator::getIcon("b_usredit", _gettext("Edit privileges"));
                yield "
                </a>
              </td>
            ";
            }
            // line 79
            yield "            ";
            if ((($context["menus_work"] ?? null) && (($context["user_group_count"] ?? null) > 0))) {
                // line 80
                yield "              <td class=\"text-center\">
                ";
                // line 81
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 81))) {
                    // line 82
                    yield "                  <button type=\"button\" class=\"btn btn-link p-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editUserGroupModal\" data-username=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 82), "html", null, true);
                    yield "\">
                    ";
                    // line 83
                    yield PhpMyAdmin\Html\Generator::getIcon("b_usrlist", _gettext("Edit user group"));
                    yield "
                  </button>
                ";
                }
                // line 86
                yield "              </td>
            ";
            }
            // line 88
            yield "            <td class=\"text-center\">
              <a class=\"export_user_anchor ajax\" href=\"";
            // line 89
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,             // line 90
$context["host"], "user", [], "any", false, false, false, 90), "hostname" => CoreExtension::getAttribute($this->env, $this->source,             // line 91
$context["host"], "host", [], "any", false, false, false, 91), "initial" =>             // line 92
($context["initial"] ?? null), "export" => true]);
            // line 94
            yield "\">
                ";
            // line 95
            yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", _gettext("Export"));
            yield "
              </a>
            </td>
            ";
            // line 98
            if (($context["has_account_locking"] ?? null)) {
                // line 99
                yield "              <td>
                <button type=\"button\" class=\"btn btn-link p-0 jsAccountLocking\" title=\"";
                // line 100
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Unlock this account."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Lock this account."), "html", null, true)));
                yield "\" data-is-locked=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 100)) ? ("true") : ("false"));
                yield "\" data-user-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "user", [], "any", false, false, false, 100), "html", null, true);
                yield "\" data-host-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["host"], "host", [], "any", false, false, false, 100), "html", null, true);
                yield "\">
                  ";
                // line 101
                if (CoreExtension::getAttribute($this->env, $this->source, $context["host"], "is_account_locked", [], "any", false, false, false, 101)) {
                    // line 102
                    yield "                    ";
                    $context["unlock_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
yield _pgettext("Unlock the account.", "Unlock");
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 103
                    yield "                    ";
                    yield PhpMyAdmin\Html\Generator::getIcon("s_unlock", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unlock_text"] ?? null)));
                    yield "
                  ";
                } else {
                    // line 105
                    yield "                    ";
                    $context["lock_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
yield _pgettext("Lock the account.", "Lock");
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 106
                    yield "                    ";
                    yield PhpMyAdmin\Html\Generator::getIcon("s_lock", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lock_text"] ?? null)));
                    yield "
                  ";
                }
                // line 108
                yield "                </button>
              </td>
            ";
            }
            // line 111
            yield "          </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "      </tbody>
    </table>
  </div>

  <div class=\"float-start row\">
    <div class=\"col-12\">
      <img class=\"selectallarrow\" width=\"38\" height=\"22\" src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath((("arrow_" . ($context["text_dir"] ?? null)) . ".png")), "html", null, true);
        yield "\" alt=\"";
yield _gettext("With selected:");
        yield "\">
      <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"";
yield _gettext("Check all");
        // line 121
        yield "\">
      <label for=\"usersForm_checkall\">";
yield _gettext("Check all");
        // line 122
        yield "</label>
      <em class=\"with-selected\">";
yield _gettext("With selected:");
        // line 123
        yield "</em>

      <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
yield _gettext("Export");
        // line 125
        yield "\">
        ";
        // line 126
        yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", _gettext("Export"));
        yield "
      </button>

      <input type=\"hidden\" name=\"initial\" value=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["initial"] ?? null), "html", null, true);
        yield "\">
    </div>
  </div>

  <div class=\"clearfloat\"></div>

  ";
        // line 135
        if (($context["is_createuser"] ?? null)) {
            // line 136
            yield "    <div class=\"card mb-3\">
      <div class=\"card-header\">";
yield _pgettext("Create new user", "New");
            // line 137
            yield "</div>
      <div class=\"card-body\">
        <a id=\"add_user_anchor\" href=\"";
            // line 139
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true]);
            yield "\">
          ";
            // line 140
            yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", _gettext("Add user account"));
            yield "
        </a>
      </div>
    </div>
  ";
        }
        // line 145
        yield "
  <div id=\"deleteUserCard\" class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 147
        yield PhpMyAdmin\Html\Generator::getIcon("b_usrdrop", _gettext("Remove selected user accounts"));
        yield "</div>
    <div class=\"card-body\">
      <p class=\"card-text\">";
yield _gettext("Revoke all active privileges from the users and delete them afterwards.");
        // line 149
        yield "</p>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" id=\"dropUsersDbCheckbox\" name=\"drop_users_db\">
        <label class=\"form-check-label\" for=\"dropUsersDbCheckbox\">
          ";
yield _gettext("Drop the databases that have the same names as the users.");
        // line 154
        yield "        </label>
      </div>
    </div>
    <div class=\"card-footer text-end\">
      <input type=\"hidden\" name=\"mode\" value=\"2\">
      <input id=\"buttonGo\" class=\"btn btn-primary ajax\" type=\"submit\" name=\"delete\" value=\"";
yield _gettext("Go");
        // line 159
        yield "\">
    </div>
  </div>
</form>

<div class=\"modal fade\" id=\"editUserGroupModal\" tabindex=\"-1\" aria-labelledby=\"editUserGroupModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"editUserGroupModalLabel\">";
yield _gettext("Edit user group");
        // line 168
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Close");
        // line 169
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"spinner-border\" role=\"status\">
          <span class=\"visually-hidden\">";
yield _gettext("Loading…");
        // line 173
        yield "</span>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
yield _gettext("Close");
        // line 177
        yield "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editUserGroupModalSaveButton\">";
yield _gettext("Save changes");
        // line 178
        yield "</button>
      </div>
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
        return "server/privileges/users_overview.twig";
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
        return array (  460 => 178,  456 => 177,  449 => 173,  442 => 169,  438 => 168,  426 => 159,  418 => 154,  411 => 149,  405 => 147,  401 => 145,  393 => 140,  389 => 139,  385 => 137,  381 => 136,  379 => 135,  370 => 129,  364 => 126,  361 => 125,  356 => 123,  352 => 122,  348 => 121,  341 => 120,  333 => 113,  318 => 111,  313 => 108,  307 => 106,  301 => 105,  295 => 103,  289 => 102,  287 => 101,  277 => 100,  274 => 99,  272 => 98,  266 => 95,  263 => 94,  261 => 92,  260 => 91,  259 => 90,  258 => 89,  255 => 88,  251 => 86,  245 => 83,  240 => 82,  238 => 81,  235 => 80,  232 => 79,  225 => 75,  222 => 74,  220 => 70,  219 => 69,  218 => 68,  215 => 67,  213 => 66,  208 => 65,  202 => 63,  200 => 62,  195 => 60,  188 => 57,  182 => 55,  179 => 54,  176 => 53,  174 => 52,  169 => 50,  165 => 48,  159 => 45,  156 => 44,  154 => 40,  153 => 39,  151 => 38,  145 => 36,  143 => 35,  139 => 34,  133 => 31,  130 => 30,  126 => 28,  109 => 27,  98 => 22,  94 => 21,  90 => 20,  88 => 19,  84 => 18,  78 => 16,  76 => 15,  70 => 13,  65 => 10,  61 => 9,  57 => 8,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "server/privileges/users_overview.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\server\\privileges\\users_overview.twig");
    }
}
