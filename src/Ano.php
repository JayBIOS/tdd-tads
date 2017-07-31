<?php

class Ano
{
	private $valor;

	function __construct($valor)
	{
		$this->valor = $valor;
	}

	function valor() {
		return $this->valor;
	}

	function bissexto() {
		if($this->valor % 4 == 0) {
			if($this->valor % 100 == 0 && $this->valor % 400 != 0) {
				return false;
			}
			return true;
		}
		return false;
	}
}

?>
