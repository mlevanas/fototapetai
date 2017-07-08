<?php
/**
 * Created by PhpStorm.
 * User: mindaugas
 * Date: 7/7/17
 * Time: 1:18 PM
 */

namespace Fototapetai\Tests;

use Fototapetai\TapetuSkaiciuokle;
use PHPUnit\Framework\TestCase;

class KainosSkaiciuokleTest extends TestCase {

	/**
	 * @var TapetuSkaiciuokle $skaiciuokle
	 */
	private $skaiciuokle;

	function setUp() {
		parent::setUp();
	}

	/**
	 *
	 * @test
	 */
	function nenurodytaKvadratura_kaina0() {


		$sum = $this->calculateKaina( 45, 0 );

		$this->assertEquals( 0, $sum );
	}

	/**
	 *
	 * @test
	 */
	function kvadratura_1_kv_kainaTuributiTeisinga() {

		$sum = $this->calculateKaina( 45, 1 );

		$this->assertEquals( 45, $sum );
	}

	private function calculateKaina( $kvadratoKaina, $kvadratura ) {
		$this->skaiciuokle = new TapetuSkaiciuokle($kvadratura);

		return $this->skaiciuokle->calculate( $kvadratoKaina );
	}
}
