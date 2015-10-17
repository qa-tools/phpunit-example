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
		$this->selectByTagName->setValue('EUR');

		$this->inputByName->setValue('another user');

		// Need `getObject` to iterate over current collection in proxy and not a list of collection.
		foreach ( $this->selectCollection->getObject() as $select ) {
			$select->selectOption(/* ... */);
		}
	}
}
