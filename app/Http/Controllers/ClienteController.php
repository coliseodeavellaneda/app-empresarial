<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    protected $resource = 'cliente';
    protected $redirectRoute = '/cliente';
    protected $indexTitle = 'Tabla de clientes';
    protected $createTitle = 'Nuevo cliente';
    protected $editTitle = 'Editar cliente';

    public function index()
    {
        $clientes = Cliente::all();
        $columnas = (new Cliente())->getFillable();
        return view('table', [
            'title' => $this->indexTitle,
            'resource' => $this->resource,
            'columns' => $columnas,
            'models' => $clientes
        ]);
    }

    
    public function create()
    {
        $columnas = (new Cliente)->getFillable();
        return view('form', [
            'title' => $this->createTitle,
            'resource' => $this->resource,
            'columns' => $columnas
        ]);
    }

    
    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect($this->redirectRoute);
    }

    
    public function show(Cliente $cliente)
    {
        
    }

    
    public function edit(Cliente $cliente)
    {
        $columnas = $cliente->getFillable();
        return view('form', [
            'title' => $this->editTitle,
            'resource' => $this->resource,
            'columns' => $columnas,
            'model' => $cliente
        ]);
    }

    
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect($this->redirectRoute);
    }

    
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect($this->redirectRoute);
    }
}

