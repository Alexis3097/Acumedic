<div>
   
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="relative">
            <input type="text" class="form-input" placeholder="buscando pacientes"
            wire:model="query"
            wire:keydown.escape="resetear"
            wire:keydown.tab="resetear"
            wire:keydown.ArrowUp="decrement"
            wire:keydown.ArrowDown="increment">

            <div wire:loading class="absolute z-10 list-group bg-white rounded-t-none shadow-lg">
                <div class="list-item">Buscando..</div>
            </div>    
            @if(!empty($query))
                <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="resetear"></div>
                <div class="absolute z-10 list-group bg-white rounded-t-none shadow-lg">
                    @if(!empty($contacts))
                        @foreach($contacts as $i => $paciente)
                            <!-- <a href="" ></a> -->
                            <ul>
                                <li class="list-item {{ $highlightIndex == $i ? 'bg-blue-100' : '' }} " wire:model="Id" wire:click="selectpaciente">{{ $paciente['Nombre']}}  {{$paciente['ApellidoPaterno']}} {{$paciente['ApellidoMaterno']}}</li>
                            </ul>
                        @endforeach
                    @else
                        <div class="list-item"> No hay resultado
                        
                    @endif
                </div>
            @endif
        </div> <br>
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="mb-0">{{ __('New Client') }}</h3>
                    </div>
                    <div>
                        <a href="" class="btn btn-danger">
                            {{ __('Cancel')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('paciente.store') }}" method="POST">
                    @csrf
                    <div class="form-group form-row">
                        <div class="col-md-6">
                            <label for="Nombre">{{ __('Nombre') }}</label>
                            <input type="text"  wire:model="Nombre" name="Nombre" id="Nombre" class="form-control @error('Nombre') is-invalid @enderror">
                            @error('Nombre')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="ApellidoPaterno">{{ __('Apellido Paterno') }}</label>
                            <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" class="form-control @error('ApellidoPaterno') is-invalid @enderror">
                            @error('ApellidoPaterno')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-6">
                            <label for="ApellidoMaterno">{{ __('Apellido Materno') }}</label>
                            <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" class="form-control @error('ApellidoMaterno') is-invalid @enderror">
                            @error('ApellidoMaterno')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="FechaNacimiento">{{ __('Fecha de naciemiento ') }}</label>
                            <input type="date" name="FechaNacimiento" id="FechaNacimiento" class="form-control @error('FechaNacimiento') is-invalid @enderror">
                            @error('FechaNacimiento')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-6">
                            <label for="Telefono">{{ __('Telefono') }}</label>
                            <input type="text" name="Telefono" id="Telefono" class="form-control @error('Telefono') is-invalid @enderror">
                            @error('Telefono')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg">{{ __('Crear') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
