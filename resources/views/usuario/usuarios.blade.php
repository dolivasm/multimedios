<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @extends('layouts.master')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @section('title')
            <title>Usuarios</title>
        @endsection
    </head>
    <body>
    @section('content')
        <table class="table text-center">
            <thead>
                <th class="text-center">Nombre</th>
                <th class="text-center">Operaciones</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                <td>{{$user->name}}</td>
                <td>
                    {!!link_to_route('user.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);!!}
                </td>
            </tbody>
            @endforeach
        </table>
    @endsection
    </body>
</html>