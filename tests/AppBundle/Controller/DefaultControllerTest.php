<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }
    
    
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    
    public function testAddGuestBook()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/add-guest-book');

        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }
    
    public function testSignup()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/signup');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    public function testLogout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/logout');

        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }
}
