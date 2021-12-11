@extends('layouts.app')
@section('content')
<div class="container">
<table class="table table-primary table-striped mt4">
<thead class="team-item">
    <tr>
        <th scope="col">
            ID
        </th>
        <th scope="col">
            Nombre
        </th>
        <th scope="col">
            Descripcion
        </th>
    </tr>
</thead>
<tbody>
    @foreach ($talleres as $taller )
        <tr>{ $taller->id }</tr>
        <tr>{ $taller->nombre }</tr>
        <tr>{ $taller->descripcion }</tr>
        <tr>
            @if($taller->buscaAreasTaller($taller->id))
                $areas= $taller->buscaAreasTaller($taller->id),
                <table class="table table-bordered table-success table-striped mt-4">
                    <thead>
                        <tr>
                            <th>ID_Area</th>
                            <th>Nombre_Area</th>
                            <th>Descripcion_Area</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($areas as $area)
                                <th>{$area->id}</th>
                                <th>{$area->nombre}</th>
                                <th>{$area->descripcion}</th>

                            @endforeach
                        </tr>
                    </tbody>
                </table>
            @endif
        </tr>
    @endforeach
</tbody>

</table>
</div>

@endsection
