<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Tag;

class TagControllersTest extends TestCase
{
    use RefreshDatabase;

    public function testStore()
    {
       $this->post('tags', ['name' => 'PHP'])
       ->assertRedirect('/');

       $this->assertDatabaseHas('tags', ['name' => 'PHP']);

       $this->withoutExceptionHandling();

    }
}
