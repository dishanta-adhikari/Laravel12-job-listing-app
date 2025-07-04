<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_homepage_returns_successful_response_without_blade_components(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/');
        $response->assertOk();
        
    }
}
