<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @extends('layouts.master')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @section('title')
            <title>Bienvenida</title>
        @endsection
        
    </head>
    <body>
        @section('content')
        <div class="container">
	        <div class="row col-md-12 text-center" style="padding-bottom: 100px;">
		        <h2>Bienvenido(a)</h2>
	        </div>
	        <div class="row col-md-12">
		        <div class="col-md-6 text-center">
		            <a href="#" class="btn btn-lg btn-primary">Inscribir</a>
		            <p style="margin-top: 35px;">Desde este botón puede realizar una<br>rápida inscripción</p>    
		        </div>
		        <div class="col-md-6 text-center">
		            <a href="#" class="btn btn-lg btn-primary">Ver Registros</a>
		            <p style="margin-top: 35px;">Desde este botón puede ver la lista de<br>atletas y generar reportes</p>
		        </div>
	        </div>
        </div>
        @endsection
    </body>
</html>