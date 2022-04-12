@extends('layouts.plantillabase')

@section('contenido')
    <h2>Crear Registros</h2>

    <form action='/articulos' method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input type="text" name="codigo" class="form-control" id="codigo" tabindex="1">
            
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input type="text" name="descripcion" class="form-control" id="descripcion" tabindex="2">
          </div>
          <div class="mb-3 ">
            <label for="" class="form-label">Cantidad</label>
            <input type="text" name="cantidad" class="form-control" id="cantidad" tabindex="3">
          </div>
          <div class="mb-3 ">
            <label for="" class="form-label">Precio</label>
            <input type="number" step="any" value="0.00" name="precio" class="form-control" id="precio" tabindex="4">
          </div>
          <a href="/articulos" class="btn btn-secondary" tabindex="5">CAncelar</a>
          <button type="submit" class="btn btn-primary" tabindex="6">Submit</button>
    </form>

@endsection