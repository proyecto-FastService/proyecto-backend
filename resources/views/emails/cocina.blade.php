<!-- emails.cocina.blade.php -->

<h1>Nuevo pedido a cocina</h1>

<p>Productos:</p>
<ul>
    @foreach ($productos as $producto)
        <li>{{ $producto['nombre'] }}</li>
    @endforeach
</ul>

<p>Mesa: {{ $mesa }}</p>
