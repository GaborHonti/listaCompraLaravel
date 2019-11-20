@extends('layouts.master')

@section('content')

<div class="row">

        <div class="col-sm-4">

            {{-- TODO: Imagen genérica de los productos --}}
            <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

        </div>
        <div class="col-sm-8">

            {{-- TODO: Datos del producto --}}
            <h1 style="min-height:45px; margin-left:15%;">
                    {{$producto[0]}}
            </h1>
            <h2 style="min-height:45px; margin-left:15%;">
                    Categoría: {{$producto[1]}}
            </h2>
            <p style="margin-left:15%;"><strong>Estado: </strong>Producto actualmente comprado</p>
            <button style="background-color:red; margin-left:15%;">Pendiente de compra</button>
            <button style="background-color:orange; margin-left:2%;">Editar Producto</button>
            <a href="http://www.listacompralaravel.test/" class="btn btn-default btn-lg active" role="button" style="background-color:gray; margin-left:2%;">< Volver al listado</a>

        </div>
    </div>

@stop
