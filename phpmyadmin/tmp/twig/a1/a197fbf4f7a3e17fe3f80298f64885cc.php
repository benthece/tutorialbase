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

/* javascript/variables.twig */
class __TwigTemplate_e986a79e55e361d8ef747b2097ae77fb extends Template
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
        // line 2
        yield "var firstDayOfCalendar = '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["first_day_of_calendar"] ?? null), "js", null, true);
        yield "';
var themeImagePath = '";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath(), "js", null, true);
        yield "';
var mysqlDocTemplate = '";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::getMySQLDocuURL("%s"), "js", null, true);
        yield "';
var maxInputVars = ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_input_vars"] ?? null), "js", null, true);
        yield ";

";
        // line 7
        $context["show_month_after_year"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Month-year order for calendar, use either "calendar-month-year" or "calendar-year-month".
yield _gettext("calendar-month-year");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["year_suffix"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Year suffix for calendar, "none" is empty.
yield _gettext("none");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        yield "if (\$.datepicker) {
  \$.datepicker.regional[''].closeText = '";
        // line 15
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Display text for calendar close link
yield _gettext("Done");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v0, "js");
        yield "';
  \$.datepicker.regional[''].prevText = '";
        // line 16
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Previous month. Display text for previous month link in calendar
yield _gettext("Prev");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v1, "js");
        yield "';
  \$.datepicker.regional[''].nextText = '";
        // line 17
        $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Next month. Display text for next month link in calendar
yield _gettext("Next");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v2, "js");
        yield "';
  \$.datepicker.regional[''].currentText = '";
        // line 18
        $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Display text for current month link in calendar
yield _gettext("Today");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v3, "js");
        yield "';
  \$.datepicker.regional[''].monthNames = [
    '";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("January"), "js", null, true);
        yield "',
    '";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("February"), "js", null, true);
        yield "',
    '";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("March"), "js", null, true);
        yield "',
    '";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("April"), "js", null, true);
        yield "',
    '";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("May"), "js", null, true);
        yield "',
    '";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("June"), "js", null, true);
        yield "',
    '";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("July"), "js", null, true);
        yield "',
    '";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("August"), "js", null, true);
        yield "',
    '";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("September"), "js", null, true);
        yield "',
    '";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("October"), "js", null, true);
        yield "',
    '";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("November"), "js", null, true);
        yield "',
    '";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("December"), "js", null, true);
        yield "',
  ];
  \$.datepicker.regional[''].monthNamesShort = [
    '";
        // line 34
        $_v4 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for January
yield _gettext("Jan");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v4, "js");
        yield "',
    '";
        // line 35
        $_v5 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for February
yield _gettext("Feb");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v5, "js");
        yield "',
    '";
        // line 36
        $_v6 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for March
yield _gettext("Mar");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v6, "js");
        yield "',
    '";
        // line 37
        $_v7 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for April
yield _gettext("Apr");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v7, "js");
        yield "',
    '";
        // line 38
        $_v8 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for May
yield _gettext("May");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v8, "js");
        yield "',
    '";
        // line 39
        $_v9 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for June
yield _gettext("Jun");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v9, "js");
        yield "',
    '";
        // line 40
        $_v10 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for July
yield _gettext("Jul");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v10, "js");
        yield "',
    '";
        // line 41
        $_v11 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for August
yield _gettext("Aug");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v11, "js");
        yield "',
    '";
        // line 42
        $_v12 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for September
yield _gettext("Sep");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v12, "js");
        yield "',
    '";
        // line 43
        $_v13 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for October
yield _gettext("Oct");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v13, "js");
        yield "',
    '";
        // line 44
        $_v14 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for November
yield _gettext("Nov");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v14, "js");
        yield "',
    '";
        // line 45
        $_v15 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short month name for December
yield _gettext("Dec");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v15, "js");
        yield "',
  ];
  \$.datepicker.regional[''].dayNames = [
    '";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Sunday"), "js", null, true);
        yield "',
    '";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Monday"), "js", null, true);
        yield "',
    '";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Tuesday"), "js", null, true);
        yield "',
    '";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Wednesday"), "js", null, true);
        yield "',
    '";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Thursday"), "js", null, true);
        yield "',
    '";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Friday"), "js", null, true);
        yield "',
    '";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Saturday"), "js", null, true);
        yield "',
  ];
  \$.datepicker.regional[''].dayNamesShort = [
    '";
        // line 57
        $_v16 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short week day name for Sunday
yield _gettext("Sun");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v16, "js");
        yield "',
    '";
        // line 58
        $_v17 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short week day name for Monday
yield _gettext("Mon");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v17, "js");
        yield "',
    '";
        // line 59
        $_v18 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short week day name for Tuesday
yield _gettext("Tue");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v18, "js");
        yield "',
    '";
        // line 60
        $_v19 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short week day name for Wednesday
yield _gettext("Wed");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v19, "js");
        yield "',
    '";
        // line 61
        $_v20 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short week day name for Thursday
yield _gettext("Thu");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v20, "js");
        yield "',
    '";
        // line 62
        $_v21 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short week day name for Friday
yield _gettext("Fri");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v21, "js");
        yield "',
    '";
        // line 63
        $_v22 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Short week day name for Saturday
yield _gettext("Sat");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v22, "js");
        yield "',
  ];
  \$.datepicker.regional[''].dayNamesMin = [
    '";
        // line 66
        $_v23 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Minimal week day name for Sunday
yield _gettext("Su");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v23, "js");
        yield "',
    '";
        // line 67
        $_v24 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Minimal week day name for Monday
yield _gettext("Mo");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v24, "js");
        yield "',
    '";
        // line 68
        $_v25 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Minimal week day name for Tuesday
yield _gettext("Tu");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v25, "js");
        yield "',
    '";
        // line 69
        $_v26 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Minimal week day name for Wednesday
yield _gettext("We");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v26, "js");
        yield "',
    '";
        // line 70
        $_v27 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Minimal week day name for Thursday
yield _gettext("Th");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v27, "js");
        yield "',
    '";
        // line 71
        $_v28 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Minimal week day name for Friday
yield _gettext("Fr");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v28, "js");
        yield "',
    '";
        // line 72
        $_v29 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Minimal week day name for Saturday
yield _gettext("Sa");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v29, "js");
        yield "',
  ];
  \$.datepicker.regional[''].weekHeader = '";
        // line 74
        $_v30 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: Column header for week of the year in calendar
yield _gettext("Wk");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v30, "js");
        yield "';
  \$.datepicker.regional[''].showMonthAfterYear = ";
        // line 75
        yield (((($context["show_month_after_year"] ?? null) == "calendar-year-month")) ? ("true") : ("false"));
        yield ";
  \$.datepicker.regional[''].yearSuffix = '";
        // line 76
        yield (((($context["year_suffix"] ?? null) != "none")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["year_suffix"] ?? null), "js")) : (""));
        yield "';
  \$.extend(\$.datepicker._defaults, \$.datepicker.regional['']);
}

if (\$.timepicker) {
  \$.timepicker.regional[''].timeText = '";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Time"), "js", null, true);
        yield "';
  \$.timepicker.regional[''].hourText = '";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Hour"), "js", null, true);
        yield "';
  \$.timepicker.regional[''].minuteText = '";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Minute"), "js", null, true);
        yield "';
  \$.timepicker.regional[''].secondText = '";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Second"), "js", null, true);
        yield "';
  \$.extend(\$.timepicker._defaults, \$.timepicker.regional['']);
}

function extendingValidatorMessages () {
  \$.extend(\$.validator.messages, {
    required: '";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("This field is required"), "js", null, true);
        yield "',
    remote: '";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please fix this field"), "js", null, true);
        yield "',
    email: '";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a valid email address"), "js", null, true);
        yield "',
    url: '";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a valid URL"), "js", null, true);
        yield "',
    date: '";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a valid date"), "js", null, true);
        yield "',
    dateISO: '";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a valid date ( ISO )"), "js", null, true);
        yield "',
    number: '";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a valid number"), "js", null, true);
        yield "',
    creditcard: '";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a valid credit card number"), "js", null, true);
        yield "',
    digits: '";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter only digits"), "js", null, true);
        yield "',
    equalTo: '";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter the same value again"), "js", null, true);
        yield "',
    maxlength: \$.validator.format('";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter no more than {0} characters"), "js", null, true);
        yield "'),
    minlength: \$.validator.format('";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter at least {0} characters"), "js", null, true);
        yield "'),
    rangelength: \$.validator.format('";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a value between {0} and {1} characters long"), "js", null, true);
        yield "'),
    range: \$.validator.format('";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a value between {0} and {1}"), "js", null, true);
        yield "'),
    max: \$.validator.format('";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a value less than or equal to {0}"), "js", null, true);
        yield "'),
    min: \$.validator.format('";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a value greater than or equal to {0}"), "js", null, true);
        yield "'),
    validationFunctionForDateTime: \$.validator.format('";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a valid date or time"), "js", null, true);
        yield "'),
    validationFunctionForHex: \$.validator.format('";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Please enter a valid HEX input"), "js", null, true);
        yield "'),
    validationFunctionForMd5: \$.validator.format('";
        // line 108
        $_v31 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: To validate the usage of a MD5 function on the column
yield _gettext("This column can not contain a 32 chars value");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v31, "js");
        yield "'),
    validationFunctionForAesDesEncrypt: \$.validator.format('";
        // line 109
        $_v32 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
// l10n: To validate the usage of a AES_ENCRYPT/DES_ENCRYPT function on the column
yield _gettext("These functions are meant to return a binary result; to avoid inconsistent results you should store it in a BINARY, VARBINARY, or BLOB column.");
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v32, "js");
        yield "')
  });
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "javascript/variables.twig";
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
        return array (  554 => 109,  545 => 108,  541 => 107,  537 => 106,  533 => 105,  529 => 104,  525 => 103,  521 => 102,  517 => 101,  513 => 100,  509 => 99,  505 => 98,  501 => 97,  497 => 96,  493 => 95,  489 => 94,  485 => 93,  481 => 92,  477 => 91,  473 => 90,  464 => 84,  460 => 83,  456 => 82,  452 => 81,  444 => 76,  440 => 75,  431 => 74,  421 => 72,  412 => 71,  403 => 70,  394 => 69,  385 => 68,  376 => 67,  367 => 66,  356 => 63,  347 => 62,  338 => 61,  329 => 60,  320 => 59,  311 => 58,  302 => 57,  296 => 54,  292 => 53,  288 => 52,  284 => 51,  280 => 50,  276 => 49,  272 => 48,  261 => 45,  252 => 44,  243 => 43,  234 => 42,  225 => 41,  216 => 40,  207 => 39,  198 => 38,  189 => 37,  180 => 36,  171 => 35,  162 => 34,  156 => 31,  152 => 30,  148 => 29,  144 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  120 => 22,  116 => 21,  112 => 20,  102 => 18,  93 => 17,  84 => 16,  75 => 15,  72 => 14,  66 => 10,  60 => 7,  55 => 5,  51 => 4,  47 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "javascript/variables.twig", "C:\\Users\\helix\\Documents\\tutorialbase_save\\phpmyadmin\\templates\\javascript\\variables.twig");
    }
}
