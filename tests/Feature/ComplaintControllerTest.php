<?php

namespace Tests\Feature;

use App\Models\Client;
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
        Client::factory(1)->create();
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
        $data = [
            'polyclinic_id' => Polyclinic::all()->random()->id,
            'reason_id' => ComplaintReason::all()->random()->id,
            'text' => 'text text text',
        ];
        $formData = [
            'phone' => '+7(923)-668-4539',
            'fullname' => 'Ivanov Ivan Petrovich',
            ...$data,
        ];

        $this->post(route('complaints.store', $formData))
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
