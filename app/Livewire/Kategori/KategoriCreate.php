<?php

namespace App\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class KategoriCreate extends Component
{
    #[Validate('required|min:3')]
    public $namaKategori;

    public function save()
    {
        $this->validate();
        Kategori::create([
            // 'id' => $this->id,
            'namaKategori' => $this->namaKategori,
        ]);
        
        session()->flash('sukses', 'Data Tersimpan');
        return $this->redirectRoute('kategori.index',navigate:true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.kategori.kategori-create');
    }
}
