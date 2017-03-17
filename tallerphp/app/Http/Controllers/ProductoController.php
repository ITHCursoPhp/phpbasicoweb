<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        return redirect('producto');
    }

    public function storeAll(Request $request)
    {
        $producto = new Producto;
        $producto->create($request->all());
        return redirect('producto');
    }

    public function create()
    {
        return \View::make('new');
    }
}
