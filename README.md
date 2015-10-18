# QA-Tools / PHPUnit Example

Example of using the [QA-Tools library](http://www.qa-tools.io) with [PHPUnit](https://phpunit.de/) and [Selenium](http://www.seleniumhq.org/).

## Asking Questions

Feel free to ask any questions and share your experiences in the [Chat Room](https://gitter.im/qa-tools/qa-tools) and help to improve the documentation.

## Usage

1. if "Selenium Standalone Server" isn't running do this to start it:
 * go to folder, where it was was downloaded previously (see [Installation](#installation))
 * execute this command: `java -jar selenium-server-standalone-X.Y.Z.jar` (replace `selenium-server-standalone-X.Y.Z.jar` with downloaded file name)
2. go to location of cloned repository
3. execute this command to run the tests: `./vendor/bin/phpunit`

## Installation

1. download "Selenium Standalone Server" from [http://www.seleniumhq.org/download/](http://www.seleniumhq.org/download/) url
2. clone this repository into `phpunit-example` sub-folder in the DocumentRoot of your Web Server
3. execute this command to install dependencies: `php composer.phar install`
4. confirm, that Example Application in `public` folder can be opened by going to the [http://localhost/phpunit-example/public/](http://localhost/phpunit-example/public/) url (replace `localhost` with your domain)

## Requirements

* [Java](https://java.com/download/)
* [Composer](https://getcomposer.org/download/)

## Contributing

See [CONTRIBUTING](CONTRIBUTING.md) file.

## License

QA-Tools / PHPUnit Example is released under the BSD-3-Clause License. See the bundled [LICENSE](LICENSE) file for details.
