<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    protected $resource = 'persona';
    protected $redirectRoute = '/persona';
    protected $indexTitle = 'Tabla de personal';
    protected $createTitle = 'Nueva persona';
    protected $editTitle = 'Editar persona';

    public function index()
    {
        $personas = Persona::all();
        $columnas = (new Persona)->getFillable();
        return view('table', [
            'title' => $this->indexTitle,
            'resource' => $this->resource,
            'columns' => $columnas,
            'models' => $personas
        ]);
    }

    
    public function create()
    {
        $columnas = (new Persona)->getFillable();
        return view('form', [
            'title' => $this->createTitle,
            'resource' => $this->resource,
            'columns' => $columnas
        ]);
    }

    
    public function store(Request $request)
    {
        Persona::create($request->all());
        return redirect($this->redirectRoute);
    }

    
    public function show(Persona $persona)
    {
        
    }

    
    public function edit(Persona $persona)
    {
        $columnas = $persona->getFillable();
        return view('form', [
            'title' => $this->editTitle,
            'resource' => $this->resource,
            'columns' => $columnas,
            'model' => $persona
        ]);
    }

    
    public function update(Request $request, Persona $persona)
    {
        $persona->update($request->all());
        return redirect($this->redirectRoute);
    }

    
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect($this->redirectRoute);
    }
}
