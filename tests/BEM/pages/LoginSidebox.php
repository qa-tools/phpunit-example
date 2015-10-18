<?php

namespace tests\BEM\pages;


use QATools\QATools\BEM\Element\Block;
use QATools\QATools\BEM\Element\Element;

/**
 * @bem('block' => 'b-login')
 */
class LoginSidebox extends Block {

	/**
	 * @var Element
	 * @bem('element' => 'input-username')
	 */
	protected $username;

	/**
	 * @var Element
	 * @bem('element' => 'input-password', 'modificator' => array('color' => 'red'))
	 */
	protected $password;

	/**
	 * @var Element
	 * @bem('element' => 'btn-login')
	 */
	protected $loginButton;

	/**
	 * @var Element
	 * @bem('element' => 'error-msg')
	 */
	protected $loginErrorMessage;

	/**
	 * Tries to login a user
	 *
	 * @param string $username
	 * @param string $password
	 * @return LoginSidebox
	 */
	public function login($username, $password)
	{
		$this->username->getWrappedElement()->setValue($username);
		$this->password->getWrappedElement()->setValue($password);
		$this->loginButton->getWrappedElement()->click();

		return $this;
	}

	/**
	 * Returns error message after login
	 *
	 * @return string
	 */
	public function getLoginErrorMessage()
	{
		return $this->loginErrorMessage->getWrappedElement()->getText();
	}

}
