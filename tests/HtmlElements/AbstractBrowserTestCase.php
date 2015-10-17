<?php

namespace tests\HtmlElements;


use QATools\QATools\HtmlElements\TypifiedPageFactory;
use QATools\QATools\PageObject\IPageFactory;

abstract class AbstractBrowserTestCase extends \tests\AbstractBrowserTestCase
{

	/**
	 * Returns page factory.
	 *
	 * @return IPageFactory
	 */
	protected function getPageFactory()
	{
		return new TypifiedPageFactory($this->getSession(), $this->getPageFactoryConfig());
	}

}
