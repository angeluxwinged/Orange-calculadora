@extends('layouts.plantilla')

@section('title','Medicina')

@section('content')
    <div class="banner-medicina">
        {{-- <select name="cars" id="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select> --}}

        <form>
            <div class="form-srch-medic">
                <input class="buscador-medicina" type="search" name="" placeholder="Buscar por formula o categoria...">
                <div class="btnSearch-medic">
                    <input class="sbmtSearch-medic" type="submit">
                </div>
            </div>
        </form>
    </div>

    <div class="container-medicina">
        <div class="row justify-content-center">
            <div class="col-md-offset-2 mx-4">
                <div class="text-center">
                    <div class="card-medicina">
                        <div class="icon"><img src="{{ asset('../resources/img/medicina/imc.png') }}" alt=""></div>
                        <h5>Índice de masa corporal</h5>
                        <p>Medicina clínica</p>
                        <a class="saber-mas" href="#">Saber más</a><br>
                        <div class="btnMedicard">
                            <a href="{{ route('medicina.IMC') }}">IMC</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-offset-2 mx-4">
                <div class="text-center">
                    <div class="card-medicina">
                        <div class="icon"><img src="{{ asset('../resources/img/medicina/eg.png') }}" alt=""></div>
                        <h5>Edad gestacional</h5>
                        <p>Obstetricia</p>
                        <a class="saber-mas" href="#">Saber más</a><br>
                        <div class="btnMedicard">
                            <a href="{{ route('medicina.IMC') }}">EG</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-offset-2 mx-4">
                <div class="text-center">
                    <div class="card-medicina">
                        <div class="icon"><img src="{{ asset('../resources/img/medicina/fpp.png') }}" alt=""></div>
                        <h5>Fecha probable del parto</h5>
                        <p>Obstetricia</p>
                        <a class="saber-mas" href="#">Saber más</a><br>
                        <div class="btnMedicard">
                            <a href="{{ route('medicina.IMC') }}">FPP</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-offset-2 mx-4">
                <div class="text-center">
                    <div class="card-medicina">
                        <div class="icon"><img src="{{ asset('../resources/img/medicina/cpg.png') }}" alt=""></div>
                        <h5>Cálculo por Goteo</h5>
                        <p>Farmacología Clínica</p>
                        <a class="saber-mas" href="#">Saber más</a><br>
                        <div class="btnMedicard">
                            <a href="{{ route('medicina.IMC') }}">CPG</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-offset-2 mx-4">
                <div class="text-center">
                    <div class="card-medicina">
                        <div class="icon"><img src="{{ asset('../resources/img/medicina/pi.png') }}" alt=""></div>
                        <h5>Pérdidas insensibles</h5>
                        <p>Fisiología Médica</p>
                        <a class="saber-mas" href="#">Saber más</a><br>
                        <div class="btnMedicard">
                            <a href="{{ route('medicina.IMC') }}">PI</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-offset-2 mx-4">
                <div class="text-center">
                    <div class="card-medicina">
                        <div class="icon"><img src="{{ asset('../resources/img/medicina/fp.png') }}" alt=""></div>
                        <h5>Fórmula de Parkland</h5>
                        <p>Quemaduras</p>
                        <a class="saber-mas" href="#">Saber más</a><br>
                        <div class="btnMedicard">
                            <a href="{{ route('medicina.IMC') }}">FP</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-offset-2 mx-4">
                <div class="text-center">
                    <div class="card-medicina">
                        <div class="icon"><img src="{{ asset('../resources/img/medicina/cd.png') }}" alt=""></div>
                        <h5>Cálculo de dosis</h5>
                        <p>Farmacología Clínica</p>
                        <a class="saber-mas" href="#">Saber más</a><br>
                        <div class="btnMedicard">
                            <a href="{{ route('medicina.IMC') }}">CD</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection