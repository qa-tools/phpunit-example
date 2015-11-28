<?php

namespace tests\BEM\designs;


use QATools\QATools\BEM\BEMPage;
use QATools\QATools\BEM\Element\Block;

abstract class DefaultDesign extends BEMPage {

	/**
	 * @var Block
	 * @bem('block' => 'b-header')
	 */
	protected $header;

	/**
	 * Sets language.
	 *
	 * @param string $language Language.
	 *
	 * @return void
	 */
	public function setLanguage($language)
	{
		$this->header->getElement('language')->setValue($language);
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
		$this->header->getElement('currency')->setValue($currency);
	}

}
