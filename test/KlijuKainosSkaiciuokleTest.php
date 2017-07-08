<?php
/**
 * Created by PhpStorm.
 * User: mindaugas
 * Date: 7/7/17
 * Time: 5:05 PM
 */

namespace Fototapetai\Tests;


use Fototapetai\KlijuSkaiciuokle;
use PHPUnit\Framework\TestCase;

class KlijuKainosSkaiciuokleTest extends TestCase {

	/**
	 *
	 * @test
	 */
	function calulate_mod0_ShouldReturnDiv() {
		$kiekis = $this->skaiciuotiKlijuKieki(5.50, 5, 5);
		$this->assertEquals(1, $kiekis);
	}

	/**
	 * @test
	 */
	function calculate_Reikia2Vienetu_TuriGrazinti2(){
		$kiekis = $this->skaiciuotiKlijuKieki( 5.50, 5, 10 );
		$this->assertEquals(2, $kiekis);
	}

	/**
	 *
	 * @test
	 */
	function calculate_reikiaNepilnai_1_vieneto_TuriGrazinti1() {
		$kiekis = $this->skaiciuotiKlijuKieki(5.50, 5, 3);
		$this->assertEquals(1, $kiekis);
	}

	/**
	 *
	 * @test
	 */
	function calculate_reikiaDaugiauKaip_1_vieneto_TuriGrazinti2() {
		$kiekis = $this->skaiciuotiKlijuKieki(5.50, 5, 6);
		$this->assertEquals(2, $kiekis);
	}

	/**
	 *
	 * @test
	 */
	function calculate_skaiciaiSuKableliu_RezultataiTuriButiTeisingi() {
		$kiekis = $this->skaiciuotiKlijuKieki(5.50, 5.1, 6.2);
		$this->assertEquals(2, $kiekis);
	}

	/**
	 *
	 * @test
	 */
	function calculateKaina_nustatytaKaina_SumaTuriButiTeisinga() {
		$kaina = $this->skaiciuotiKaina(5.50, 5, 5);
		$this->assertEquals(5.50, $kaina);
	}

	/**
	 *
	 * @test
	 */
	function calculateKaina_10kvadratu_turiGrazinti11Euru() {
		$kaina = $this->skaiciuotiKaina(5.50, 5, 10);
		$this->assertEquals(11, $kaina);
	}

	/**
	 * @param float $kaina
	 * @param float $kvadrataiLitrui
	 * @param float $viso_kvadratu
	 *
	 * @return float|int
	 */
	private function skaiciuotiKlijuKieki( $kaina, $kvadrataiLitrui, $viso_kvadratu ) {
		$skaiciuokle = new KlijuSkaiciuokle($kaina, $kvadrataiLitrui);
		$kiekis = $skaiciuokle->skaiciuotiKieki( $viso_kvadratu );

		return $kiekis;
	}

	private function skaiciuotiKaina($vntKaina, $kvadrataiLitrui, $visoKvadratu)
	{
		$skaiciuokle = new KlijuSkaiciuokle($vntKaina, $kvadrataiLitrui);
	 	$suma = $skaiciuokle->calculate($visoKvadratu);
	 	return $suma;
	}
}