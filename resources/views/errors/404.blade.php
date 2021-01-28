@extends('Shared.master')
@section('title', 'Acumedic - Inicio')
@section('content')
<main>              
    <section class="error404">
        <div class="col-12 text-center cont">
            <h3 class="mt-3">404 | NOT FOUND</h3>
            <p class="mb-5">UPPS! Parece que no se ha encontrado la página que buscas</p>
            <a href="{{ route('inicio')}}" style="border-radius:40px;" class="btn-1 mt-4">Quiero regresar</a>
        </div>
    </section>
</main>
@endsection