<div class="col-md-6" >
<!-- style="padding: 0% 0% 1% 0%;" -->
<h5 class="mb-0 mt-0">Buscar paciente</h5>
<div class="relative input-group">
<input type="text" class="form-input form-control mdb-select md-form" placeholder="Buscar paciente" wire:model="query" wire:keydown.escape="resetear" wire:keydown.tab="resetear"/>
<div wire:loading class="buscador-dinamico absolute z-10 list-group bg-white rounded-t-none shadow-lg">
    <div class="list-item">Buscando..</div>
</div>
@if(!empty($query))
    <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="resetear"></div>
    <div class="buscador-dinamico absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
        @if(!empty($pacientes))
                @foreach($pacientes as $id => $paciente)
                <ul> 
                    <li>
                        <a href="{{ route('citas.paciente', ['id' => $paciente['id']]) }}"
                        > {{ $paciente['Nombre']}}  {{$paciente['ApellidoPaterno']}} {{$paciente['ApellidoMaterno']}}</a>
                    </li>
                </ul>
                @endforeach
            @else
                <div class="list-item"> No hay resultado
        @endif
    </div>
@endif
</div>
</div>