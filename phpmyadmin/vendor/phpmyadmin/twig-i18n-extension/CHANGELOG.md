# Change Log

## [5.0.0] - 2025-01-08

* Drop support for Twig < 3.17.0
* Drop support for PHP 7.2, PHP 7.3, PHP 7.4, PHP 8.0 and PHP 8.1
* Fix Twig deprecations (#16, #17, #18)

## [4.1.3] - 2024-09-08

* Add support for Twig 3.13 (#15)

## [4.1.2] - 2024-08-31

* Add support for Twig 3.12 (#14)

## [4.1.1] - 2024-04-19

* Add support for Twig 3.9 (#12)

## [4.1.0] - 2023-09-12

* Drop support for PHP 7.1
* Add support for PHP 8.3

## [4.0.1] - 2021-06-10

* Fix TransNode constructor optional parameters

## [4.0.0] - 2021-02-25

* Add support for domain translation (#4)
* TransNode constructor signature changed, new $domain parameter `?Node $notes, ?Node $domain = null, int $lineno` (#4)
* TransNode constructor signature changed, new $context parameter `?AbstractExpression $count, ?Node $context = null, ?Node $notes` (#6)
* Add support for contexts in translations (#6)
* Add support for enabling `phpmyadmin/motranslator` or complex non php-gettext supported functions (#6)
* Add support for custom notes labels (#6)
* Make debug info disabled by default, `TransNode::$enableAddDebugInfo = true;` will add it back
* Some slight performance improvements
* Added tests for all the code

## [3.0.0] - 2020-06-14

* Add a .gitattributes file
* Support Twig 3
* Remove extra field from composer.json
* Add support field in composer.json
* Require php >= 7.1
* Setup and apply phpmyadmin/coding-standard
* Apply changes for php 8.0 compatibility (https://github.com/twigphp/Twig/issues/3327)

## 2.0.0 - 2020-01-14

* First release of this library.

[Unreleased]: https://github.com/phpmyadmin/twig-i18n-extension/compare/4.1.x...HEAD
[4.1.3]: https://github.com/phpmyadmin/twig-i18n-extension/compare/4.1.2...4.1.3
[4.1.2]: https://github.com/phpmyadmin/twig-i18n-extension/compare/4.1.1...4.1.2
[4.1.1]: https://github.com/phpmyadmin/twig-i18n-extension/compare/4.1.0...4.1.1
[4.1.0]: https://github.com/phpmyadmin/twig-i18n-extension/compare/v4.0.1...4.1.0
[4.0.1]: https://github.com/phpmyadmin/twig-i18n-extension/compare/v4.0.0...v4.0.1
[4.0.0]: https://github.com/phpmyadmin/twig-i18n-extension/compare/v3.0.0...v4.0.0
[3.0.0]: https://github.com/phpmyadmin/twig-i18n-extension/compare/v2.0.0...v3.0.0
