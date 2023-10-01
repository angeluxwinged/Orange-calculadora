@extends('layouts.plantilla')

@section('title','Cálculo de goteo')

@section('content')
    <h2>Cálculo por goteo</h2>
    <h3>Mililitro por hora</h3>
    <form action="">
        <input type="text" id="ml" placeholder="ml">
        <input type="text" id="h" placeholder="h">
        <button type="submit">Calcular</button>
    </form>

    <h3>Gotas por minuto</h3>
    <form action="">
        <input type="text" id="mlGotas" placeholder="ml">
        <input type="text" id="hGotas" placeholder="h">
        <select id="constante">
            <option value="1">Microgotero: 1</option>
            <option value="3">Normogotero: 3 </option>
            <option value="4">Macrogotero: 4</option>
        </select>
        <button type="submit">Calcular</button>
    </form>
@endsection