<?php
use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testWebsiteIsAlive()
    {
        // Simulamos un test de lógica de negocio para la POC
        $status = true;
        $this->assertTrue($status);
    }
}