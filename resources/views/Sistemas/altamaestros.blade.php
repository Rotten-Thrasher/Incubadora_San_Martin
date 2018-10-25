@extends('Sistemas.vistamain')
@section('contenido')
    <form action="{{action('curso@guardamaestros')}}" method="post" enctype="multipart/form-data">
        
        {{csrf_field()}}
        
        @if($errors->first('idm'))
        <i>{{ $errors->first('idm')}}</i>
        @endif <br>
        clave <input type = 'text' name='idm' value ="{{$idms}}" readonly = 'readonly'>
        <br>
        @if($errors->first('nombre'))
        <i>{{ $errors->first('nombre')}}</i>
        @endif <br>
        Nombre <input type = 'text' name='nombre' value ="{{old('nombre')}}">
        <br>
        @if($errors->first('edad'))
        <i>{{ $errors->first('edad')}}</i>
        @endif <br>
        Edad <input type = 'text' name='edad' value ="{{old('edad')}}">
        <br>
        <br>
        Sexo <input type="radio" name='sexo' value="F">F
             <input type="radio" name='sexo' value="M">M
                <br>
        @if($errors->first('cp'))
        <i>{{ $errors->first('cp')}}</i>
        @endif <br>
        Codigo Postal <input type="text" name = 'cp' value ="{{old('cp')}}">
        <br>
        @if($errors->first('beca'))
        <i>{{ $errors->first('beca')}}</i>
        @endif <br>
         Beca <input type="text" name = 'beca' value ="{{old('beca')}}">
        <br>
        <br>
        Selecciona carrera<select name="idc">
        @foreach($carreras as $car)
        <option value = '{{$car->idc}}'>{{$car->nombre}}</option>
        @endforeach
            </select>
        <br>
        @if($errors->first('archivo'))
        <i>{{ $errors->first('archivo')}}</i>
        @endif <br>
        Selecciones archivo <input type="file" name="archivo">
        <br>
        <br>
        <input type="submit" value="Guardar">
        </form>
    @stop