@extends('layouts.plantilla')

@section('title','Pérdidas insensibles')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center ">
        <div class="col-md-10 mb-5">
            <form class="form bg-light p-5 form-medic d-flex" action="" method="post">
                <div class="col-md-6">
                    <h3 class="text-center mb-4">Pérdidas Insensibles</h3>
                    <div class="form-group mb-4">
                        <label class="">Peso:</label><br>
                        <input type="text" id="pesoPerdidas" class="form-control focusGreen">
                    </div>

                    <div class="form-group mb-4">
                        <label class="">Horas:</label><br>
                        <input type="text" id="horasPerdidas" class="form-control focusGreen">
                    </div>
                    
                    <div class="form-group pt-3">
                        <input type="submit" name="submit" class="btn btnBg-medicina btn-block" value="Calcular">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <h3 class="text-center mb-4">Resultado</h3>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection