<?php

namespace App\Livewire\Kategori;

use App\Models\Kategori;
use Livewire\Component;
use Livewire\Attributes\Layout;

class KategoriIndex extends Component
{

    #[Layout('layouts.app')]

    public function delete($id)  {
        Kategori::find($id)->delete();
        session()->flash('sukses', 'Data Deleted');
    }

    public function render()
    {
        $kategoris = Kategori::all();
        return view('livewire.kategori.kategori-index',compact('kategoris'));
    }
}
