<?php


namespace App\Tests\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class HomeControllerTest extends WebTestCase
{
    public function testHomepageNotLoggedIn()
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $response = $client->getResponse();
        $this->assertSame(Response::HTTP_FOUND, $response->getStatusCode());
        $this->assertSame('http://localhost/login',$response->getTargetUrl());
    }

    public function testHomepageLoggedIn()
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'jeanuser',
            'PHP_AUTH_PW' => 'azerty',
        ]);
        
        $client->request('GET', '/');

        $this->assertSame(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }

}