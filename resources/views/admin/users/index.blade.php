@extends('users.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Inicio</title>
</head>
<body>
<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                           
                        </div>
                    @endif

                    Bienvenido {{$user->name}}.

                   
                </div>
    <h1>Pagina del administrador</h1>
    <table width ="800" border="1">
        <tr>
            <th>Id</th>
            <th>Role_id</th>
            <th>Nomrbe</th>
            <th>E-mail</th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Editar</th>
        </tr>
        @if($users)<!-- Validadndo si hay usuarios -->
            @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->role_id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td><a href="{{route('users.edit', $user->id)}}">Editar</a></td>
        </tr>
            @endforeach
        @endif
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</body>
</html>