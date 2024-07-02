<h1>Lista de Viajes</h1>
    <a href="{{ route('viajes.create') }}">Crear Nuevo Viaje</a>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Número de Plazas</th>
                <th>Fecha</th>
                <th>Otros Datos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($viajes as $viaje)
                <tr>
                    <td>{{ $viaje->codigo }}</td>
                    <td>{{ $viaje->num_plazas }}</td>
                    <td>{{ $viaje->fecha }}</td>
                    <td>{{ $viaje->otros_datos }}</td>
                    <td>
                        <a href="{{ route('viajes.show', $viaje->id) }}">Ver</a>
                        <a href="{{ route('viajes.edit', $viaje->id) }}">Editar</a>
                        <form action="{{ route('viajes.destroy', $viaje->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
