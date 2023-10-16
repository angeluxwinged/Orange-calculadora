@extends('layouts.plantilla')

@section('title','Inicio')

@section('content')
<div class="container">
    <h2 class="text-center titulo-inicio">Cálculos Rápidos, Resultados Exactos</h2>
    <div class="row justify-content-center">
        <div class="col-md-offset-2 mx-2 opcion-menu">
            <a id="menuContent" href="{{ route('medicina') }}">
                <div class="card d-flex align-items-center justify-content-center">
                    <img src="{{ asset('dist/img/medicina-icon.png') }}" class="card-img-top">
                    <div class="card-body p-0">
                        <div class="text-center">
                            <h5 class="card-title">Calculos de Medicina</h5>
                        </div>
                    </div>
                </div>
            </a>
            
            <div id="menuInfo">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam molestias iste similique! At alias amet obcaecati iusto esse, animi soluta pariatur sunt mollitia fuga dolorum adipisci, quibusdam atque voluptates accusantium.</p>
            </div>

            <a id="mostrarMas" type="button">
                <img width="40px" src="{{ asset('dist/img/visible.png') }}">
            </a>
        </div>
        
    </div>
</div>

    <script>
        const mostrarMas = document.getElementById('mostrarMas');
        const menuInfo = document.getElementById('menuInfo');
        const menuContent = document.getElementById('menuContent');
        let mostrando = false;

        mostrarMas.addEventListener('click', () => {
            if (mostrando) {
                menuInfo.style.display = 'none';
                menuContent.style.display = 'flex';
            } else {
                menuInfo.style.display = 'flex';
                menuContent.style.display = 'none';
            }
            mostrando = !mostrando;
        });
    </script>
    
@endsection
