<?php

namespace tests\BEM;


use QATools\QATools\BEM\BEMPageFactory;
use QATools\QATools\PageObject\IPageFactory;

abstract class AbstractQAToolsTestCase extends \tests\AbstractQAToolsTestCase
{

	/**
	 * Returns page factory.
	 *
	 * @return IPageFactory
	 */
	protected function getPageFactory()
	{
		return new BEMPageFactory($this->getSession(), $this->getPageFactoryConfig());
	}

}
