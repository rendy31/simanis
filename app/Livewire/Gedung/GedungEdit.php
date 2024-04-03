<?php

namespace App\Livewire\Gedung;

use App\Models\gedung;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class GedungEdit extends Component
{
    #[Validate('required|min:3')]
    public $namaGedung;

    public $id;

    #[Layout('layouts.app')]

    public function mount($id)  {
        $this->id = $id;
        $gedung = gedung::find($id);

        $this->namaGedung = $gedung->namaGedung;
    }

    public function save()
    {
        $this->validate();
        gedung::find($this->id)->update([
            'namaGedung' => $this->namaGedung,
        ]);
        session()->flash('sukses', 'Data TerUpdate');
        return $this->redirectRoute('gedung.index', navigate:true);
    }


    public function render()
    {
        return view('livewire.gedung.gedung-edit');
    }
}
