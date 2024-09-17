<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ProgressBar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProgressBarTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ProgressBar::class)
            ->assertStatus(200);
    }
}
