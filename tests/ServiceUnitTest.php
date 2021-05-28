<?php

namespace App\Tests;

use App\Entity\Service;
use PHPUnit\Framework\TestCase;

class ServiceUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $service = new Service();

        $service->setCode('co')
                ->setLibelle('libelle')
                ->setPrix(1.5);
              
        $this->assertTrue($service->getCode() === 'co');
        $this->assertTrue($service->getLibelle() === 'libelle');
        $this->assertTrue($service->getPrix() === 1.5);    
    }

    public function testIsFalse()
    {
        $service = new Service();

        $service->setCode('co')
                ->setLibelle('libelle')
                ->setPrix(1);

        $this->assertFalse($service->getCode() === 'fa');
        $this->assertFalse($service->getLibelle() === 'false');
        $this->assertFalse($service->getPrix() === 2);         
    }

    public function testIsEmpty()
    {
        $service = new Service();
        
        $this->assertEmpty($service->getCode());
        $this->assertEmpty($service->getLibelle());
        $this->assertEmpty($service->getPrix());
                     
    }
}
