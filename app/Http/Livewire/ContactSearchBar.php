<?php

namespace App\Http\Livewire;
use App\Models\Paciente;
use Livewire\Component;

class ContactSearchBar extends Component
{
    public $query;
    public $contacts;  
    public $highlightIndex;  
    public $Id;  
    public $Nombre;  
    public $ApellidoPaterno;  
    public $ApellidoMaterno;  

    public function mount()
    {
        $this->resetear();
    }
    public function resetear()
    {
        $this->query='';
        $this->Nombre='';
        $this->ApellidoPaterno='';
        $this->ApellidoMaterno='';
        $this->Id=0;
        $this->highlightIndex=0;
        $this->contacts=[];
    }
    public function increment()
    {
       if($this->highlightIndex== count($this->contacts)-1)
       {
           $this->highlightIndex = 0;
           return;
       }
       $this->highlightIndex++;
    }
    public function decrement()
    {
        if($this->highlightIndex== 0)
        {
            $this->highlightIndex = count($this->contacts)-1;
            return;
        }
        $this->highlightIndex--;
    }

    function updatedQuery()
    {
        //sleep(1);
        $this->contacts = Paciente::where('Nombre', 'like','%' . $this->query . '%')
                ->get()
                ->toArray();
    }
    public function render()
    {
        return view('livewire.contact-search-bar');
    }
    public function selectpaciente()
    {
        $this->Nombre ='alexis';
    }
}
