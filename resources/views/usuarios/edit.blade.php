@extends('layouts.plantilla')

@section('title', 'usuarios edit')

@section('content')
<style>

    select{
        display: block;
        width: 200px;
        align-content: center;
    }
</style>
<center>
    <br>
<h1>Editar Cliente</h1><br><br>
<form action="{{route('usuarios.update',$usuario)}}" method="POST" >

    @csrf
    @method('put')

    <div class="form-group">
        <label>Nombre</label><br>
        <input type="text" name="nombre" value="{{old('nombre', $usuario->nombre)}}">
    </div>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <div class="form-group">
    <label for="">Edad</label><br>
        <input type="number" name="edad" value="{{old('edad', $usuario->edad)}}">
    </div>
    @error('edad')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <div class="form-group">
    <label>Sexo</label><br>
        <select name="sexo" value="{{old('sexo', $usuario->sexo)}}">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
    </div>
    @error('sexo')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <div class="form-group">
        <label for="">Estado Civil</label><br>
            <select name="estado" value="{{old('estado', $usuario->estado)}}">
                <option value="Soltero">Soltero</option>
                <option value="Casado" >Casado</option>
              </select>
        </div>
        @error('estado')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
    <div class="form-group">
        <label for="">Usuario</label><br>
            <input type="text" name="user" value="{{old('user', $usuario->user)}}">
        </div>
        @error('user')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
    <div class="form-group">
        <label for="">Contraseña</label><br>
            <input type="password" name="pass" value="{{old('pass', $usuario->pass)}}">
        </div>
        @error('pass')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
    <button type="submit" class="btn btn-primary">Acualizar</button>
</form>
</center>
@endsection
