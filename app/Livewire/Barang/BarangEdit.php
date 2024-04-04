<?php

namespace App\Livewire\Barang;

use App\Models\barang;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class BarangEdit extends Component
{
    #[Validate('required')]
    public $kategori_id;

    #[Validate('required|min:3')]
    public $namaBarang;

    #[Validate('required')]
    public $tglBeli;

    #[Validate('required|numeric')]
    public $jlhBeli;

    #[Validate('required|numeric')]
    public $hargaSatuan;

    public $totalHarga;

    #[Validate('required|min:3')]
    public $tempatBeli;

    #[Validate('required|min:3')]
    public $asalBarang;
    
    #[Validate('required|min:3')]
    public $kepemilikan;

    public $id;

    #[Layout('layouts.app')]

    public function mount($id)  {
        $this->id = $id;
        $barang = barang::find($id);

        $this->kategori_id = $barang->kategori_id;
        $this->namaBarang = $barang->namaBarang;
        $this->tglBeli = $barang->tglBeli;
        $this->jlhBeli = $barang->jlhBeli;
        $this->hargaSatuan = $barang->hargaSatuan;
        $this->tempatBeli = $barang->tempatBeli;
        $this->asalBarang = $barang->asalBarang;
        $this->kepemilikan = $barang->kepemilikan;
    }

    public function save()
    {
        $totalHarga = $this->hargaSatuan * $this->jlhBeli;
        $this->validate();
        barang::find($this->id)->update([
            'kategori_id' => $this->kategori_id,
            'namaBarang' => $this->namaBarang,
            'tglBeli' => $this->tglBeli,
            'jlhBeli' => $this->jlhBeli,
            'hargaSatuan' => $this->hargaSatuan,
            'totalHarga' => $totalHarga,
            'tempatBeli' => $this->tempatBeli,
            'asalBarang' => $this->asalBarang,
            'asalBarang' => $this->asalBarang,
        ]);
        session()->flash('sukses', 'Data TerUpdate');
        return $this->redirectRoute('barang.index', navigate:true);
    }

    public function render()
    {
        return view('livewire.barang.barang-edit');
    }
}
