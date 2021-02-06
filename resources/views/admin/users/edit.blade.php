<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit USERS</title>
</head>
<body>
    <h1>Page for edir users</h1>
    {!! Form::model($user, ['method' => 'PATCH', 'action'=>['AdminUserController@update', $user->id]]) !!}
    <table>
        <tr>
            <td>{!! Form::label('name', 'Name:') !!}</td>
            <td>{!! Form::text('name'); !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('email', 'E-Mail') !!}</td>
            <td>{!! Form::text('email'); !!}</td>
        </tr>
       <!--  <tr>
            <td>{!! Form::label('email', 'Verificar E-Mail') !!}</td>
            <td>{!! Form::text('email_verified_at'); !!}</td>
        </tr> -->
        <tr>
            <td>{!! Form::label('role', 'Role') !!}</td>
            <td>{!! Form::text('role_id'); !!}</td>
        </tr>
        <tr>
            <td>{!! Form::submit('Actualizar Usuario') !!}</td>
            <td>{!! Form::reset('Borrar Campos'); !!}</td>
        </tr>
    </table>
    {!! Form::close() !!}

    {!! Form::model($user, ['method' => 'DELETE', 'action'=>['AdminUserController@destroy', $user->id]]) !!}
        {!! Form::submit('Borrar Usuario'); !!}
    {!! Form::close() !!}
</body>
</html>