@extends('layouts.plantillabase')


@section('contenido')
@can('verCrear')

<a href="articulos/create" class="btn btn-primary">CREAR</a>
@endcan
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>


        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->codigo}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->cantidad}}</td>
                <td>{{$articulo->precio}}</td>
                <td>
                    <form action="{{route('articulos.destroy', $articulo->id)}}" method="POST">
                    @can('verEdit')
                    <a class="btn btn-info" href="articulos/{{$articulo->id}}/edit">EDITAR</a>
                    @endcan
                    
                    @can('verEdit')
                    @csrf
                    @method('DELETE')
                    
                    
                    <button class="btn btn-danger">ELIMINAR</button>
                    @endcan
                    </form>
                </td>
                <tr>
            @endforeach

        </tbody>
    </table>

@endsection

