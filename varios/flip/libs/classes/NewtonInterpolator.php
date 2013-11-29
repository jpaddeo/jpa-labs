<?php
class InterpolacionDeNewton {
	protected $data;
	protected $polinomnio;
	
	public function __construct($pData) {
		
	}
}
class NewtonInterpolator {
	/**	@var		array		$data			Array of x and y values (Xi->Fi) */
	protected $data				= array();
	/**	@var		array		$polynomial		Polynomial coefficients */
	protected $polynomial		= array();

	/**
	 *	Sets Data.
	 *	@access		public
	 *	@param		array		$data			Array of x and y values (Xi->Fi)
	 *	@return		void
	 */
	public function setData( $data ) {
		$this->data	= $data;
	}

	/**
	 *	Build Polynomial for Interpolation.
	 *	@access		public
	 *	@return		void
	 */
	public function buildPolynomial() {
		$t		= array();
		$a		= array();
		$keys	= array_keys( $this->data );
		$values	= array_values( $this->data );
		for( $i=0; $i<count( $keys ); $i++ )
		{
			$t[$i]	= $values[$i];
			for( $j=$i-1; $j>=0; $j-- )
				$t[$j]	= ( $t[$j+1] - $t[$j] ) / ( $keys[$i] - $keys[$j] );
			$a[$i]	= $t[0];
		}
		$this->polynomial = array (
			"R" => array_reverse($t),
			"P" => $a
		);
	}

	public function obtenerCoeficientesPolinomio($tipo = "P") {
		return ($this->polynomial[$tipo]);
	}
	
	public function printPolynom($tipo) {
		
		echo "<pre>";
		var_dump($this->polynomial->$tipo);
	}
	
	public function imprimirPolinomio($tipo = "P") {
		$keys	= array_keys($this->data);
		if ($tipo == "R") {
			$keys	= array_reverse(array_keys($this->data));
		}
		$n	= count($keys);
		$p	= $this->polynomial[$tipo][$n-1];
		$res = $p;
		for($i=$n-2; $i>=0; $i--) {
			// TODO: REVIEW
			$res .= $this->polynomial[$tipo][$i] . "(x-" . $keys[$i] . ")" . (($this->polynomial[$tipo][$i] > 0) ? "+" : "-");
		}
		return $res;
	}
	
	/**
	 *	Interpolates for a specific x value and returns P(x).
	 *	@access		public
	 *	@param		double		$x				Value to interpolate for
	 *	@return		double
	 */
	public function interpolate($x, $tipo = "P") {
		$keys	= array_keys($this->data);
		if ($tipo == "R") {
			$keys	= array_reverse(array_keys($this->data));
		}
		$n	= count($keys);
		$p	= $this->polynomial[$tipo][$n-1];
		for($i=$n-2; $i>=0; $i--) {
			$p	= $p * ($x - $keys[$i]) + $this->polynomial[$tipo][$i];
		}
		return $p;
	}
}
?>