<?php

namespace tests\PageObject\pages;


use QATools\QATools\PageObject\Page;
use QATools\QATools\PageObject\Element\WebElement;
use QATools\QATools\PageObject\Element\WebElementCollection;

/**
 * @page-url('/PageObject/')
 */
class HomePage extends Page {

	/**
	 *
	 * @var WebElement
	 * @find-by('name' => 'u.login-sidebox[-2][UserLogin]')
	 */
	protected $inputByName;

	/**
	 *
	 * @var WebElement
	 * @find-by('css' => 'select[name="curr_iso"]')
	 */
	protected $selectByTagName;

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
	 * Changes currency.
	 *
	 * @param string $currency_code Currency code.
	 *
	 * @return void
	 */
	public function changeCurrency($currency_code)
	{
		$this->selectByTagName->setValue($currency_code);
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
