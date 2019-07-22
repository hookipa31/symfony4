<?php
/**
 * Created by PhpStorm.
 * User: yvon
 * Date: 22/07/2019
 * Time: 19:22
 */

namespace App\Tests;

use App\Controller\MainController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomePageTest extends WebTestCase
{
    public function testShowHome()
    {
        $client = static::createClient();

        $client->request('GET', '/home');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testTitle()
    {
        $client = static::createClient();

        $client->request('GET', '/home');

        $this->assertSelectorTextContains('html title', 'Hello ProductController !');
    }
}