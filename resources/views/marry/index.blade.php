@extends('layouts.plantilla')

@section('title', 'casados')

@section('content')
    <style>

        table{
            border: 10px;
           /* height: 300px;
            width: 300px;*/
            align-content: center;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }
        h1{
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-top: 2%
        }
    </style>
    <center>
    <h1>Lista de los casados</h1>
    <br>
    
    <br><br>
        
        <div class="container">
            <div class="col-md-5" >
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marrys as $marry)
                            <tr>
                                <th scope="row">{{$marry->user->nombre}}</th>
                                <td>Casad con</td>
                                <td>{{$marry->user2->nombre}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>              
            </div>
        </div>
    </div>
        
    </center>
    
@endsection

