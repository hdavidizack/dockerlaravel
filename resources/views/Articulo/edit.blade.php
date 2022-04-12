@extends('layouts.plantillabase')

@section('contenido')
    <h2>EDITAR Registros</h2>

    <form action='/articulos/{{$articulo->id}}' method="POST">
        
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input type="text" name="codigo" class="form-control" id="codigo" value="{{$articulo->codigo}}" tabindex="1">
            
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{$articulo->descripcion}}" tabindex="2">
          </div>
          <div class="mb-3 ">
            <label for="" class="form-label">Cantidad</label>
            <input type="text" name="cantidad" class="form-control" id="cantidad" value="{{$articulo->cantidad}}"tabindex="3">
          </div>
          <div class="mb-3 ">
            <label for="" class="form-label">Precio</label>
            <input type="number" step="any" name="precio" class="form-control" id="precio" value="{{$articulo->precio}}" tabindex="4">
          </div>
          <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
          <button type="submit" class="btn btn-primary" tabindex="6">Submit</button>
    </form>

@endsection