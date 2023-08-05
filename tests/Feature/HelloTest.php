<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
            ->assertSeeText("Marcell");
    }

    public function testHelloWorld()
    {
        $this->get("/world")
            ->assertSeeText("Marcell");
    }

    public function testHelloView()
    {
        $this->view("hello", ["name" => "Marcell"])
            ->assertSeeText("Marcell");
    }

    public function testHelloWorldView()
    {
        $this->view("hello.world", ["name" => "Marcell"])
            ->assertSeeText("Marcell");
    }
}
