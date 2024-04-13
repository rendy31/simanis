<?php

namespace App\Livewire\Penempatan;

use App\Models\penempatan;
use Livewire\Component;
use Livewire\Attributes\Layout;

class PenempatanIndex extends Component
{
    public $page = 25;
    public $search = '';
    #[Layout('layouts.app')]

    public function delete($id)  {
        penempatan::find($id)->delete();
        session()->flash('sukses', 'Data Deleted');
    }

    
    
    public function render()
    {
        $penempatans = penempatan::search($this->search)->paginate($this->page);
        return view('livewire.penempatan.penempatan-index',compact('penempatans'));
    }
}
