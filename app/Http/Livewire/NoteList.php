<?php

namespace App\Http\Livewire;

use Faker\Generator;
use Livewire\Component;

class NoteList extends Component
{

    public $name;

    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.note-list');
    }

    public function changeName(Generator $generator)
    {
        $this->name = $generator->name;
    }
}
