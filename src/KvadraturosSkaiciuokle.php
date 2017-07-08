<?php
/**
 * Created by PhpStorm.
 * User: mindaugas
 * Date: 7/7/17
 * Time: 6:16 PM
 */

namespace Fototapetai;


class KvadraturosSkaiciuokle {

	/**
	 * KvadraturosSkaiciuokle constructor.
	 */
	public function __construct() {
	}

	public function skaiciuoti( $x, $y ) {
		return $this->versti_I_Metrus( $x ) * $this->versti_I_Metrus($y);
	}

	/**
	 * @param int $cm
	 *
	 * @return int
	 */
	private function versti_I_Metrus( $cm ) {
		return ( $cm / 100 );
	}
}