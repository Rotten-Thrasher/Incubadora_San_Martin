<html>
    <body>
    <form action="{{action('curso@modificamaestro')}}" method="post" enctype="multipart/form-data">
        
        {{csrf_field()}}
        
        @if($errors->first('idm'))
        <i>{{ $errors->first('idm')}}</i>
        @endif <br>
        clave <input type = 'text' name='idm' value ="{{$maestros->idm}}" readonly = 'readonly'>
        <br>
        @if($errors->first('nombre'))
        <i>{{ $errors->first('nombre')}}</i>
        @endif <br>
        Nombre <input type = 'text' name='nombre' value ="{{$maestros->nombre}}">
        <br>
        @if($errors->first('edad'))
        <i>{{ $errors->first('edad')}}</i>
        @endif <br>
        Edad <input type = 'text' name='edad' value ="{{$maestros->edad}}">
        <br>
        <br>
        @if($maestros->sexo=='F')
        Sexo <input type="radio" name='sexo' value="F" checked>F
             <input type="radio" name='sexo' value="M">M
        @else
        Sexo <input type="radio" name='sexo' value="F" >F
             <input type="radio" name='sexo' value="M" checked>M
        @endif
                <br>
        @if($errors->first('cp'))
        <i>{{ $errors->first('cp')}}</i>
        @endif <br>
        Codigo Postal <input type="text" name = 'cp' value ="{{$maestros->cp}}">
        <br>
        @if($errors->first('beca'))
        <i>{{ $errors->first('beca')}}</i>
        @endif <br>
         Beca <input type="text" name = 'beca' value ="{{$maestros->beca}}">
        
        <br>
        <br>
        
        Selecciona carrera<select name="idc">
        
        <option value='{{$idc}}'>{{$carreras}}</option>
        
        @foreach($todasdemas as $td)
        <option value='{{$td->idc}}'>{{$td->nombre}}</option>
        @endforeach
        
            </select>
        <br>
        @if($errors->first('archivo'))
        <i>{{ $errors->first('archivo')}}</i>
        @endif <br>
        Selecciones archivo <input type="file" name="archivo">
        <br>
        <img src="{{asset('Archivo/'.$maestros->archivo)}}"
                 height = 150 width=150>
        <br>
        <input type="submit" value="Guardar">
        </form>
    </body>
</html>