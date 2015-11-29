<?php

namespace tests\PageObject\elements;


use QATools\QATools\PageObject\Element\AbstractElementContainer;

/**
 * @find-by('id' => 'block-sidebar')
 */
class Sidebar extends AbstractElementContainer {

	/**
	 * Login Sidebox
	 *
	 * @var LoginSidebox
	 * @find-by('id' => 'login-sidebox')
	 */
	protected $loginSidebox;

	/**
	 * Tries to login a user
	 *
	 * @param string $username Username.
	 * @param string $password Password.
	 *
	 * @return string
	 */
	public function login($username, $password)
	{
		return $this->loginSidebox->login($username, $password)->getErrorMessageText();
	}

}
