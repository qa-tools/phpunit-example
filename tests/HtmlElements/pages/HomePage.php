<?php

namespace tests\HtmlElements\pages;


use QATools\QATools\HtmlElements\TypifiedPage;
use QATools\QATools\PageObject\Element\WebElement;
use QATools\QATools\HtmlElements\Element\Select;
use QATools\QATools\HtmlElements\Element\Button;
use QATools\QATools\HtmlElements\Element\RadioGroup;

/**
 * @page-url('/HtmlElements/')
 */
class HomePage extends TypifiedPage {

	/**
	 *
	 * @var WebElement
	 * @find-by('name' => 'u.login-sidebox[-2][UserLogin]')
	 */
	protected $usernameInput;

	/**
	 *
	 * @var WebElement
	 * @find-by('css' => 'select[name="curr_iso"]')
	 */
	protected $currencyDropdown;

	/**
	 *
	 * @var Select
	 * @find-by('css' => 'select[name="language"]')
	 * @element-name('Custom Element Name')
	 */
	protected $languageDropdown;

	/**
	 *
	 * @var RadioGroup
	 * @find-by('css' => 'input[name="radio-name"][type="radio"]')
	 * @element-name('Custom Element Name')
	 */
	protected $radioGroup;

	/**
	 * Login Button
	 *
	 * @var Button
	 * @find-by('name' => 'events[u.login-sidebox][OnLogin]')
	 */
	protected $loginButton;

	/**
	 * Login Sidebox
	 *
	 * @var LoginSidebox
	 * @find-by('id' => 'login-sidebox')
	 */
	protected $loginSidebox;

	/**
	 * Sidebar
	 *
	 * @var Sidebar
	 */
	protected $sidebar;

	/**
	 * Name of the test
	 *
	 * @var string
	 */
	protected $myTest = '';

	public function examplePageMethod()
	{
//		$this->currencyDropdown->setValue('EUR');
		$this->languageDropdown->selectByVisibleText('Russian');

		// Need `getObject` to iterate over current collection in proxy and not a list of collection.
		foreach ( $this->radioGroup->getObject() as $radioButton ) {
			if ( $radioButton->isSelected() ) {
				echo 'yes';
			}
		}

		$this->radioGroup->selectButtonByValue(4);

		// inline login
		$this->usernameInput->setValue('user-a');
		$this->loginButton->click();

		// html block login
		$error_message = $this->loginSidebox->login('user-b', 'password-b')->getLoginErrorMessage();

		// nested html block login
		$error_message = $this->sidebar->login('user-b', 'password-b');

		// auto-generated name
		echo $this->sidebar->getName();

		// override name
		echo $this->loginSidebox->getName();
	}
}
