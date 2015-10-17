<?php

namespace tests\PageObject;


use tests\PageObject\pages\HomePage;

class DemoTest extends AbstractQAToolsTestCase
{

	public function testExample()
	{
		$homePage = new HomePage($this->pageFactory);
		$homePage->open();

		$homePage->setUsername('example user');

		$homePage->changeCurrency('EUR');

		foreach ( $homePage->getSelectCollection() as $select ) {
			$select->selectOption(/* ... */);
		}
	}
}
