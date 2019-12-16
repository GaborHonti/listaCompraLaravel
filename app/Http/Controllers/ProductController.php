<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index' , array('arrayProductos'=>$productos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->input('title');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('poster');
        $producto->pendiente = false;
        $producto->save();
        return redirect(action('ProductController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    //action="{{ action('ProductoController@putComprar') }}"
    public function show(Producto $product)
    {
        return view('productos.show', array('producto'=>$product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    //action="{{ action('ProductoController@putEdit') }}"
    public function edit(Producto $product)
    {
        return view('productos.edit', array('producto'=>$product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $product)
    {
    $product->nombre = $request->input('nombre');
    $product->categoria = $request->input('categoria');
    if($request->exists('poster')) {
        $product->imagen = Storage::disk('public')->putFile('imagen', $request->file('poster'));
    }
    $product->save();

    return redirect(action('ProductController@show', ['product' => $product]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $product)
    {
        $product->delete();
        return redirect(action('ProductController@index'));
    }

    public function changeComprar(Producto $product) {

        $product->pendiente = !$product->pendiente;
        $product->save();

        return redirect(action('ProductController@show', ['product' => $product]));
    }
}
