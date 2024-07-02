<h1>Detalles del Viaje</h1>
    <p><strong>Código:</strong> {{ $viaje->codigo }}</p>
    <p><strong>Número de Plazas:</strong> {{ $viaje->num_plazas }}</p>
    <p><strong>Fecha:</strong> {{ $viaje->fecha }}</p>
    <p><strong>Otros Datos:</strong> {{ $viaje->otros_datos }}</p>
    <a href="{{ route('viajes.index') }}">Volver a la Lista</a>
