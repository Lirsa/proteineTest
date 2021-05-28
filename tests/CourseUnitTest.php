<?php

namespace App\Tests;

use Datetime;
use App\Entity\Client;
use App\Entity\Course;
use App\Entity\Detail;
use App\Entity\Service;
use App\Entity\Passager;
use App\Entity\Chauffeur;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Constraints\Time;






class CourseUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $course = new Course();
        
        $chauffeur = new Chauffeur();
        $client = new Client();
        $passager = new Passager();

        $date = new Datetime();
        $time = new Datetime();

        $course ->setDateCourse($date)
                ->setVilleDepart('villeDepart')
                ->setHeureDepart($time)
                ->setVilleArrivee('villeArrivee')
                ->setHeureArrivee($time)
                ->setAllerRetour(true)
                ->setPrixCourse(10.10)
                ->setChauffeur($chauffeur)
                ->setClient($client)
                ->addPassager($passager);
                 
        $this->assertTrue($course->getDateCourse() === $date);
        $this->assertTrue($course->getVilleDepart() === 'villeDepart');
        $this->assertTrue($course->getHeureDepart() === $time);
        $this->assertTrue($course->getVilleArrivee() === 'villeArrivee');
        $this->assertTrue($course->getHeureArrivee() === $time);
        $this->assertTrue($course->getAllerRetour() === true);
        $this->assertTrue($course->getPrixCourse() == 10.10);
        $this->assertTrue($course->getChauffeur() === $chauffeur);
        $this->assertTrue($course->getClient() === $client);
        $this->assertContains($passager, $course->getPassagers());
        
    }

    public function testIsFalse()
    {
       $course = new Course();
        
        $chauffeur = new Chauffeur();
        $client = new Client();
        $passager = new Passager();
        
        $date = new Datetime();
        $time = new Datetime();

        $course ->setDateCourse($date)
                ->setVilleDepart('villeDepart')
                ->setHeureDepart($time)
                ->setVilleArrivee('villeArrivee')
                ->setHeureArrivee($time)
                ->setAllerRetour(true)
                ->setPrixCourse(10.10)
                ->setChauffeur($chauffeur)
                ->setClient($client)
                ->addPassager($passager);


        $this->assertFalse($course->getDateCourse() === new Datetime());
        $this->assertFalse($course->getVilleDepart() === 'false');
        $this->assertFalse($course->getHeureDepart() === new Datetime());
        $this->assertFalse($course->getVilleArrivee() === 'false');
        $this->assertFalse($course->getHeureArrivee() === new Datetime());
        $this->assertFalse($course->getAllerRetour() === false);
        $this->assertFalse($course->getPrixCourse() == 20.20);
        $this->assertFalse($course->getChauffeur() === new Chauffeur());
        $this->assertFalse($course->getClient() === new Client());
        $this->assertNotContains(new Passager(), $course->getPassagers());
    
    }

    public function testIsEmpty()
    {
        $course = new Course();
        
        $this->assertEmpty($course->getDateCourse());
        $this->assertEmpty($course->getVilleDepart());
        $this->assertEmpty($course->getHeureDepart());
        $this->assertEmpty($course->getVilleArrivee());
        $this->assertEmpty($course->getHeureArrivee());
        $this->assertEmpty($course->getAllerRetour());
        $this->assertEmpty($course->getPrixCourse());
        $this->assertEmpty($course->getChauffeur());
        $this->assertEmpty($course->getClient());
        $this->assertEmpty($course->getPassagers());

                     
    }
}
