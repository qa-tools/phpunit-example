<?php

namespace tests;


use aik099\PHPUnit\BrowserTestCase;
use QATools\QATools\HtmlElements\TypifiedPageFactory;
use QATools\QATools\PageObject\Config\Config;
use QATools\QATools\PageObject\IPageFactory;

abstract class AbstractQAToolsTestCase extends BrowserTestCase
{

	public static $browsers = array(
		array(
			'alias' => 'default',
		),
	);

	/**
	 * Page factory.
	 *
	 * @var IPageFactory
	 */
	protected $pageFactory;

	protected function setUp()
	{
		$this->pageFactory = $this->createPageFactory();

		parent::setUp();
	}

	/**
	 * Creates page factory.
	 *
	 * @return IPageFactory
	 */
	protected function createPageFactory()
	{
		return new TypifiedPageFactory($this->getSession(), $this->getPageFactoryConfig());
	}

	/**
	 * Returns config object to be used during PageFactory initialization.
	 *
	 * @return Config
	 */
	protected function getPageFactoryConfig()
	{
		return new Config(array(
			'base_url' => $this->getBrowser()->getBaseUrl(),
		));
	}

	/**
	 * Gets browser configuration aliases.
	 *
	 * Allows to decouple actual test server connection details from test cases.
	 *
	 * @return array
	 * @throws \LogicException When "phpunit.xml" isn't configured properly.
	 */
	public function getBrowserAliases()
	{
		if ( !array_key_exists('BROWSER_HOST', $_SERVER) || !array_key_exists('BROWSER_URL', $_SERVER) ) {
			throw new \LogicException(
				'Please define "WEB_FIXTURE_HOST" and "WEB_FIXTURE_URL" in your "phpunit.xml" file.'
			);
		}

		return array(
			'default' => array(
				'driver' => 'selenium2',
				'host' => $_SERVER['BROWSER_HOST'],
				'port' => 4444,
				'browserName' => 'firefox',
				'baseUrl' => $_SERVER['BROWSER_URL'],
			),
		);
	}
}
