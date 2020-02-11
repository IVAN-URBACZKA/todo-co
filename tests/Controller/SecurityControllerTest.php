<?php

namespace App\Tests\Controller;

use App\Controller\SecurityController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Functional test for the controllers defined inside SecurityController
 */
class SecurityControllerTest extends WebTestCase
{
    public function testLoginPage(){
        $client = static::createClient();
        $client->request('GET', '/login');
        $this->assertSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }

    public function testLogoutPage(){
        
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'jeanuser',
            'PHP_AUTH_PW' => 'azerty',
        ]);

        $client->request('GET', '/logout');
        $this->assertSame(Response::HTTP_FOUND, $client->getResponse()->getStatusCode());
        $client->followRedirect();
        $this->assertSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }
    
}