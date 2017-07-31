<?php
include_once('../src/Ano.php');
use PHPUnit\Framework\TestCase;

class AnoTest extends TestCase
{
	public function testAnoInvalido() {
		$stub = new Ano(-1);
		
		$this->assertLessThan(0, $stub->valor());
	}

	public function testNaoDivisivelPorQuatro() {
		$stub = new Ano(1742);
		
		$this->assertFalse($stub->bissexto());
	}
	
	public function testDivisivelPorQuatroEPorCem() {
		$stub = new Ano(1500);
		
		$this->assertFalse($stub->bissexto());	
	}

	public function testDivisivelPorQuatroENaoPorCem() {
		$stub = new Ano(1996);

		$this->assertTrue($stub->bissexto());	
	}

	public function testDivisivelPorQuatroEDivisivelPorQuatrocentos() {
		$stub = new Ano(1600);
		
		$this->assertTrue($stub->bissexto());	
	}
}

?>
