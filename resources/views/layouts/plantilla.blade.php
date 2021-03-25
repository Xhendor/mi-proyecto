<!DOCTYPE html>

<style>


    .header {
        width: 1100px;
        height: 180px;
        background-color: #2CCC1A;
        text-align: center;

    }

    .content {

        width: 800px;
        height: 400px;
        background-color: #3DCACC;
    }

    .pie {
        width: 1100px;
        height: 50px;
        background-color: #CC060D;
    }
    .nuevocontenido {

        width: 800px;
        height: 400px;
        background-color: deeppink;
    }
</style>

<html>

<head>
    <title> plantilla de prueba </title>
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
</head>

<body>

<!-- En este caso se usa un div para hacer de contenedor pero puede ser cualquier otro tipo de etiqueta -->


<div class="header">

<!--  Aquí utilizamos las estructuras o nomenclaturas
 blade para señalar la parte del contenedor donde irían el resto de los elementos html a los cuales se les aplicara los estilos.
 Y lo hacemos usando la nomenclatura yield seguido de un nombre (“nombre”) para identificarlos que más adelante tendremos que usar en la vista para poder identificarlos. -->

    @yield("header")

</div>

<div class="content">
    <div>Soy un elemento heredado!!!</div>
    @yield("contenido")


    <div class="nuevocontenido">
        @yield("revenge")
    </div>

<div class="pie">

    @yield("pie")

</div>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">

                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand">Cover</h3>
                        <nav>
                            <ul class="nav masthead-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="inner cover">
                    <h1 class="cover-heading">Cover your page.</h1>
                    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
                    <p class="lead">
                        <a href="#" class="btn btn-lg btn-default">Learn more</a>
                    </p>
                </div>

                <div class="mastfoot">
                    <div class="inner">
                        <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                    </div>
                </div>

            </div><!-- /cover-container -->
        </div><!-- /site-wrapper-inner -->
    </div><!-- /site-wrapper -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"/>

</body>
</html>
