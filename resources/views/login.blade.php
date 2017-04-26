<!DOCTYPE html>
<head>
     @extends('layouts.masterlogin')
    <meta charset="UTF-8">
</head>
<body>
	{!!Form::open(['route'=>'log.store', 'method'=>'post'])!!}
	 <div class="container usuariocontainer">
	<div class="row form-group">
	    <div class="col-md-offset-4 col-md-4">
	    	<!--
	    	<img class="usuarioimage" src="/images/usuario.png"></img><input id="name" class="loginfields text-center usuariologinfield form-control" type="text" placeholder="usuario"/>
	    	-->
	    	{!!Form::text('name',null,['class'=>'form-control loginfields text-center usuariologinfield','placeholder'=>'usuario'])!!}
	       
	    </div>
	</div>
		<div class="row form-group">
	    <div class="col-md-offset-4 col-md-4">
	    	<!--
	    	<img class="passwordimage" src="/images/contrasena.png"></img> <input id="password" class="loginfields text-center passwordloginfield form-control" type="password" placeholder="contraseña"/>
	    	-->
	    	{!!Form::password('password',['class'=>'form-control loginfields text-center passwordloginfield','placeholder'=>'contraseña'])!!}
	       
	    </div>
	</div>
	<div class="row">
	   	    <div class="text-center">
	   	    {!!Form::submit('Login',['class'=>'btn btn-primary'])!!}	
	        <!--<button class="passwordloginfield btnlogin" type="submit">Login</button>-->
	    </div> 
	</div>
</div>
	{!!Form::close()!!}
</body>