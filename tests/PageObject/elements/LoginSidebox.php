<?php

namespace tests\PageObject\elements;


use QATools\QATools\PageObject\Element\AbstractElementContainer;
use QATools\QATools\PageObject\Element\WebElement;

class LoginSidebox extends AbstractElementContainer {

	/**
	 * @var WebElement
	 * @find-by('name' => 'u.login-sidebox[-2][UserLogin]')
	 */
	protected $username;

	/**
	 * @var WebElement
	 * @find-by('name' => 'u.login-sidebox[-2][UserPassword]')
	 */
	protected $password;

	/**
	 * @var WebElement
	 * @find-by('name' => 'events[u.login-sidebox][OnLogin]')
	 */
	protected $submitButton;

	/**
	 * @var WebElement
	 * @find-by('css' => '.login-error')
	 */
	protected $errorMessage;

	/**
	 * Tries to login a user.
	 *
	 * @param string $username Username.
	 * @param string $password Password.
	 *
	 * @return self
	 */
	public function login($username, $password)
	{
		$this->username->setValue($username);
		$this->password->setValue($password);
		$this->submitButton->click();

		return $this;
	}

	/**
	 * Returns error message after login (if any).
	 *
	 * @return string
	 */
	public function getErrorMessageText()
	{
		return $this->errorMessage->getText();
	}

}
