@extends('layouts.app')

@section('content')

  <div class="container">

      <table class="table-bordered table-primary table-striped mt-4 small-12 table-responsive">
          <thead>
          <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($talleres as $taller)
              <tr>
                  <td>{{$taller->id}}</td>
                  <td>{{$taller->nombre}}</td>
                  <td>{{$taller->descripcion}}</td>
                  <td>
                      <form action="{{ route('talleres.destroy',$taller->id) }}" method="POST">
                          <a href="/talleres/{{$taller->id}}/edit" class="btn btn-info">Editar</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Borrar</button>
                      </form>
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
  </div>
@endsection
