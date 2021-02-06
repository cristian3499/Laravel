<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create USERS</title>
</head>
<body>
    <h1>Page for create users</h1>
    {!! Form::open(['method' => 'POST', 'action'=>'AdminUserController@store']) !!}
    <table>
        <tr>
            <td>{!! Form::label('name', 'Name:') !!}</td>
            <td>{!! Form::text('name'); !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('password', 'Password') !!}</td>
            <td>{!! Form::text('password'); !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('email', 'E-Mail') !!}</td>
            <td>{!! Form::text('email'); !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('email', 'Verificar E-Mail') !!}</td>
            <td>{!! Form::text('email_verified_at'); !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('role', 'Role') !!}</td>
            <td>{!! Form::text('role_id'); !!}</td>
        </tr>
        <tr>
            <td>{!! Form::submit('Crear Usuario') !!}</td>
            <td>{!! Form::reset('Borrar Campos'); !!}</td>
        </tr>
    </table>
    {!! Form::close() !!}
</body>
</html>