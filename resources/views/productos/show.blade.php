@extends('layouts.master')

@section('content')

<div class="row">

        <div class="col-sm-4">

            {{-- TODO: Imagen genérica de los productos --}}
            <img src={{asset('storage/' . $producto->imagen)}} style="height:200px;width:200px"/>

        </div>
        <div class="col-sm-8">

                <form action="{{ action('ProductoController@putComprar') }}" method="POST">
                {{method_field('PUT')}}
                @csrf
                <input type="hidden" name="id" value="{{ $producto->id }}">

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
                <button type="submit" class="btn btn-danger"> Comprar</button>
            @else
                <button type="submit" class="btn btn-primary">Producto comprado</button>
            @endif
            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">Editar Producto</a>
            <a href="http://www.listacompralaravel.test/" class="btn btn-default btn-lg active" role="button" style="background-color:gray; margin-left:2%;">< Volver al listado</a>

        </form>
        </div>
    </div>

@stop
