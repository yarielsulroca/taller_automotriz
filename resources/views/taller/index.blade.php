@extends('layouts.app')

@section('content')
<div class="container">
    <h1>
        TALLERES DEL SISTEMA
    </h1>
    <a href="talleres/create" class="btn btn-primary">CREAR</a>


    <table class="table table-primary table-striped mt-4">
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
                  @csrf
                  @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
             </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>

@endsection
