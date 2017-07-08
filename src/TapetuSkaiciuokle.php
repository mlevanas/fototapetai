<?php
/**
 * Created by PhpStorm.
 * User: mindaugas
 * Date: 7/7/17
 * Time: 1:26 PM
 */

namespace Fototapetai;


class TapetuSkaiciuokle {

	private $kvadratura = 0;

	function __construct($kvadratura) {
		$this->kvadratura = $kvadratura;
	}

	function calculate($kvadratoKaina)
	{
		return $this->kvadratura * $kvadratoKaina;
	}
}