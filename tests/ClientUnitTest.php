<?php

namespace App\Tests;

use App\Entity\Client;
use PHPUnit\Framework\TestCase;

class ClientUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $client = new Client();

        $client->setNom('nom');
  
        $this->assertTrue($client->getNom() === 'nom');
        
    }

    public function testIsFalse()
    {
        $client = new Client();

        $client->setNom('nom');

        $this->assertFalse($client->getNom() === 'false');
    }

    public function testIsEmpty()
    {
        $client = new Client();
        
        $this->assertEmpty($client->getNom());
                     
    }

}
