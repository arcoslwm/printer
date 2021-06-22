<?php
include 'Printer.php';

use PHPUnit\Framework\TestCase;

class PrinterTest extends TestCase
{

    public function testGetOutput()
    {
        $p = new \Arcos\Main\Printer();


        $this->assertSame('Integraciones', $p->getOutput(15) );
        $this->assertSame('IT', $p->getOutput(25) );
        $this->assertSame('Falabella', $p->getOutput(9) );
    }

}

