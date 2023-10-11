@extends('layouts.plantilla')

@section('title','Pérdidas insensibles')

@section('content')
    <h2>Pérdidas insensibles</h2>
    <form action="">
        <input type="text" id="pesoPerdidas" placeholder="Peso (kg)">
        <input type="text" id="horasPerdidas" placeholder="Horas">
        <button type="submit">Calcular</button>
    </form>

    <h2>Parkland</h2>
    <form action="">
        <input type="text" id="pesoParkland" placeholder="Peso (kg)">
        <input type="text" id="SCQ" placeholder="SCQ(%)">
        <button type="submit">Calcular</button>
    </form>
@endsection