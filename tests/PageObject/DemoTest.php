<?php

namespace tests\PageObject;


use tests\PageObject\pages\HomePage;

class DemoTest extends AbstractQAToolsTestCase
{

	public function testSuccessfulLogin()
	{
		$page = new HomePage($this->pageFactory);
		$page->open();

		$page->loginSidebox->login('username', 'password');

		$this->assertContains('Logout', $page->loginSidebox->getText());
	}

	public function testFailedLogin()
	{
		$page = new HomePage($this->pageFactory);
		$page->open();

		$page->loginSidebox->login('username', 'invalid-password');

		$this->assertEquals('Invalid username or password', $page->loginSidebox->getErrorMessageText());
	}

	public function testUsernamePopulation()
	{
		$page = new HomePage($this->pageFactory);
		$page->open();

		$this->assertEmpty($page->getUsername());
		$page->setUsername('example user');
		$this->assertEquals('example user', $page->getUsername());
	}

	public function testDropdownCount()
	{
		$page = new HomePage($this->pageFactory);
		$page->open();

		$this->assertCount(2, $page->getDropdowns());
	}

	public function testMassDropdownOperations()
	{
		$page = new HomePage($this->pageFactory);
		$page->open();

		$page->setLanguageId(1);
		$page->setCurrencyIso('EUR');

		foreach ( $page->getDropdowns() as $select ) {
			if ( $select->getAttribute('name') === 'language' ) {
				$this->assertEquals(1, $select->getValue());
			}
			elseif ( $select->getAttribute('name') === 'currency' ) {
				$this->assertEquals('EUR', $select->getValue());
			}
		}
	}

}
