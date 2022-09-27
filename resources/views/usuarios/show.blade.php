@extends('layouts.plantilla')

@section('title', 'usuarios'.$usuario->usuario)

@section('content')
<style>

    .titulo{
        margin-left: 2%
    }
    h1{
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        margin-top: 2%
    }
    table{
        border: 10px;
        align-content: center;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    }
    .contenedor{
        display: flex;
        justify-content: center;
        padding: 35px;
        margin-top: 30px;

    }
    .regresar{
        margin-right: 10px;
        height: 10%;
    }
    .regresar{
        margin-right: 10px;
        height: 10%;
    }
    .act{
        margin-right: 10px;
        height: 10%;
    }
    .eliminar{
        margin-right: 10px;
    }

</style>
<center>
<h1 class="titulo">Datos del Usuario: {{$usuario->usuario}} </h1>
<div class="contenedor">
<a href="{{route('usuarios.index')}}" class="btn btn-primary regresar" >Regresar</a>
<br><br>
<a href="{{route('usuarios.edit',$usuario)}}" class="btn btn-primary act">Actualizar</a><br><br>
<form action="{{route('usuarios.destroy', $usuario)}}"  method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-primary eliminar" >Eliminar</button><br><br>
</form>
</div>


<div class="container">
<div class="col-md-6" >
<div class="table-responsive">
<table class="table table-bordered" class="table">
    <tr class="table-success">
        <td><strong>Nombre</strong></td>
        <td><strong>Edad</strong></td>
        <td><strong>Sexo</strong></td>
        <td><strong>Estado Civil</strong></td>
        <td><strong>Usuario</strong></td>
        <td><strong>Contraseña</strong></td>
    </tr>
    <tr>
        <td>{{$usuario->nombre}}</td>
        <td>{{$usuario->edad}}</td>
        <td>{{$usuario->sexo}}</td>
        <td>{{$usuario->estado}}</td>
        <td>{{$usuario->user}}</td>
        <td>{{$usuario->pass}}</td>
    </tr>
</table>
</div>
</div>
</div>
</center>
@endsection
