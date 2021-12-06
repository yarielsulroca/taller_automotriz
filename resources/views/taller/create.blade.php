@extends('layouts.app')

@section('content')


<div class="container">
  <h2>CREAR NUEVO TALLER</h2>
  <form action="/talleres" method="POST">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input id="nombre" name="nombre" type="text" class="form-control" value="" tabindex="2">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Descrpción</label>
      <input id="descripcion" name="descripcion" type="text" class="form-control" value="" tabindex="3">
    </div>
    <a href="/talleres" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>

</div>
@endsection
