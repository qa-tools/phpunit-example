<?php

namespace tests\BEM;


use tests\BEM\pages\HomePage;

class DemoTest extends AbstractQAToolsTestCase
{

	public function testExample()
	{
		$homePage = new HomePage($this->pageFactory);
		$homePage->open();

		$homePage->setCurrency('EUR');

		$errorMessage = $homePage->loginViaSandbox('user-a', 'password-a');
	}

}
