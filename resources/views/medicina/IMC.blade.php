@extends('layouts.plantilla')

@section('title','IMC')

@section('content')
    <h2>IMC</h2>
    <form action="">
        <input type="text" id="peso" placeholder="Peso">
        <input type="text" id="altura" placeholder="Altura">
        <button type="submit">Calcular</button>
    </form>
@endsection