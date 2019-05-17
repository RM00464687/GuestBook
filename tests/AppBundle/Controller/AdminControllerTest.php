<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/list');

        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }
    
    
    public function testLogout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/logout');

        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }
    
    
    public function testApprove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/approve');

        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }
    
    
    public function testRemove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/remove');

        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }
}
