<?php
/**
 * Created by PhpStorm.
 * User: yvon
 * Date: 22/07/2019
 * Time: 19:22
 */

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomePageTest
{
    public function testShowHome()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}