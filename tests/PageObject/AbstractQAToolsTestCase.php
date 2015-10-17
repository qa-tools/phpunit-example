<?php

namespace tests\PageObject;


use QATools\QATools\PageObject\IPageFactory;
use QATools\QATools\PageObject\PageFactory;

abstract class AbstractQAToolsTestCase extends \QATools\PHPUnitExtension\AbstractQAToolsTestCase
{

	/**
	 * Creates page factory.
	 *
	 * @return IPageFactory
	 */
	protected function createPageFactory()
	{
		return new PageFactory($this->getSession(), $this->getPageFactoryConfig());
	}

}
