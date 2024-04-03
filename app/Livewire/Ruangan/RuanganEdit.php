<?php

namespace App\Livewire\Ruangan;

use App\Models\gedung;
use App\Models\ruangan;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class RuanganEdit extends Component
{
    #[Validate('required|min:3')]
    public $namaRuangan;

    #[Validate('required')]
    public $gedung_id;

    public $id;

    #[Layout('layouts.app')]

    public function mount($id)  {
        $this->id = $id;
        $ruangan = ruangan::find($id);

        $this->namaRuangan = $ruangan->namaRuangan;
        $this->gedung_id = $ruangan->gedung_id;
    }

    public function save()
    {
        $this->validate();
        ruangan::find($this->id)->update([
            'namaRuangan' => $this->namaRuangan,
            'gedung_id' => $this->gedung_id,
        ]);
        session()->flash('sukses', 'Data TerUpdate');
        return $this->redirectRoute('ruangan.index', navigate:true);
    }

    public function render()
    {
        $gedungs = gedung::all();
        return view('livewire.ruangan.ruangan-edit',compact('gedungs'));
    }
}
