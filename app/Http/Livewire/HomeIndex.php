<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class HomeIndex extends Component
{
    use WithFileUploads;

    public $photo,$result;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:100000', // 1MB Max
        ]);

        $this->result = \OCR::scan($this->photo->getRealPath());
    }
    
    public function render()
    {
        return view('livewire.home-index');
    }
}
