<?php

namespace App\Livewire\Ruangan;

use App\Models\ruangan;
use Livewire\Component;
use Livewire\Attributes\Layout;

class RuanganIndex extends Component
{

    #[Layout('layouts.app')]

    public function delete($id)  {
        ruangan::find($id)->delete();
        session()->flash('sukses', 'Data Deleted');
    }

    public function render()
    {
        $ruangans = ruangan::all();
        return view('livewire.ruangan.ruangan-index',compact('ruangans'));
    }
}
