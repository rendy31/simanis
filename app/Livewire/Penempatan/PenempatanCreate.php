<?php

namespace App\Livewire\Penempatan;

use App\Models\barang;
use App\Models\ruangan;
use Livewire\Component;
use App\Models\penempatan;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class PenempatanCreate extends Component
{
    #[Validate('required')]
    public $barang_id;

    #[Validate('required')]
    public $ruangan_id;

    #[Validate('required')]
    public $nomorUrut;

    // #[Validate('required')]
    // public $barcode;

    public function save()
    {

        //MENGAMBIL ID KATEGORI BARANG BERDASARKAN ID BARANG
        $kategoriId = barang::findOrFail($this->barang_id)->kategori_id;

        //MENGAMBIL JUMLAH PEMBELIAN BARANG BERDASARKAN ID BARANG
        $jlhPembelian = barang::findOrFail($this->barang_id)->jlhBeli;


        //MENGAMBIL JUMLAH TANGGAL PEMBELIAN BARANG BERDASARKAN ID BARANG
        $tglPembelian = date('m.y', strtotime(barang::findOrFail($this->barang_id)->tglBeli));

        //MENGAMBIL ID GEDUNG BERDASARKAN ID RUANGAN
        $gedungId = ruangan::findOrFail($this->ruangan_id)->gedung_id;

        //MEMBUAT BARCODE -> FORMAT : idGedung.idRuangan/kategoriBarang.idBarang/bulanBeli.tahunBeli/jumlahPembelian.nomorUrutBarang
        $barcode = $gedungId . "." . $this->ruangan_id . "/" . $kategoriId . "." . $this->barang_id . "/" . $tglPembelian . "/" . $jlhPembelian . "." . $this->nomorUrut;

        $noUrut = penempatan::where('nomorUrut',$this->nomorUrut)->where('barang_id',$this->barang_id)->first();
        // dd($noUrut);

       $this->validate();
        $countBarang = penempatan::where('barang_id', $this->barang_id)->count();
            if ($countBarang == $jlhPembelian) {
                // session()->flash('gagal', 'Barang tidak cukup, beli cuma '.$jlhPembelian.' koq mau ditaruh lebih dari '.$jlhPembelian.' tempat');
                return redirect()->back()->with('gagal', 'Jumlah Barang Tidak Cukup !, beli cuma '.$jlhPembelian.' koq mau ditaruh lebih dari '.$jlhPembelian.' tempat' );   
            } elseif($noUrut) {
                // session()->flash('gagal', 'Barang tidak cukup, beli cuma '.$jlhPembelian.' koq mau ditaruh lebih dari '.$jlhPembelian.' tempat');
                return redirect()->back()->with('gagal', 'Nomor Urut '.$this->nomorUrut.' untuk barang tersebut sudah digunakan, cek kembali' );
            } else {
                penempatan::create([
                    // 'id' => $this->id,
                    'barang_id' => $this->barang_id,
                    'ruangan_id' => $this->ruangan_id,
                    'nomorUrut' => $this->nomorUrut,
                    'barcode' => $barcode,
                ]);
                session()->flash('sukses', 'Data Tersimpan');
                return $this->redirectRoute('penempatan.index', navigate: true);
            }
            
    }

    #[Layout('layouts.app')]

    public function render()
    {
        $barangs = barang::all();
        $ruangans = ruangan::all();
        return view('livewire.penempatan.penempatan-create', compact('barangs', 'ruangans'));
    }
}
