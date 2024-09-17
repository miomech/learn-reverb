<?php

namespace App\Livewire;

use Livewire\Component;

class ProgressBar extends Component
{

    public int $step = 1;

    public int $lowestStep = 1;

    public int $highestStep = 2;

    public array $progressPositions = [];

    public float $progress = 0;



    public function mount(int $lowestStep, int $highestStep)
    {
        $this->lowestStep = $lowestStep;
        $this->highestStep = $highestStep;
        $this->progressPositions = $this
            ->generateProgressStopsBasedOnSteps($this->lowestStep, $this->highestStep);
    }

    public function render()
    {
        return view('livewire.progress-bar');
    }

    public function decrement()
    {
        if ($this->step === $this->lowestStep) {
            return;
        }
        $this->progress = max(0, $this->getNewProgress($this->step -= 1));
    }

    public function increment()
    {
        if ($this->step === $this->highestStep) {
            return;
        }
        $this->progress = min(100, $this->getNewProgress($this->step += 1));
    }

    public function getNewProgress(int $step): float
    {
        return $this->progressPositions[$step];
    }

    private function generateProgressStopsBasedOnSteps(int $lowestStep, int $highestStep): array
    {
        $positions = [];

        // Calculate the fraction of a single step
        $singleFraction = (100 / ($highestStep));
        // Calculate the half of a single fraction
        $halfOfSingleFraction = $singleFraction / 2;

        // The first step will always be the leftmost position (0%)
        $positions[$lowestStep] = 0;

        // Itterate through the steps and calculate the position based on the number of steps
        for ($i = $lowestStep + 1; $i < $highestStep; $i++) {
            $progressToInsert = ($singleFraction * $i) - $halfOfSingleFraction;
            $positions[$i] = number_format($progressToInsert, 2);
        }

        // The last step will always be the rightmost position (100%)
        $positions[$highestStep] = 100;

        return $positions;
    }
}
