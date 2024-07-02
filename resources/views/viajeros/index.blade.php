<h1>Lista de Viajeros</h1>
    <a href="{{ route('viajeros.create') }}">Crear Nuevo Viajero</a>
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($viajero as $viajero)
                <tr>
                    <td>{{ $viajero->dni }}</td>
                    <td>{{ $viajero->nombre }}</td>
                    <td>{{ $viajero->direccion }}</td>
                    <td>{{ $viajero->telefono }}</td>
                    <td>
                        <a href="{{ route('viajeros.show', $viajero->id) }}">Ver</a>
                        <a href="{{ route('viajeros.edit', $viajero->id) }}">Editar</a>
                        <form action="{{ route('viajeros.destroy', $viajero->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
