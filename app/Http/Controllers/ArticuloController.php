<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticuloController extends Controller
{
    public function index(){
        $articulos = DB::table('articulo')
                    ->join('marca', 'marca', '=', 'idMarca')
                    ->select('articulo.*', 'marca.descripcion as descmarca')
                    ->get();
                    
        return view('articulo.listado',compact('articulos'));
    }
}
