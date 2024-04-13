<?php

namespace App\Livewire\Kategori;

use App\Models\Kategori;
use Livewire\Component;
use Livewire\Attributes\Layout;

class KategoriIndex extends Component
{

    #[Layout('layouts.app')]

    public function delete($id)  {
        $kategori = kategori::findOrFail($id);

        // Periksa apakah kategori memiliki relasi di tabel Penempatan
        if ($kategori->barangs()->exists()) {
            // Jika memiliki relasi, tampilkan pesan gagal dihapus
            return redirect()->back()->with('gagal', 'kategori tidak dapat dihapus karena sudah digunakan, silakan cek di data barang');
        }

        Kategori::find($id)->delete();
        session()->flash('sukses', 'Data Deleted');
    }

    public function render()
    {
        $kategoris = Kategori::all();
        return view('livewire.kategori.kategori-index',compact('kategoris'));
    }
}
