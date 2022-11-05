<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    protected $resource = 'producto';
    protected $redirectRoute = '/producto';
    protected $indexTitle = 'Tabla de productos';
    protected $createTitle = 'Nuevo producto';
    protected $editTitle = 'Editar producto';

    public function index()
    {
        $producto = Producto::all();
        $columnas = (new Producto())->getFillable();
        return view('table', [
            'title' => $this->indexTitle,
            'resource' => $this->resource,
            'columns' => $columnas,
            'models' => $producto
        ]);
    }

    
    public function create()
    {
        $columnas = (new Producto())->getFillable();
        return view('form', [
            'title' => $this->createTitle,
            'resource' => $this->resource,
            'columns' => $columnas
        ]);
    }

    
    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect($this->redirectRoute);
    }

    
    public function show(Producto $producto)
    {
        
    }

    
    public function edit(Producto $producto)
    {
        $columnas = $producto->getFillable();
        return view('form', [
            'title' => $this->editTitle,
            'resource' => $this->resource,
            'columns' => $columnas,
            'model' => $producto
        ]);
    }

    
    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all());
        return redirect($this->redirectRoute);
    }

    
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect($this->redirectRoute);
    }
}
