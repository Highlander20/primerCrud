<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    
    public function index()
    {
        //pagina de inicio
        $datos = Personas::all();
        return view('welcome', compact('datos'));
    }

    
    public function create()
    {
        //formulario donde agregamos datos

    }

    
    public function store(Request $request)
    {
        //guardar datos en la base de datos
    }

    
    public function show(Personas $personas)
    {
        //obtener registros de nuestra tabla
    }

    
    public function edit(Personas $personas)
    {
        //
    }

    
    public function update(Request $request, Personas $personas)
    {
        //
    }

    
    public function destroy(Personas $personas)
    {
        //
    }
}
