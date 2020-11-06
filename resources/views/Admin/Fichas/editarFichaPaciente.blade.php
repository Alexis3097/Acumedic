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
                                    <form action="{{ route('ficha.update',['id'=>$ficha->id])}}" method="POST" class="needs-validation row" novalidate>
                                    @csrf
                                    @method('put')
                                        <input type="hidden" name="IdPaciente" value="{{$ficha->IdPaciente}}">
                                        <div class="form-group col-md-12">
                                            <h3 for="validationCustom01">Ficha de: <span>{{$ficha->paciente->NombreCompleto}}</span></h3>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="LugarResidencia">Lugar de residencia</label>
                                            <input type="text" class="form-control @error('LugarResidencia') is-invalid @enderror" id="LugarResidencia" name="LugarResidencia" value="{{$ficha->LugarResidencia}}" required>
                                            @error('LugarResidencia')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Direccion">Dirección</label>
                                            <input type="text" class="form-control @error('Direccion') is-invalid @enderror" id="Direccion" name="Direccion" value="{{$ficha->Direccion}}" required>
                                            @error('Direccion')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Peso">Peso</label>
                                            <input type="text" class="form-control @error('Peso') is-invalid @enderror" id="Peso" name="Peso" value="{{$ficha->Peso}}" required>
                                            @error('Peso')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Talla">Talla</label>
                                            <input type="text" class="form-control @error('Talla') is-invalid @enderror" id="Talla" name="Talla" value="{{$ficha->Talla}}" required>
                                            @error('Talla')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="SPO2">SPO2</label>
                                            <input type="text" class="form-control @error('SPO2') is-invalid @enderror" id="SPO2" name="SPO2" value="{{$ficha->SPO2}}" required>
                                            @error('SPO2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="FC">FC</label>
                                            <input type="text" class="form-control @error('FC') is-invalid @enderror" id="FC" name="FC" value="{{$ficha->FC}}" required>
                                            @error('FC')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="FR">FR</label>
                                            <input type="text"class="form-control @error('FR') is-invalid @enderror" id="FR" name="FR" value="{{$ficha->FR}}" required>
                                            @error('FR')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="TA">TA</label>
                                            <input type="text" class="form-control @error('TA') is-invalid @enderror" id="TA" name="TA" value="{{$ficha->TA}}" required>
                                            @error('TA')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Dextrosis">Dextrosis</label>
                                            <input type="text" class="form-control @error('Dextrosis') is-invalid @enderror" id="Dextrosis" name="Dextrosis" value="{{$ficha->Dextrosis}}" required>
                                            @error('Dextrosis')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <a href="{{route('ficha.list',['id'=>$ficha->IdPaciente])}}" class="btn btn-danger" type="submit">Cancelar</a>
                                            <button type="submit" class="btn btn-primary" type="submit">Guardar</button>
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

            

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            2019 &copy; Shreyu. All Rights Reserved. Crafted with <i class='uil uil-heart text-danger font-size-12'></i> by <a href="https://coderthemes.com" target="_blank">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>
@endsection
