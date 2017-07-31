<?php
include_once('../src/Ano.php');
use PHPUnit\Framework\TestCase;

class AnoTest extends TestCase
{
	public function testAnoInvalido() {
		$stub = $this->createMock(Ano::class);
		
		$stub->method('valor')->will($this->returnValue(-1));

		$this->assertLessThan(0, $stub->valor());
	}

	public function testNaoDivisivelPorQuatro() {
		$stub = $this->createMock(Ano::class);
		
		$stub->method('valor')->will($this->returnValue(1742));
		$stub->method('bissexto')->will($this->returnValue(false));

		$this->assertFalse($stub->bissexto());
	}
	
	public function testDivisivelPorQuatroEPorCem() {
		$stub = $this->createMock(Ano::class);
		
		$stub->method('valor')->will($this->returnValue(1500));
		$stub->method('bissexto')->will($this->returnValue(false));

		$this->assertFalse($stub->bissexto());	
	}

	public function testDivisivelPorQuatroENaoPorCem() {
		$stub = $this->createMock(Ano::class);
		
		$stub->method('valor')->will($this->returnValue(1996));
		$stub->method('bissexto')->will($this->returnValue(true));

		$this->assertTrue($stub->bissexto());	
	}
}

?>
