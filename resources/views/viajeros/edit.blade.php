<h1>Editar Viajero</h1>
    <form action="{{ route('viajeros.update', $viajero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" value="{{ $viajero->dni }}" required>
        </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $viajero->nombre }}" required>
        </div>
        <div>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="{{ $viajero->direccion }}" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="{{ $viajero->telefono }}" required>
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>
