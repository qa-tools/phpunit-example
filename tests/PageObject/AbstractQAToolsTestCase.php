<?php

namespace tests\PageObject;


use QATools\QATools\PageObject\IPageFactory;
use QATools\QATools\PageObject\PageFactory;

abstract class AbstractQAToolsTestCase extends \tests\AbstractQAToolsTestCase
{

	/**
	 * Returns page factory.
	 *
	 * @return IPageFactory
	 */
	protected function getPageFactory()
	{
		return new PageFactory($this->getSession(), $this->getPageFactoryConfig());
	}

}
