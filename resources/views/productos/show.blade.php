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
                    {{$producto->nombre}}
            </h1>
            <h2 style="min-height:45px; margin-left:15%;">
                    Categoría: {{$producto->categoria}}
            </h2>
            <p style="margin-left:15%;"><strong>Estado: </strong>
                @if($producto->pendiente)
                    Producto actualmente disponible.
                @else
                    Producto pendiente de compra.
                @endif
            </p>
            @if($producto->pendiente)
                <a class="btn btn-danger" href="#"> Producto actualmente disponible.</a>
            @else
                <a class="btn btn-primary" href="#">Producto pendiente de compra.</a>
            @endif
            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">Editar Producto</a>
            <a href="http://www.listacompralaravel.test/" class="btn btn-default btn-lg active" role="button" style="background-color:gray; margin-left:2%;">< Volver al listado</a>

        </div>
    </div>

@stop
