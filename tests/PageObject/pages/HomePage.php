<?php

namespace tests\PageObject\pages;


use QATools\QATools\PageObject\Element\WebElement;
use QATools\QATools\PageObject\Element\WebElementCollection;
use tests\PageObject\designs\DefaultDesign;

/**
 * @page-url('/')
 */
class HomePage extends DefaultDesign {

	/**
	 *
	 * @var WebElement
	 * @find-by('name' => 'u.login-sidebox[-2][UserLogin]')
	 */
	protected $inputByName;

	/**
	 *
	 * @var WebElementCollection
	 * @find-by('css' => 'select')
	 */
	protected $selectCollection;

	public function setUsername($username)
	{
		$this->inputByName->setValue($username);
	}

	/**
	 * Returns SELECT element collection.
	 *
	 * @return WebElementCollection
	 */
	public function getSelectCollection()
	{
		// Need `getObject` to iterate over current collection in proxy and not a list of collection.
		return $this->selectCollection->getObject();
	}

}
