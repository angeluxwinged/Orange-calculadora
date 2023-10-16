@extends('layouts.plantilla')

@section('title','EG')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center ">
            <div class="col-md-10 mb-5">
                <form class="form bg-light p-5 form-medic d-flex" action="" method="post">
                    <div class="col-md-6">
                        <h3 class="text-center mb-4">Edad Gestional</h3>
                        <div class="form-group mb-4">
                            <label class="">Fecha Última de Menstruación:</label><br>
                            <input type="date" id="egFUM" class="form-control focusGreen">
                        </div>
                        
                        <div class="form-group pt-3">
                            <input type="submit" name="submitEG" class="btn btnBg-medicina btn-block" value="Calcular">
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