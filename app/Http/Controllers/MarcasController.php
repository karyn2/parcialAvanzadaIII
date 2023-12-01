<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index()
    {
        $marcas = DB::table('marca')->get();
        return view("marcas.listadoMarca", ['marca'=> $marcas]);
    }
}
