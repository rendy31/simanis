<?php

namespace App\Livewire\Gedung;

use App\Models\gedung;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class GedungCreate extends Component
{
    // public $id;
    #[Validate('required|min:3')]
    public $namaGedung;

    public function save()
    {
        $this->validate();
        gedung::create([
            // 'id' => $this->id,
            'namaGedung' => $this->namaGedung,
        ]);
        
        session()->flash('sukses', 'Data Tersimpan');
        return $this->redirectRoute('gedung.index',navigate:true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.gedung.gedung-create');
    }
}
