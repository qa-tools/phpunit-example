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
	 * @param string $language Language.
	 *
	 * @return void
	 */
	public function setLanguage($language)
	{
		$this->language->setValue($language);
	}

	/**
	 * Sets currency.
	 *
	 * @param string $currency Currency.
	 *
	 * @return void
	 */
	public function setCurrency($currency)
	{
		$this->currency->setValue($currency);
	}

}
