<?php

namespace tests\BEM;


use QATools\QATools\BEM\BEMPageFactory;
use QATools\QATools\PageObject\IPageFactory;

abstract class AbstractQAToolsTestCase extends \tests\AbstractQAToolsTestCase
{

	/**
	 * Creates page factory.
	 *
	 * @return IPageFactory
	 */
	protected function createPageFactory()
	{
		return new BEMPageFactory($this->getSession(), $this->getPageFactoryConfig());
	}

}
