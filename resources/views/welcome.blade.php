<h1> {{$titulo}}</h1>


<h2>Pero puede ser combinado con Blade:</h2>
<p>
    ¿Cuánto es 5 + 5? {{5 + 5}}
    <br>
    Tiempo actual: {{time()}}
    <br>
    Podemos llamar a funciones nativas: {{ucwords('hola')}}
</p>

<div>

@foreach($usuarios as $usuario)
    <p>{{$usuario}}</p>
    @endforeach

</div>
