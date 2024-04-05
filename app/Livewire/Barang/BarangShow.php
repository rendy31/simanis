<?php

namespace App\Livewire\Barang;

use App\Models\barang;
use Livewire\Component;
use Livewire\Attributes\Layout;

class BarangShow extends Component
{
    
    public Barang $barang;


    #[Layout('layouts.app')]

    public function mount($id)  {
        $this->barang = barang::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.barang.barang-show');
    }
}
