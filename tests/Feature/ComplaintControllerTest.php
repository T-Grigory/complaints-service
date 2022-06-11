<?php

namespace Tests\Feature;

use App\Models\Complaint;
use App\Models\ComplaintReason;
use App\Models\Polyclinic;
use Tests\TestCase;

class ComplaintControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Polyclinic::factory(10)->create();
        ComplaintReason::factory(10)->create();
    }
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

    public function testStore(): void
    {

        $data = Complaint::factory()->make()->toArray();

        $this->post(route('complaints.store', $data))
             ->assertRedirect(route('complaints.index'))
             ->assertSessionHasNoErrors();
        $this->assertDatabaseHas('complaints', $data);
    }

    public function testShow(): void
    {
        $complaint = Complaint::factory()->create();

        $this->get(route('complaints.show', $complaint))
             ->assertStatus(200);
    }
}
