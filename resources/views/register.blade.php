<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registro</h2>
  <p>Cambie entre pestañas para completar información</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Información Personal</a></li>
    <li><a data-toggle="tab" href="#menu1">Datos Técnicos</a></li>
    <li><a data-toggle="tab" href="#menu2">Archivos de Registro</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Información Personal</h3>
      <div class="row">
          <div class="col-md-4">
             <input type="text" placeholder="Nombre"> 
          </div>
          <div class="col-md-4">
             <input type="text" placeholder="Apellidos"> 
          </div>
          <div class="col-md-4">
             <input type="text" placeholder="Cédula"> 
          </div>          
      </div>
      <div class="row">
          <div class="col-md-3"><input  type="text" placeholder="Correo Eléctronico"></div>
          <div class="col-md-3"><input  type="text" placeholder="Télefono"></div>
          <div class="col-md-3"><input  type="text" placeholder="Peso"></div>
          <div class="col-md-3"><input  type="text" placeholder="Estatura"></div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <input  type="text" placeholder="Dirección Exacta">
          </div>
      </div>
      <hr>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Datos Técnicos</h3>
      <div class="row">
          <div class="col-md-2">
                        <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tipo de Sangre
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">AB</a></li>
      <li><a href="#">A</a></li>
      <li><a href="#">O</a></li>
    </ul>
  </div>
          </div>
  <div class="col-md-2">
                <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tipo de Usuario
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Entrenador</a></li>
      <li><a href="#">Atleta</a></li>
      <li><a href="#">Otro</a></li>
    </ul>
  </div>
  </div>
  <div class="col-md-2">
                <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Deporte
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Baloncesto</a></li>
      <li><a href="#">Fútbol</a></li>
      <li><a href="#">Karate</a></li>
    </ul>
  </div>
  </div>

  <div class="col-md-2">
                <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Categoría
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Sub-1</a></li>
      <li><a href="#">Sub-2</a></li>
      <li><a href="#">Sub-3</a></li>
    </ul>
  </div>
  </div>

  <div class="col-md-2">
                <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Provincia
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Alajuela</a></li>
      <li><a href="#">San José</a></li>
      <li><a href="#">Guanacaste</a></li>
    </ul>
  </div>
  </div>

  <div class="col-md-2">
                <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Cantón
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Valverde Vega</a></li>
      <li><a href="#">Desamparados</a></li>
      <li><a href="#">Nicoya</a></li>
    </ul>
  </div>
      </div>
  </div>

        
</div>
    <div id="menu2" class="tab-pane fade">
      <h3>Archivos de Registro</h3>
      <h5>Cédula Frente</h5>  
      <input class="btn btn-primary" type="file" name="pic" accept="image/*">
      <p>Cédula Reverso</p>  
      <input class="btn btn-primary" type="file" name="pic" accept="image/*">
      <p>Foto</p>
      <input class="btn btn-primary" type="file" name="pic" accept="image/*">
      <p>Boleta Inscripción</p>
      <input class="btn btn-primary" type="file" name="pic" accept="image/*">
      <p>Pase Cantonal</p>
      <input class="btn btn-primary" type="file" name="pic" accept="image/*">
    </div>
  </div>
</div>

</body>
</html>
