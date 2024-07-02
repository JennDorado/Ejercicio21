<h1>Detalles del Viajero</h1>
    <p><strong>DNI:</strong> {{ $viajero->dni }}</p>
    <p><strong>Nombre:</strong> {{ $viajero->nombre }}</p>
    <p><strong>Dirección:</strong> {{ $viajero->direccion }}</p>
    <p><strong>Teléfono:</strong> {{ $viajero->telefono }}</p>
    <a href="{{ route('viajeros.index') }}">Volver a la Lista</a>
