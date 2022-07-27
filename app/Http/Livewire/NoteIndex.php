<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteIndex extends Component
{


//    public $notes;
//
//
//    public function mount()
//    {
//        $this->notes = Note::latest()->get();
//    }

    public function render()
    {
        return view('livewire.note-index', [
            'notes' => Note::latest()->get()
        ]);
    }
}
