<?php

namespace App\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class KategoriEdit extends Component
{
    #[Validate('required|min:3')]
    public $namaKategori;

    public $id;

    #[Layout('layouts.app')]

    public function mount($id)  {
        $this->id = $id;
        $Kategori = Kategori::find($id);

        $this->namaKategori = $Kategori->namaKategori;
    }

    public function save()
    {
        $this->validate();
        Kategori::find($this->id)->update([
            'namaKategori' => $this->namaKategori,
        ]);
        session()->flash('sukses', 'Data TerUpdate');
        return $this->redirectRoute('kategori.index', navigate:true);
    }
    
    public function render()
    {
        return view('livewire.kategori.kategori-edit');
    }
}
