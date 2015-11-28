<?php

namespace tests\BEM\pages;


use tests\BEM\designs\DefaultDesign;
use tests\BEM\elements\LoginSidebox;

/**
 * @page-url('/')
 */
class HomePage extends DefaultDesign {

	/**
	 * Login Sidebox
	 *
	 * @var LoginSidebox
	 * @bem('block' => 'b-login', 'modificator' => array('location' => 'sidebar'))
	 */
	protected $loginSidebox;

	/**
	 * Name of the test
	 *
	 * @var string
	 */
	protected $myTest = '';

	/**
	 * Performs login using elements from sidebox.
	 *
	 * @param string $username Username.
	 * @param string $password Password.
	 *
	 * @return string
	 */
	public function loginViaSandbox($username, $password)
	{
		return $this->loginSidebox->login($username, $password)->getLoginErrorMessage();
	}

}
