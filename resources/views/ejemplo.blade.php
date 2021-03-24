


@extends ("layouts.plantilla")

<!-- Con esta instruccion ya estamos heredando toda la estructura. -->
<style>

</style>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ejenmplo</title>


    <!--<link href="css/A7F.css" rel="stylesheet" type="text/css">-->

</head>

<body>

@section ("header")
    @php
        $i = 1
    @endphp

    @if ($name == 'Walter White' OR $name == 'Jesse Pinkman')
        <h1>Goodbye Breaking Bad</h1>
    @else
        <h1>Hello {{ $name }}</h1>
    @endif

    @switch($i)
        @case(1)
        <h1>Hello {{ $name }}</h1>
        @break
        @case(2)
        <h1>Hola {{ $name }}</h1>
        @break
    @endswitch
@endsection

@section ("contenido")

    <h1>Contenido</h1>
    <div style="background: red;width: 50px;height: 50px">
        soy un cuadro ROJO!!!
    </div>
    <table cellspacing="10" border='1px'>
        <tr>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
        </tr>
        <tr>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
        </tr>
        <tr>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
        </tr>
        <tr>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
        </tr>
        <tr>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
        </tr>
        <tr>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
        </tr>
        <tr>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
        </tr>
        <tr>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
        </tr>
        <tr>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
        </tr>
        <tr>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
            <td>TEXTO</td>
        </tr>
    </table>

@endsection

@section ("pie")

    <h1>Pie</h1>

@endsection


@section ("revenge")
    <h1>Soy dinamico!!!!</h1>

@endsection

</body>
</html>
