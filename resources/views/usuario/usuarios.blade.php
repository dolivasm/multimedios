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
        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Operaciones</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                <td>{{$user->name}}</td>
                <td></td>
                @endforeach
            </tbody>
        </table>
    @endsection
    </body>
</html>