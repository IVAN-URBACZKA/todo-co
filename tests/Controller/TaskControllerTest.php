<?php


namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Functional test for the controllers defined inside TaskController
 */
class TaskControllerTest extends WebTestCase
{
    public function testTasksPage()
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER'  => 'ivan',
            'PHP_AUTH_PW' => 'azerty',
        ]);
        
        $client->request('GET', '/tasks');

        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }

}