<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_unauthenticated_user_cannot_acces_products_page()
    {
        $response = $this->get('/products');

        $response->assertRedirect('login');
    }
}
