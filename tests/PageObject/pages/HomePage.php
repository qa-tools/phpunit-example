<?php

namespace tests\PageObject\pages;


use QATools\QATools\PageObject\Element\WebElement;
use QATools\QATools\PageObject\Element\WebElementCollection;
use tests\PageObject\designs\DefaultDesign;
use tests\PageObject\elements\LoginSidebox;

/**
 * @page-url('/')
 */
class HomePage extends DefaultDesign {

	/**
	 * @var WebElement
	 * @find-by('name' => 'u.login-sidebox[-2][UserLogin]')
	 */
	protected $username;

	/**
	 * @var WebElementCollection
	 * @find-by('css' => 'select')
	 */
	protected $dropdowns;

	/**
	 * @var LoginSidebox
	 * @find-by('id' => 'login-sidebox')
	 */
	public $loginSidebox;

	/**
	 * Sets username in login sidebox.
	 *
	 * @param string $username Username.
	 *
	 * @return self
	 */
	public function setUsername($username)
	{
		$this->username->setValue($username);

		return $this;
	}

	/**
	 * Gets username from login form.
	 *
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username->getValue();
	}

	/**
	 * Returns dropdown elements on the page.
	 *
	 * @return WebElement[]
	 */
	public function getDropdowns()
	{
		// Need `getObject` to iterate over current collection in proxy and not a list of collection.
		return $this->dropdowns->getObject();
	}

}
