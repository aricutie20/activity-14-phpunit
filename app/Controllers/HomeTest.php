<?php

namespace Tests\App\Controllers;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class HomeTest extends CIUnitTestCase
{
    use FeatureTestTrait; // ⚠️ SIGURADUHING NANDITO ITONG LINYANG ITO

    public function testHomePage()
    {
        $result = $this->get('/');
        $result->assertStatus(200);
    }
}