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
}

?>
