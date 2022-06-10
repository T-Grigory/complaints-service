<?php

namespace Tests\Feature;

use Tests\TestCase;

class ComplaintControllerTest extends TestCase
{
    public function testIndex(): void
    {
        $this->get(route('complaints.index'))
             ->assertStatus(200);
    }

    public function testCreate(): void
    {
        $this->get(route('complaints.create'))
             ->assertStatus(200);
    }
}
