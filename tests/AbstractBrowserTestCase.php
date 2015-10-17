<?php

namespace tests;


use aik099\PHPUnit\BrowserTestCase;
use QATools\QATools\PageObject\Config\Config;
use QATools\QATools\PageObject\IPageFactory;

abstract class AbstractBrowserTestCase extends BrowserTestCase
{

	public static $browsers = array(
		array(
			'alias' => 'default',
		),
	);

	/**
	 * Returns page factory.
	 *
	 * @return IPageFactory
	 */
	abstract protected function getPageFactory();

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
		if ( !array_key_exists('WEB_FIXTURE_HOST', $_SERVER) || !array_key_exists('WEB_FIXTURE_URL', $_SERVER) ) {
			throw new \LogicException(
				'Please define "WEB_FIXTURE_HOST" and "WEB_FIXTURE_URL" in your "phpunit.xml" file.'
			);
		}

		return array(
			'default' => array(
				'driver' => 'selenium2',
				'host' => $_SERVER['WEB_FIXTURE_HOST'],
				'port' => 4444,
				'browserName' => 'firefox',
				'baseUrl' => $_SERVER['WEB_FIXTURE_URL'],
			),
		);
	}
}
