@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Añadir producto
          </div>
          <form action="{{ action('ProductController@store') }}" method="POST">
            @csrf
          <div class="card-body" style="padding:30px">

             {{-- TODO: Abrir el formulario e indicar el método POST --}}

             {{-- TODO: Protección contra CSRF --}}

             <div class="form-group">
                <label for="title">Nombre</label>
                <input type="text" name="title" id="title" class="form-control">
             </div>

             <div class="form-group">
                {{-- TODO: Completa el input para el año --}}
                <label for="title">Categoría</label>
                <input type="text" name="categoria" id="categoria" class="form-control">
             </div>


             <div class="form-group">
                {{-- TODO: Completa el input para el poster --}}
                <label for="title">Poster</label>
                <input type="text" name="poster" id="poster" class="form-control">
             </div>


                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Añadir Producto
                </button>
             </div>
            </form>
             {{-- TODO: Cerrar formulario --}}

          </div>
       </div>
    </div>
 </div>


@stop

