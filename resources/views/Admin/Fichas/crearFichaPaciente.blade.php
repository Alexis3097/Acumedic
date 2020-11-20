@extends('Shared.masterAdmin')

@section('content')
<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Ficha de paciente</h4>
                           
                        </div>
                    </div>

                    <!-- content -->
                    <!-- row -->
            
                    <!-- products -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('ficha.create')}}" method="POST" class="needs-validation row" novalidate>
                                    @csrf
                                        <input type="hidden" name="IdPaciente" value="{{$paciente->id}}"> 
                                        <div class="form-group col-md-12">
                                            <h3 for="validationCustom01">Ficha de: <span>{{$paciente->NombreCompleto}}</span></h3>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="LugarResidencia">Lugar de residencia</label>
                                            <input type="text" class="form-control @error('LugarResidencia') is-invalid @enderror" id="LugarResidencia" name="LugarResidencia" required placeholder="Lugar de residencia">
                                            @error('LugarResidencia')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Direccion">Dirección</label>
                                            <input type="text" class="form-control @error('Direccion') is-invalid @enderror" id="Direccion" name="Direccion" required placeholder="Direccion actual">
                                            @error('Direccion')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Peso">Peso</label>
                                            <input type="text" class="form-control @error('Peso') is-invalid @enderror" id="Peso" name="Peso" required placeholder="Peso">
                                            @error('Peso')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Talla">Talla</label>
                                            <input type="text" class="form-control @error('Talla') is-invalid @enderror" id="Talla" name="Talla" required placeholder="Talla">
                                            @error('Talla')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="SPO2">SPO2</label>
                                            <input type="text" class="form-control @error('SPO2') is-invalid @enderror" id="SPO2" name="SPO2" required placeholder="Nivel de Saturación de oxígeno">
                                            @error('SPO2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="FC">FC</label>
                                            <input type="text" class="form-control @error('FC') is-invalid @enderror" id="FC" name="FC" required placeholder="Frecuencia respiratoria">
                                            @error('FC')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="FR">FR</label>
                                            <input type="text"class="form-control @error('FR') is-invalid @enderror" id="FR" name="FR" required placeholder="Factor reumatoide">
                                            @error('FR')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="TA">TA</label>
                                            <input type="text" class="form-control @error('TA') is-invalid @enderror" id="TA" name="TA" required placeholder="Tensión arterial">
                                            @error('TA')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Dextrosis">Dextrosis</label>
                                            <input type="text" class="form-control @error('Dextrosis') is-invalid @enderror" id="Dextrosis" name="Dextrosis" required placeholder="Dextrosis">
                                            @error('Dextrosis')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <button class="btn btn-danger" type="submit">Cancelar</button>
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                        </div>
                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->
                    <!-- stats + charts -->

                </div>
            </div> <!-- content -->
        </div>
@endsection
