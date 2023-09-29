<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\Consejo;

class CalculadoraController extends Controller
{
    function index(){
        return view('inicio');
    }

    function medicina(){
        return view('medicina');
    }

    function IMC(){
        return view('medicina.IMC');
    }
}
