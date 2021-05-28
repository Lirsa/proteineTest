<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user   ->setEmail('true@test.com')
                ->setPassword('password')
                ->setPseudo('pseudo')
                ->setPrenom('prenom')
                ->setNom('nom');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getPseudo() === 'pseudo');
        $this->assertTrue($user->getPrenom() === 'prenom');
        $this->assertTrue($user->getNom() === 'nom');                
    }

    public function testIsFalse()
    {
        $user = new User();

        $user   ->setEmail('true@test.com')
                ->setPassword('password')
                ->setPseudo('pseudo')
                ->setPrenom('prenom')
                ->setNom('nom');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getPseudo() === 'false');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'false');                
    }

    public function testIsEmpty()
    {
        $user = new User();
        
        $user ->setPassword('');

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getPseudo());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getNom());                
    }

}
