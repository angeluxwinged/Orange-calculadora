<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    function index(){
        return view('inicio');
    }

    function medicina(){
        return view('medicina');
    }

    function IMC(){
        return view('medicina.dosis');
    }
}
