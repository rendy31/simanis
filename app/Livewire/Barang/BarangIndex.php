<?php

namespace App\Livewire\Barang;

use App\Models\barang;
use Livewire\Component;
use Livewire\Attributes\Layout;

class BarangIndex extends Component
{
    public $page = 25;
    public $search = '';
    #[Layout('layouts.app')]

    public function delete($id)  {
        $barang = Barang::findOrFail($id);

        // Periksa apakah barang memiliki relasi di tabel Penempatan
        if ($barang->penempatan()->exists()) {
            // Jika memiliki relasi, tampilkan pesan gagal dihapus
            return redirect()->back()->with('gagal', 'Barang tidak dapat dihapus karena sudah ditempatkan, silakan cek di data penempatan');
        }

        barang::find($id)->delete();
        session()->flash('sukses', 'Data Deleted');
    }
    
    public function render()
    {
        $barangs = barang::search($this->search)->paginate($this->page);
        return view('livewire.barang.barang-index',compact('barangs'));
    }
}
