<?php

namespace App\Http\Controllers\Vistas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class VistasController extends Controller
{
    Public function index()
    {
        return view('index');
    }

    Public function servicios()
    {
        return view('servicios');
    }
    Public function productos()
    {
        return view('productos');
    }

    Public function contacto()
    {
        return view('contacto');
    }
}

