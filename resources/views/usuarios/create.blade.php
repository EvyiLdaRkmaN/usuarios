@extends('layouts.plantilla')

@section('title', 'usuarios create')

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
<h1>Registro de Usuario</h1><br><br>
<form action="{{route('usuarios.store')}}" method="POST">

    @csrf
    
    
    <label>
        Nombre
        <br>
        <input type="text" name="nombre" value="{{old('nombre')}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <label>
        Edad
        <br>
        <input type="number" name="edad" value="{{old('edad')}}">
    </label>
    @error('edad')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <label>
        Sexo
        <br>
        <select name="sexo" value="{{old('sexo')}}">
            <option value="">Selecione una opcion</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
    </label>
    @error('sexo')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <label>
        Estado Civil
        <br>
        <select name="estado" value="{{old('estado')}}">
            <option value="">Selecione una opcion</option>
            <option value="Soltero">Soltero</option>
            <option value="Casado" >Casado</option>
          </select>
    </label>
    @error('estado')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <label>
        Usuario
        <br>
        <input type="text" name="user" value="{{old('user')}}">
    </label>
    @error('user')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <label>
        Contraseña
        <br>
        <input type="password" name="pass" value="{{old('pass')}}">
    </label>
    @error('pass')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>

</center>
@endsection

