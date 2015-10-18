<?php

namespace tests\BEM\pages;


use QATools\QATools\BEM\BEMPage;
use QATools\QATools\BEM\Element\Element;

/**
 * @page-url('/BEM/')
 */
class HomePage extends BEMPage {

	/**
	 * Login Sidebox
	 *
	 * @var LoginSidebox
	 * @bem('block' => 'b-login', 'modifier' => array('location' => 'sidebar'))
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
