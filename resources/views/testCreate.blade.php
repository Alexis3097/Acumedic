@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="mb-0">{{ __('New Client') }}</h3>
                    </div>
                    <div>
                        <a href="{{ route('test') }}" class="btn btn-danger">
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
                            <input type="text" name="Nombre" id="Nombre" class="form-control @error('Nombre') is-invalid @enderror">
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
@endsection

