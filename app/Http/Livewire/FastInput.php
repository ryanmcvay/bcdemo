<?php

namespace App\Http\Livewire;

use App\Models\Disc;
use Livewire\Component;

class FastInput extends Component
{
    public $total = 500;
    public $eggs;
    public $eggNumber;
    public $isTooLarge = false;
    public $isFound = false;
    public $remainingEggs;

    public function messages()
    {
        return [
            'eggNumber.required' => 'The disc name is required',
            'eggNumber.unique' => 'The disc name must be unique',
        ];
    }
    
    public function mount()
    {
        $this->eggs = Disc::get();
        $this->remainingEggs = Disc::whereNull('found_at')->get();
    }

    public function render()
    {
        return view('livewire.fast-input');
    }

    public function store()
    {
        if ($this->eggNumber > $this->total) {
            $this->tooLarge = true;
            return;
        }

        $this->validate([
            'eggNumber' => 'required|exists:discs,id',
        ]);

        // $disc = new Disc();
        // $disc->name = $this->eggNumber;
        // $disc->save();

        $egg = Disc::where('id', $this->eggNumber)->first();

        if ($egg->weight) {
            $this->isFound = true;
            return;
        }

        $egg->weight = 1;
        $egg->save();

        $this->reset('eggNumber');
        $this->reset('isFound');
        $this->reset('isTooLarge');
        $this->mount();
    }
}
