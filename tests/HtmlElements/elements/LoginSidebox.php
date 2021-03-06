<?php

namespace tests\HtmlElements\elements;


use QATools\QATools\HtmlElements\Element\AbstractElementContainer;
use QATools\QATools\HtmlElements\Element\TextInput;
use QATools\QATools\HtmlElements\Element\Button;
use QATools\QATools\HtmlElements\Element\TextBlock;

/**
 * @element-name('default element name')
 */
class LoginSidebox extends AbstractElementContainer {

	/**
	 * @var TextInput
	 * @find-by('name' => 'u.login-sidebox[-2][UserLogin]')
	 */
	protected $username;

	/**
	 * @var TextInput
	 * @find-by('name' => 'u.login-sidebox[-2][UserPassword]')
	 */
	protected $password;

	/**
	 * @var Button
	 * @find-by('name' => 'events[u.login-sidebox][OnLogin]')
	 */
	protected $loginButton;

	/**
	 * @var TextBlock
	 * @find-by('css' => '.login-error')
	 */
	protected $loginErrorMessage;

	/**
	 * Tries to login a user
	 *
	 * @param string $username
	 * @param string $password
	 *
	 * @return self
	 */
	public function login($username, $password)
	{
		$this->username->sendKeys($username);
		$this->password->sendKeys($password);
		$this->loginButton->click();

		return $this;
	}

	/**
	 * Returns error message after login
	 *
	 * @return string
	 */
	public function getErrorMessageText()
	{
		return $this->loginErrorMessage->getText();
	}

}
