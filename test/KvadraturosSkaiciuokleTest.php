<?php
/**
 * Created by PhpStorm.
 * User: mindaugas
 * Date: 7/7/17
 * Time: 6:12 PM
 */

namespace Fototapetai\Tests;


use Fototapetai\KvadraturosSkaiciuokle;
use PHPUnit\Framework\TestCase;

class KvadraturosSkaiciuokleTest extends TestCase {

	/**
	 * @var KvadraturosSkaiciuokle $skaiciuokle
	 */
	private $skaiciuokle;


	protected function setUp() {
		$this->skaiciuokle = new KvadraturosSkaiciuokle();
	}

	/**
	 *
	 * @test
	 */
	function skaiciuoti_100x100_turiGrazinti1() {

		$kvadratai = $this->skaiciuokle->skaiciuoti(100, 100);

		$this->assertEquals(1, $kvadratai);

	}

	/**
	 *
	 * @test
	 */
	function skaiciuoti_200x200_turiGrazinti4() {
		$kvadratai = $this->skaiciuokle->skaiciuoti(200, 200);
		$this->assertEquals(4, $kvadratai);
	}
}
