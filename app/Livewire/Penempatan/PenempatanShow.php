<?php

namespace App\Livewire\Penempatan;

use Livewire\Component;
use App\Models\penempatan;
use Livewire\Attributes\Layout;

class PenempatanShow extends Component
{
    public penempatan $penempatan;


    #[Layout('layouts.app')]

    public function mount($id)
    {
        

        $this->penempatan = penempatan::findOrFail($id);
    }

    public function render()
    {
        // Path gambar logo Anda
        $pathToLogo = public_path('assets/images/logostikes.png');
        $logoBase64 = base64_encode(file_get_contents($pathToLogo));

        return view('livewire.penempatan.penempatan-show',compact('pathToLogo'));
    }
}
