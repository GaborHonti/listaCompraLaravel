<?php

namespace App\Http\Controllers;
use App\Producto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{

    public function getIndex($categoria = null)
{
        if($categoria == null){
             $productos = Producto::all();
        return view('productos.index' , array('arrayProductos'=>$productos));
        } else {
            $productos = Producto::categoria($categoria)->get();
            return view('productos.index' , array('arrayProductos'=>$productos));
        }

}
public function getCategorias()
{
        $productos = Producto::all();
        return view('productos.categorias' , array('arrayProductos'=>$productos));
}
public function getCreate()
{
    return view('productos.create');
}
public function getShow($id)
{
    $producto = Producto::findOrFail($id);
    return view('productos.show', array('producto'=>$producto));
}
public function getEdit($id)
{
    $producto = Producto::findOrFail($id);
    return view('productos.edit', array('producto'=>$producto));
}

public function putEdit(Request $request)
{
    $producto = Producto::findOrFail($request->input('id'));
    $producto->nombre = $request->input('nombre');
    $producto->categoria = $request->input('categoria');
    if($request->exists('poster')) {
        $producto->imagen = Storage::disk('public')->putFile('imagen', $request->file('poster'));
    }
    $producto->save();

    return redirect(action('ProductoController@getShow', ['id' => $producto->id]));
}

public function putComprar(Request $request) {

    $producto = Producto::findOrFail($request->id);
    $producto->pendiente = !$producto->pendiente;
    $producto->save();

    return redirect()->action('ProductoController@getShow', ['id' => $request->id]);
}
}
