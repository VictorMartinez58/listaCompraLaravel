@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Modificar Producto
          </div>
          <div class="card-body" style="padding:30px">

             {{-- TODO: Abrir el formulario e indicar el método POST --}}
            <form action="#" method="POST">
                {{ method_field('PUT') }}
             {{-- TODO: Protección contra CSRF --}}
             @csrf

             <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
             </div>

             <div class="form-group">
                {{-- TODO: Completa el input para el año --}}
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control">
             </div>

             <div class="form-group">
                {{-- TODO: Completa el input para el director --}}
                <label for="categoria">Categoria</label>
                <input type="text" name="categoria" id="categoria" class="form-control">
             </div>

             <div class="form-group">
                {{-- TODO: Completa el input para el poster --}}
                <label for="imagen">Imagen</label>
                <input type="text" name="imagen" id="imagen" class="form-control">

             </div>

             <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
             </div>

             <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Modificar Producto
                </button>
             </div>

             {{-- TODO: Cerrar formulario --}}
            </form>
          </div>
       </div>
    </div>
 </div>


@stop
