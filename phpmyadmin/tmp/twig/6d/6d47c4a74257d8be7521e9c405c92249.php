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

/* relation/check_relations.twig */
class __TwigTemplate_8c5567ce6cefb5f1e0bd9a7676499afa extends Template
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
        yield "<div class=\"container\">
  <h1 class=\"my-3\">
    ";
yield _gettext("phpMyAdmin configuration storage");
        // line 4
        yield "    ";
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("setup", "phpmyadmin-configuration-storage");
        yield "
  </h1>

  ";
        // line 7
        if ((null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "db", [], "any", false, false, false, 7))) {
            // line 8
            yield "    <p>
      ";
yield _gettext("Configuration of pmadb…");
            // line 10
            yield "      <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
            yield "</strong></span>
      ";
            // line 11
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("setup", "phpmyadmin-configuration-storage");
            yield "
    </p>
    <p>
      ";
yield _gettext("General relation features");
            // line 15
            yield "      <span class=\"text-danger\">";
yield _gettext("Disabled");
            yield "</span>
    </p>
    ";
            // line 17
            if (($context["zero_conf"] ?? null)) {
                // line 18
                yield "      ";
                if ((($context["db"] ?? null) == "")) {
                    // line 19
                    yield "        ";
                    $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 20
                        yield "          ";
yield _gettext("%sCreate%s a database named '%s' and setup the phpMyAdmin configuration storage there.");
                        // line 21
                        yield "        ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 19
                    yield $this->env->getFilter('notice')->getCallable()(Twig\Extension\CoreExtension::sprintf($_v0, (((("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/check-relations")) . "\" data-post=\"") . PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "create_pmadb" => true, "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations")])) . "\">"), "</a>", ($context["config_storage_database_name"] ?? null)));
                    // line 22
                    yield "      ";
                } else {
                    // line 23
                    yield "        ";
                    $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 24
                        yield "          ";
yield _gettext("%sCreate%s the phpMyAdmin configuration storage in the current database.");
                        // line 25
                        yield "        ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 23
                    yield $this->env->getFilter('notice')->getCallable()(Twig\Extension\CoreExtension::sprintf($_v1, (((("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/check-relations")) . "\" data-post=\"") . PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "fixall_pmadb" => true, "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations")])) . "\">"), "</a>"));
                    // line 26
                    yield "      ";
                }
                // line 27
                yield "    ";
            }
            // line 28
            yield "  ";
        } else {
            // line 29
            yield "    ";
            if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "allworks", [], "any", false, false, false, 29) && ($context["zero_conf"] ?? null)) && ($context["are_config_storage_tables_defined"] ?? null))) {
                // line 30
                yield "      ";
                $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 31
                    yield "        ";
yield _gettext("%sCreate%s missing phpMyAdmin configuration storage tables.");
                    // line 32
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 30
                yield $this->env->getFilter('notice')->getCallable()(Twig\Extension\CoreExtension::sprintf($_v2, (((("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/check-relations")) . "\" data-post=\"") . PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "fix_pmadb" => true, "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations")])) . "\">"), "</a>"));
                // line 33
                yield "    ";
            }
            // line 34
            yield "
    <table class=\"table table-striped\">
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['pmadb']</code>
          ";
            // line 39
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_pmadb");
            yield "
        </th>
        <td class=\"text-end\">
          <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
            // line 42
            yield "</strong></span>
        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['relation']</code>
          ";
            // line 50
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_relation");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 53
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "relation", [], "any", false, false, false, 53))) {
                // line 54
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 56
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 58
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("General relation features:");
            // line 63
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "relwork", [], "any", false, false, false, 63)) {
                // line 64
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 66
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 68
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_info']</code>
          ";
            // line 75
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_table_info");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 78
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "table_info", [], "any", false, false, false, 78))) {
                // line 79
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 81
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 83
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Display features:");
            // line 88
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "displaywork", [], "any", false, false, false, 88)) {
                // line 89
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 91
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 93
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_coords']</code>
          ";
            // line 100
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_table_coords");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 103
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "table_coords", [], "any", false, false, false, 103))) {
                // line 104
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 106
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 108
            yield "        </td>
      </tr>
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['pdf_pages']</code>
          ";
            // line 113
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_pdf_pages");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 116
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "pdf_pages", [], "any", false, false, false, 116))) {
                // line 117
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 119
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 121
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Designer and creation of PDFs:");
            // line 126
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "pdfwork", [], "any", false, false, false, 126)) {
                // line 127
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 129
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 131
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['column_info']</code>
          ";
            // line 138
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_column_info");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 141
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "column_info", [], "any", false, false, false, 141))) {
                // line 142
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 144
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 146
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Displaying column comments:");
            // line 151
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "commwork", [], "any", false, false, false, 151)) {
                // line 152
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 154
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 156
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Browser transformation:");
            // line 161
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "mimework", [], "any", false, false, false, 161)) {
                // line 162
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 164
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 166
            yield "        </td>
      </tr>
      ";
            // line 168
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "commwork", [], "any", false, false, false, 168) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "mimework", [], "any", false, false, false, 168))) {
                // line 169
                yield "        <tr>
          <td colspan=\"2\" class=\"text-end\">
            <span class=\"text-danger\">
              ";
yield _gettext("Please see the documentation on how to update your column_info table.");
                // line 173
                yield "              ";
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_column_info");
                yield "
            </span>
          </td>
        </tr>
      ";
            }
            // line 178
            yield "      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['bookmarktable']</code>
          ";
            // line 183
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_bookmarktable");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 186
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "bookmark", [], "any", false, false, false, 186))) {
                // line 187
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 189
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 191
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Bookmarked SQL query:");
            // line 196
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "bookmarkwork", [], "any", false, false, false, 196)) {
                // line 197
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 199
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 201
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['history']</code>
          ";
            // line 208
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_history");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 211
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "history", [], "any", false, false, false, 211))) {
                // line 212
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 214
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 216
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("SQL history:");
            // line 221
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "historywork", [], "any", false, false, false, 221)) {
                // line 222
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 224
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 226
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['recent']</code>
          ";
            // line 233
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_recent");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 236
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "recent", [], "any", false, false, false, 236))) {
                // line 237
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 239
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 241
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Persistent recently used tables:");
            // line 246
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "recentwork", [], "any", false, false, false, 246)) {
                // line 247
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 249
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 251
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['favorite']</code>
          ";
            // line 258
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_favorite");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 261
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "favorite", [], "any", false, false, false, 261))) {
                // line 262
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 264
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 266
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Persistent favorite tables:");
            // line 271
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "favoritework", [], "any", false, false, false, 271)) {
                // line 272
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 274
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 276
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['table_uiprefs']</code>
          ";
            // line 283
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_table_uiprefs");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 286
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "table_uiprefs", [], "any", false, false, false, 286))) {
                // line 287
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 289
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 291
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Persistent tables' UI preferences:");
            // line 296
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "uiprefswork", [], "any", false, false, false, 296)) {
                // line 297
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 299
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 301
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['tracking']</code>
          ";
            // line 308
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_tracking");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 311
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "tracking", [], "any", false, false, false, 311))) {
                // line 312
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 314
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 316
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Tracking:");
            // line 321
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "trackingwork", [], "any", false, false, false, 321)) {
                // line 322
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 324
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 326
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['userconfig']</code>
          ";
            // line 333
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_userconfig");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 336
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "userconfig", [], "any", false, false, false, 336))) {
                // line 337
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 339
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 341
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("User preferences:");
            // line 346
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "userconfigwork", [], "any", false, false, false, 346)) {
                // line 347
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 349
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 351
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['users']</code>
          ";
            // line 358
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_users");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 361
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "users", [], "any", false, false, false, 361))) {
                // line 362
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 364
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 366
            yield "        </td>
      </tr>
      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['usergroups']</code>
          ";
            // line 371
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_usergroups");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 374
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "usergroups", [], "any", false, false, false, 374))) {
                // line 375
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 377
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 379
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Configurable menus:");
            // line 384
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "menuswork", [], "any", false, false, false, 384)) {
                // line 385
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 387
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 389
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['navigationhiding']</code>
          ";
            // line 396
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_navigationhiding");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 399
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "navigationhiding", [], "any", false, false, false, 399))) {
                // line 400
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 402
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 404
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Hide/show navigation items:");
            // line 409
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "navwork", [], "any", false, false, false, 409)) {
                // line 410
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 412
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 414
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['savedsearches']</code>
          ";
            // line 421
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_savedsearches");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 424
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "savedsearches", [], "any", false, false, false, 424))) {
                // line 425
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 427
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 429
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Saving Query-By-Example searches:");
            // line 434
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "savedsearcheswork", [], "any", false, false, false, 434)) {
                // line 435
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 437
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 439
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['central_columns']</code>
          ";
            // line 446
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_central_columns");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 449
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "central_columns", [], "any", false, false, false, 449))) {
                // line 450
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 452
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 454
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Managing central list of columns:");
            // line 459
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "centralcolumnswork", [], "any", false, false, false, 459)) {
                // line 460
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 462
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 464
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['designer_settings']</code>
          ";
            // line 471
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_designer_settings");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 474
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "designer_settings", [], "any", false, false, false, 474))) {
                // line 475
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 477
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 479
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Remembering designer settings:");
            // line 484
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "designersettingswork", [], "any", false, false, false, 484)) {
                // line 485
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 487
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 489
            yield "        </td>
      </tr>
      <tr><td colspan=\"2\">&nbsp;</td></tr>

      <tr>
        <th class=\"text-start\" scope=\"row\">
          <code>\$cfg['Servers'][\$i]['export_templates']</code>
          ";
            // line 496
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_export_templates");
            yield "
        </th>
        <td class=\"text-end\">
          ";
            // line 499
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "export_templates", [], "any", false, false, false, 499))) {
                // line 500
                yield "            <span class=\"text-success\"><strong>";
yield _pgettext("Correctly working", "OK");
                yield "</strong></span>
          ";
            } else {
                // line 502
                yield "            <span class=\"text-danger\"><strong>";
yield _gettext("not OK");
                yield "</strong></span>
          ";
            }
            // line 504
            yield "        </td>
      </tr>
      <tr>
        <td colspan=\"2\" class=\"text-end\">
          ";
yield _gettext("Saving export templates:");
            // line 509
            yield "          ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "exporttemplateswork", [], "any", false, false, false, 509)) {
                // line 510
                yield "            <span class=\"text-success\">";
yield _gettext("Enabled");
                yield "</span>
          ";
            } else {
                // line 512
                yield "            <span class=\"text-danger\">";
yield _gettext("Disabled");
                yield "</span>
          ";
            }
            // line 514
            yield "        </td>
      </tr>
    </table>

    ";
            // line 518
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "allworks", [], "any", false, false, false, 518)) {
                // line 519
                yield "      <p>";
yield _gettext("Quick steps to set up advanced features:");
                yield "</p>

      <ul>
        <li>
          ";
                // line 523
                yield Twig\Extension\CoreExtension::sprintf(_gettext("Create the needed tables with the <code>%screate_tables.sql</code>."), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sql_dir"] ?? null)));
                yield "
          ";
                // line 524
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("setup", "linked-tables");
                yield "
        </li>
        <li>
          ";
yield _gettext("Create a pma user and give access to these tables.");
                // line 528
                yield "          ";
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_controluser");
                yield "
        </li>
        <li>
          ";
yield _gettext("Enable advanced features in configuration file (<code>config.inc.php</code>), for example by starting from <code>config.sample.inc.php</code>.");
                // line 532
                yield "          ";
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("setup", "quick-install");
                yield "
        </li>
        <li>
          ";
yield _gettext("Re-login to phpMyAdmin to load the updated configuration file.");
                // line 536
                yield "        </li>
      </ul>
    ";
            }
            // line 539
            yield "  ";
        }
        // line 540
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "relation/check_relations.twig";
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
        return array (  1165 => 540,  1162 => 539,  1157 => 536,  1149 => 532,  1141 => 528,  1134 => 524,  1130 => 523,  1122 => 519,  1120 => 518,  1114 => 514,  1108 => 512,  1102 => 510,  1099 => 509,  1092 => 504,  1086 => 502,  1080 => 500,  1078 => 499,  1072 => 496,  1063 => 489,  1057 => 487,  1051 => 485,  1048 => 484,  1041 => 479,  1035 => 477,  1029 => 475,  1027 => 474,  1021 => 471,  1012 => 464,  1006 => 462,  1000 => 460,  997 => 459,  990 => 454,  984 => 452,  978 => 450,  976 => 449,  970 => 446,  961 => 439,  955 => 437,  949 => 435,  946 => 434,  939 => 429,  933 => 427,  927 => 425,  925 => 424,  919 => 421,  910 => 414,  904 => 412,  898 => 410,  895 => 409,  888 => 404,  882 => 402,  876 => 400,  874 => 399,  868 => 396,  859 => 389,  853 => 387,  847 => 385,  844 => 384,  837 => 379,  831 => 377,  825 => 375,  823 => 374,  817 => 371,  810 => 366,  804 => 364,  798 => 362,  796 => 361,  790 => 358,  781 => 351,  775 => 349,  769 => 347,  766 => 346,  759 => 341,  753 => 339,  747 => 337,  745 => 336,  739 => 333,  730 => 326,  724 => 324,  718 => 322,  715 => 321,  708 => 316,  702 => 314,  696 => 312,  694 => 311,  688 => 308,  679 => 301,  673 => 299,  667 => 297,  664 => 296,  657 => 291,  651 => 289,  645 => 287,  643 => 286,  637 => 283,  628 => 276,  622 => 274,  616 => 272,  613 => 271,  606 => 266,  600 => 264,  594 => 262,  592 => 261,  586 => 258,  577 => 251,  571 => 249,  565 => 247,  562 => 246,  555 => 241,  549 => 239,  543 => 237,  541 => 236,  535 => 233,  526 => 226,  520 => 224,  514 => 222,  511 => 221,  504 => 216,  498 => 214,  492 => 212,  490 => 211,  484 => 208,  475 => 201,  469 => 199,  463 => 197,  460 => 196,  453 => 191,  447 => 189,  441 => 187,  439 => 186,  433 => 183,  426 => 178,  417 => 173,  411 => 169,  409 => 168,  405 => 166,  399 => 164,  393 => 162,  390 => 161,  383 => 156,  377 => 154,  371 => 152,  368 => 151,  361 => 146,  355 => 144,  349 => 142,  347 => 141,  341 => 138,  332 => 131,  326 => 129,  320 => 127,  317 => 126,  310 => 121,  304 => 119,  298 => 117,  296 => 116,  290 => 113,  283 => 108,  277 => 106,  271 => 104,  269 => 103,  263 => 100,  254 => 93,  248 => 91,  242 => 89,  239 => 88,  232 => 83,  226 => 81,  220 => 79,  218 => 78,  212 => 75,  203 => 68,  197 => 66,  191 => 64,  188 => 63,  181 => 58,  175 => 56,  169 => 54,  167 => 53,  161 => 50,  151 => 42,  144 => 39,  137 => 34,  134 => 33,  132 => 30,  128 => 32,  125 => 31,  122 => 30,  119 => 29,  116 => 28,  113 => 27,  110 => 26,  108 => 23,  104 => 25,  101 => 24,  98 => 23,  95 => 22,  93 => 19,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  78 => 17,  72 => 15,  65 => 11,  60 => 10,  56 => 8,  54 => 7,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "relation/check_relations.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\relation\\check_relations.twig");
    }
}
