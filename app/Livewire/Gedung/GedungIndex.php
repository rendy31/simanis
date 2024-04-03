<?php

namespace App\Livewire\Gedung;

use App\Models\gedung;
use Livewire\Attributes\Layout;
use Livewire\Component;

class GedungIndex extends Component
{
    #[Layout('layouts.app')]

    public function delete($id)  {
        gedung::find($id)->delete();
        session()->flash('sukses', 'Data Deleted');
    }

    public function render()
    {
        $gedungs = gedung::all();
        return view('livewire.gedung.gedung-index',compact('gedungs'));
    }
}
