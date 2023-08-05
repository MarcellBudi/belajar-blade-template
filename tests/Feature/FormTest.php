<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Marcell",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("Marcell")
            ->assertDontSee("readonly");

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Marcell",
            "admin" => false
        ]])
            ->assertDontSee("checked")
            ->assertSee("Marcell")
            ->assertSee("readonly");
    }
}
