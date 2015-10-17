<?php

namespace tests\HtmlElements\pages;


use QATools\QATools\HtmlElements\Element\AbstractElementContainer;

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
	 * @param string $username
	 * @param string $password
	 * @return string
	 */
	public function login($username, $password)
	{
		return $this->loginSidebox->login($username, $password)->getLoginErrorMessage();
	}
}
