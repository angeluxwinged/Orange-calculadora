@extends('layouts.plantilla')

@section('title','Cálculo de goteo')

@section('content')
    <h3 class="calc-goteo">Cálculo por goteo</h3>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10 mb-5">
                <form class="form bg-light p-5 form-medic d-flex" action="" method="post">
                    <div class="col-md-6">
                        <h3 class="text-center mb-4">Mililitro por Hora</h3>
                        <div class="form-group mb-4">
                            <label class="">Mililitros:</label><br>
                            <input type="text" id="ml" class="form-control focusGreen">
                        </div>

                        <div class="form-group mb-4">
                            <label class="">Horas:</label><br>
                            <input type="text" id="h" class="form-control focusGreen">
                        </div>
                        
                        <div class="form-group pt-3">
                            <input type="submit" name="submitMXH" class="btn btnBg-medicina btn-block" value="Calcular">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3 class="text-center mb-4">Resultado</h3>
                    </div>
                </form>

                <form class="form bg-light p-5 form-medic d-flex" action="" method="post">
                    <div class="col-md-6">
                        <h3 class="text-center mb-4">Gotas por Minuto</h3>
                        <div class="form-group mb-4">
                            <label class="">Mililitros:</label><br>
                            <input type="text" id="mlGotas" class="form-control focusGreen">
                        </div>

                        <div class="form-group mb-4">
                            <label class="">Horas:</label><br>
                            <input type="text" id="hGotas" class="form-control focusGreen">
                        </div>

                        <div class="form-group mb-4">
                            <label class="">Microgotero:</label><br>
                            <select class="select-medic form-select-lg focusGreen" id="constante">
                                <option value="1">Microgotero: 1</option>
                                <option value="3">Normogotero: 3 </option>
                                <option value="4">Macrogotero: 4</option>
                            </select>
                        </div>
                        
                        <div class="form-group pt-3">
                            <input type="submit" name="submitMXH" class="btn btnBg-medicina btn-block" value="Calcular">
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