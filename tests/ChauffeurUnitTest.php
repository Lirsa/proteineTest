<?php

namespace App\Tests;

use App\Entity\Chauffeur;
use PHPUnit\Framework\TestCase;

class ChauffeurUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $chauffeur = new Chauffeur();

        $chauffeur->setNom('nom')
                  ->setCommuneStationnement('commune stationnement');
  
        $this->assertTrue($chauffeur->getNom() === 'nom');
        $this->assertTrue($chauffeur->getCommuneStationnement() === 'commune stationnement');
        
    }

    public function testIsFalse()
    {
        $chauffeur = new Chauffeur();

        $chauffeur->setNom('nom')
                  ->setCommuneStationnement('commune stationnement');

        $this->assertFalse($chauffeur->getNom() === 'false');
        $this->assertFalse($chauffeur->getCommuneStationnement() === 'false');
    }

    public function testIsEmpty()
    {
        $chauffeur = new Chauffeur();

        $this->assertEmpty($chauffeur->getNom());
        $this->assertEmpty($chauffeur->getCommuneStationnement());
                     
    }
}
