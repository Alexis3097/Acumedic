<?php

namespace App\Http\Livewire;
use App\Models\Paciente;
use Livewire\Component;

class ContactSearchBar extends Component
{
    public $query;
    public $pacientes;  
    public $highlightIndex;   

    public function mount()
    {
        $this->resetear();
    }
    public function resetear()
    {
        $this->query='';
        $this->pacientes=[];
    }

    function updatedQuery()
    {
        $this->pacientes = Paciente::where('Nombre', 'like','%' . $this->query . '%')
                ->get()
                ->toArray();
    }
    public function render()
    {
        return view('livewire.contact-search-bar');
    }
 
}
