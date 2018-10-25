@extends('Sistemas.vistamain')
@section('contenido')
        <h1>Reporte Maestros</h1>
        <br>
        <table border= "1">
            <tr>
                <td>idm</td><td>Foto</td><td>Nombre</td>
                <td>Edad</td><td>Sexo</td><td>Operaciones</td>
            </tr>
            @foreach($maestros as $ma)
        <tr>
            <td>{{$ma->idm}}</td><td>
            <img src="{{asset('archivo/'.$ma->archivo)}}"
                 height = 50 width=50></td>
            <td>{{$ma->nombre}}</td>
            <td>{{$ma->edad}}</td><td>{{$ma->sexo}}</td>
            <td>
                @if($ma->deleted_at=="")
                <a href="{{URL::action('curso@eliminam',['idm'=>$ma->idm])}}">
                Desactivar</a>
                <a href="{{URL::action('curso@modificam',['idm'=>$ma->idm])}}">
                Modificar</a>
                @else
                <a href="{{URL::action('curso@restauram',['idm'=>$ma->idm])}}">
                Restaurar
                </a>
                 <a href="{{URL::action('curso@efisicam',['idm'=>$ma->idm])}}">
                Eliminar
                </a>
                @endif
            </tr>
            @endforeach
        </table>
    @stop