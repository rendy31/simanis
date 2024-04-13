<?php

namespace App\Livewire;

use App\Models\barang;
use App\Models\gedung;
use App\Models\ruangan;
use Livewire\Component;
use App\Models\penempatan;
use Livewire\Attributes\Layout;

class Home extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        $gedungs = gedung::count();
        $ruangans = ruangan::count();
        $barangs = barang::count();
        $penempatans = penempatan::count();
        return view('livewire.home',compact('gedungs','ruangans','barangs','penempatans'));
    }
}
