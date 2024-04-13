<?php

namespace App\Livewire\Penempatan;

use Livewire\Component;
use App\Models\penempatan;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class PenempatanEdit extends Component
{
    #[Validate('required')]
    public $barang_id;

    #[Validate('required')]
    public $ruangan_id;

    #[Validate('required')]
    public $nomorUrut;

    #[Validate('required')]
    public $barcode;

    public $id;

    #[Layout('layouts.app')]

    public function mount($id)  {
        $this->id = $id;
        $penempatan = penempatan::find($id);

        $this->barang_id = $penempatan->barang_id;
        $this->ruangan_id = $penempatan->ruangan_id;
        $this->nomorUrut = $penempatan->nomorUrut;
        $this->barcode = $penempatan->barcode;
    }

    public function save()
    {
        $this->validate();
        penempatan::find($this->id)->update([
            'barang_id' => $this->barang_id,
            'ruangan_id' => $this->ruangan_id,
            'nomorUrut' => $this->nomorUrut,
            'barcode' => $this->barcode,
        ]);
        session()->flash('sukses', 'Data TerUpdate');
        return $this->redirectRoute('penempatan.index', navigate:true);
    }
    
    public function render()
    {
        return view('livewire.penempatan.penempatan-edit');
    }
}
