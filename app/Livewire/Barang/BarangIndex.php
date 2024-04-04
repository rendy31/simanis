<?php

namespace App\Livewire\Barang;

use App\Models\barang;
use Livewire\Component;
use Livewire\Attributes\Layout;

class BarangIndex extends Component
{
    #[Layout('layouts.app')]

    public function delete($id)  {
        barang::find($id)->delete();
        session()->flash('sukses', 'Data Deleted');
    }
    
    public function render()
    {
        $barangs = barang::all();
        return view('livewire.barang.barang-index',compact('barangs'));
    }
}
