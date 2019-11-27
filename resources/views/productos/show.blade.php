@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        {{-- TODO: Imagen genérica de los productos --}}
        <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

    </div>
    <div class="col-sm-8">

        {{-- TODO: Datos del producto --}}
        <h1>{{$producto->nombre}}</h1>
        <h2>Categoria: {{$producto->categoria}}</h2>
        <p>Estado: Producto actualmente comprado</p>
        @if ($producto->pendiente)
            <button class="btn btn-danger">Producto actualmente comprado</button>
        @else
            <button class="btn btn-danger">Pendiente de compra</button>
        @endif

        <a href="../edit/{{$id}}" ><button class="btn btn-warning">< Editar producto</button>
        <a href="../" ><button class="btn btn-default">< Volver al listado</button>
        </a>
    </div>
</div>
@stop
