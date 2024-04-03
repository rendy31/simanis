<?php

namespace App\Livewire\Ruangan;

use App\Models\gedung;
use App\Models\ruangan;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class RuanganCreate extends Component
{
    #[Validate('required|min:3')]
    public $namaRuangan;

    #[Validate('required')]
    public $gedung_id;

    public function save()
    {
        $this->validate();
        ruangan::create([
            // 'id' => $this->id,
            'namaRuangan' => $this->namaRuangan,
            'gedung_id' => $this->gedung_id,
        ]);
        
        session()->flash('sukses', 'Data Tersimpan');
        return $this->redirectRoute('ruangan.index',navigate:true);
    }

    #[Layout('layouts.app')]
    
    public function render()
    {
        $gedungs = gedung::all();
        return view('livewire.ruangan.ruangan-create',compact('gedungs'));
    }
}
