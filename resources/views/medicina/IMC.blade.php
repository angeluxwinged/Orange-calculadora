@extends('layouts.plantilla')

@section('title','IMC')

@section('content')
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
        <h2>IMC</h2>
        <form action="">
            <div class="mb-3">
                <label class="form-label">Peso</label><br>
                <span class="placeholder-text">Placeholder</span>
            <input type="text" id="peso" placeholder="Peso">
            </div>
            <div class="mb-3">
                <label class="form-label">Altura</label>
            <input type="text" id="altura" placeholder="Altura">
            </div>
            <button type="submit">Calcular</button>
        </form>
    <div class="mt-3 text-center" id="resultadoIMC">
        <!-- Aquí se mostrará el resultado -->
    </div>
</div>
</div>
</div>

@endsection