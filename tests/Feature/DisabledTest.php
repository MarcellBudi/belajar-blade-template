<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisabledTest extends TestCase
{
    public function testDisabled()
    {
        $this->view("disabled", ["name" => "Marcell"])
            ->assertDontSeeText("Marcell")
            ->assertSeeText('Hello {{ $name }}');
    }
}