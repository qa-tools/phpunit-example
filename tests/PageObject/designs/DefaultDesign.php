<?php

namespace tests\PageObject\designs;


use QATools\QATools\PageObject\Page;
use QATools\QATools\PageObject\Element\WebElement;

abstract class DefaultDesign extends Page {

	/**
	 * @var WebElement
	 * @find-by('name' => 'language')
	 */
	protected $language;

	/**
	 * @var WebElement
	 * @find-by('name' => 'currency')
	 */
	protected $currency;

	/**
	 * Sets language.
	 *
	 * @param string $language_id Language ID.
	 *
	 * @return void
	 */
	public function setLanguageId($language_id)
	{
		$this->language->setValue($language_id);
	}

	/**
	 * Sets currency.
	 *
	 * @param string $currency_iso Currency ISO.
	 *
	 * @return void
	 */
	public function setCurrencyIso($currency_iso)
	{
		$this->currency->setValue($currency_iso);
	}

}
