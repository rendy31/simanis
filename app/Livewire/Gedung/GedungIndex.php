<?php

namespace App\Livewire\Gedung;

use App\Models\gedung;
use Livewire\Attributes\Layout;
use Livewire\Component;

class GedungIndex extends Component
{
    #[Layout('layouts.app')]

    public function delete($id)  {
        $gedung = gedung::findOrFail($id);

        // Periksa apakah gedung memiliki relasi di tabel Penempatan
        if ($gedung->ruangans()->exists()) {
            // Jika memiliki relasi, tampilkan pesan gagal dihapus
            return redirect()->back()->with('gagal', 'gedung tidak dapat dihapus karena sudah memiliki ruangan, silakan cek di data ruangan');
        }

        gedung::find($id)->delete();
        session()->flash('sukses', 'Data Deleted');
    }

    public function render()
    {
        $gedungs = gedung::all();
        return view('livewire.gedung.gedung-index',compact('gedungs'));
    }
}
