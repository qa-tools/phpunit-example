<?php

namespace tests\HtmlElements\designs;


use QATools\QATools\HtmlElements\Element\Select;
use QATools\QATools\HtmlElements\TypifiedPage;

abstract class DefaultDesign extends TypifiedPage {

	/**
	 * @var Select
	 * @find-by('name' => 'language')
	 */
	protected $language;

	/**
	 * @var Select
	 * @find-by('name' => 'currency')
	 * @element-name('Custom Element Name')
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
		$this->language->selectByText($language);
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
		$this->currency->selectByText($currency);
	}

}
