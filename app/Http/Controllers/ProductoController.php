<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function getIndex()
{
        return view('productos.index' , array('arrayProductos'=>$this->arrayProductos));
}
public function getCreate()
{
    return view('productos.create');
}
public function getShow($id)
{
    return view('productos.show', array('producto'=>$this->arrayProductos[$id]));
}
public function getEdit($id)
{
return view('productos.edit', array('id'=>$id));
}
}
