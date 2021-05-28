<?php

namespace App\Tests;

use App\Entity\Detail;
use App\Entity\Course;
use App\Entity\Service;
use PHPUnit\Framework\TestCase;

class DetailUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $detail = new Detail();
        $course = new Course();
        $service = new Service();

        $detail->setCourse($course)
                ->setService($service)
                ->setQuantite(1);
              
        $this->assertTrue($detail->getCourse() === $course);
        $this->assertTrue($detail->getService() === $service);
        $this->assertTrue($detail->getQuantite() === 1);    
    }

    public function testIsFalse()
    {
        $detail = new Detail();
        $course = new Course();
        $service = new Service();

        $detail->setCourse($course)
                ->setService($service)
                ->setQuantite(1);

        $this->assertFalse($detail->getCourse() === 'false');
        $this->assertFalse($detail->getService() === 'false');
        $this->assertFalse($detail->getQuantite() === 2);         
    }

    public function testIsEmpty()
    {
        $detail = new Detail();
        
        $this->assertEmpty($detail->getCourse());
        $this->assertEmpty($detail->getService());
        $this->assertEmpty($detail->getQuantite());
                     
    }
}
