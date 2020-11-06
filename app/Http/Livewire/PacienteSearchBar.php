<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PacienteSearchBar extends Component
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
        //$this->highlightIndex = 0;
    }
    // public function incrementHighlight()
    // {
    //    if($this->highlightIndex== count($this->pacientes)-1)
    //    {
    //        $this->highlightIndex = 0;
    //        return;
    //    }
    //    $this->highlightIndex++;
    // }

    // public function decrementHighlight()
    // {
    //     if($this->highlightIndex== 0)
    //     {
    //         $this->highlightIndex = count($this->pacientes)-1;
    //         return;
    //     }
    //     $this->highlightIndex--;
    // }

    function updatedQuery()
    {
        $this->pacientes = Paciente::where('Nombre', 'like','%' . $this->query . '%')
                ->get()
                ->toArray();
    }
    
    public function render()
    {
        return view('livewire.paciente-search-bar');
    }
}
