<?php

namespace tests\BEM\pages;


use QATools\QATools\BEM\BEMPage;
use QATools\QATools\BEM\Element\Element;

/**
 * @page-url('http://www.in-portal.com/index.html')
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

	public function examplePageMethod()
	{
		// html block login
		$error_message = $this->loginSidebox->login('user-b', 'password-b')->getLoginErrorMessage();
	}
}
