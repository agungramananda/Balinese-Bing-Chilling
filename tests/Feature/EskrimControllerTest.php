<?php

namespace Tests\Feature;

use Database\Seeders\eskrimSeeder;
use Database\Seeders\flavorSeeder;
use Database\Seeders\sizeSeeder;
use Database\Seeders\toppingSeeder;
use Database\Seeders\typeSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EskrimControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->seed(flavorSeeder::class);
        $this->seed(sizeSeeder::class);
        $this->seed(toppingSeeder::class);
        $this->seed(typeSeeder::class);
        $this->seed(eskrimSeeder::class);
    }

    public function testHome(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
        $response->assertViewIs('home');
    }

    public function testAbout(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertViewIs('about');
    }

    public function testCatalog(): void
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/catalog');

        $response->assertStatus(200);
        $response->assertViewIs('catalog');
        $response->assertViewHas('eskrim');
        $response->assertViewHas('tipe');
        $response->assertViewHas('rasa');
        $response->assertViewHas('kosong',false);
    }

    public function testCatalogWithFilters(): void
    {
        $type = \App\Models\types::first();
        $flavor = \App\Models\flavors::first();

        $response = $this->get('/catalog?type=' . $type->id . '&flavor=' . $flavor->id);

        $response->assertStatus(200);
        $response->assertViewIs('catalog');
        $response->assertViewHas('eskrim');
        $response->assertViewHas('tipe');
        $response->assertViewHas('rasa');
        $response->assertViewHas('kosong', false);
    }
}
