<?php

namespace App\Tests;

use App\Entity\Passager;
use PHPUnit\Framework\TestCase;

class PassagerUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $passager = new Passager();

        $passager->setNom('nom');
  
        $this->assertTrue($passager->getNom() === 'nom');
        
    }

    public function testIsFalse()
    {
        $passager = new Passager();

        $passager->setNom('nom');

        $this->assertFalse($passager->getNom() === 'false');
    }

    public function testIsEmpty()
    {
        $passager = new Passager();
        
        $this->assertEmpty($passager->getNom());
                     
    }
}
