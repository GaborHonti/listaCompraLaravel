@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
           <div class="card">
              <div class="card-header text-center">
                 Modificar Producto
              </div>
              <form action="{{ action('ProductController@update' , ['product' => $producto]) }}" method="POST" enctype="multipart/form-data">

                {{method_field('PUT')}}

                @csrf
              <div class="card-body" style="padding:30px">

                <input type="hidden" name="id" value="{{ $producto->id }}">

                 {{-- TODO: Abrir el formulario e indicar el método POST --}}

                 {{-- TODO: Protección contra CSRF --}}

                 <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" name="nombre" id="title" class="form-control" value="{{ $producto->nombre }}">
                 </div>

                 <div class="form-group">
                    {{-- TODO: Completa el input para el año --}}
                    <label for="title">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" value="{{ $producto->categoria }}">
                 </div>

                 <div class="form-group">
                    {{-- TODO: Completa el input para el poster --}}
                    <label for="avatar">Seleccionar imagen del poster:</label>
                    <input type="file" id="poster" name="poster">
                 </div>



                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Modificar Producto
                    </button>
                 </div>
                </form>
                 {{-- TODO: Cerrar formulario --}}

              </div>
           </div>
        </div>
     </div>

@stop
