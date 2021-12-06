@extends('layouts.app')

@section('contenido')
<div class="container">
  <h2>EDITAR TALLER</h2>

  <form action="/talleres/{{$taller->id}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input id="nombre" name="nombre" type="text" class="form-control" value="{{$taller->nombre}}" tabindex="2">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Descripción</label>
      <input id="correo" name="correo" type="text" class="form-control" value="{{$taller->descripcion}}" tabindex="3">
    </div>
    <a href="/talleres" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>
</div>

@endsection