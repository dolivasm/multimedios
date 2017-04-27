<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    @yield('title')

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css" />
    <link rel="stylesheet" href="css/mystyle/header.css" type="text/css" />
     <link rel="stylesheet" href="css/mystyle/custom.css" type="text/css" />
     
    @yield('css')
    
</head>
<body>
    <div id="wrapper">
    <header>
    <div class="container clearfix">
        <h1 id="logo">
            <img id="logoImg"src="images/Logo-ICODER.png"></img>
        </h1>
        <nav>
            <a href="">Inscribir</a>
            <a href="">Ver Deportistas</a>
            <a href="">Ayuda</a>
        </nav>
    </div>
</header><!-- /header -->

<div id="main" class="container">
    <div id="content">
        @yield('content')
    </div>
</div><!-- #main -->
    </div>
    <footer>
        <div class="container">
            <hr>
            <p>© ICODER 2015 - Derechos reservados. Desarrollado por D.O.G Team, Costa Rica.</p>
            <p>Diseño y Diagramación D.O.G Team - ICODER</p>
        </div>
    </footer>
</body>
<script type="text/javascript" src="js/myjs/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var logo = document.getElementById('logoImg');
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 100,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
                logo.style.width = '100px';
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                    logo.style.width = '150px';
                }
            }
        });
    }
    window.onload = init();
</script>