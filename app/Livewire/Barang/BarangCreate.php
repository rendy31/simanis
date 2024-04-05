<?php

namespace App\Livewire\Barang;

use App\Models\barang;
use App\Models\Kategori;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class BarangCreate extends Component
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


    public function save()
    {
        $totalHarga = $this->hargaSatuan * $this->jlhBeli;
        $this->validate();
        barang::create([
            // 'id' => $this->id,
            'kategori_id' => $this->kategori_id,
            'namaBarang' => $this->namaBarang,
            'tglBeli' => $this->tglBeli,
            'jlhBeli' => $this->jlhBeli,
            'hargaSatuan' => $this->hargaSatuan,
            'totalHarga' => $totalHarga,
            'tempatBeli' => $this->tempatBeli,
            'asalBarang' => $this->asalBarang,
            'kepemilikan' => $this->kepemilikan,
        ]);
        
        session()->flash('sukses', 'Data Tersimpan');
        return $this->redirectRoute('barang.index',navigate:true);
    }

    #[Layout('layouts.app')]

    
    public function render()
    {
        $kategoris = Kategori::all();
        return view('livewire.barang.barang-create',compact('kategoris'));
    }
}
