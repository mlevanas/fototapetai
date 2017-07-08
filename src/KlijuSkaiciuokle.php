<?php
/**
 * Created by PhpStorm.
 * User: mindaugas
 * Date: 7/7/17
 * Time: 5:18 PM
 */

namespace Fototapetai;


class KlijuSkaiciuokle {

	private $kaina = 0;
	private $kvadrataiLitrui = 0;
	const PAPILDOMAS_VIENETAS = 1;

	/**
	 * KlijuSkaiciuokle constructor.
	 *
	 * @param float $kaina
	 * @param float $kvadrataiLitrui
	 */
	public function __construct($kaina, $kvadrataiLitrui) {
		$this->kaina = $kaina;
		$this->kvadrataiLitrui = $kvadrataiLitrui;
	}

	public function skaiciuotiKieki( $visoKvadratu ) {
		$reikiaVienetu = (int)( $visoKvadratu / $this->kvadrataiLitrui );
		if(($visoKvadratu % $this->kvadrataiLitrui) > 0)
			$reikiaVienetu += self::PAPILDOMAS_VIENETAS;
		return $reikiaVienetu;
	}

	public function calculate( $visoKvadratu ) {
		return $this->kaina * $this->skaiciuotiKieki($visoKvadratu);
	}
}