<h1>Crear Nuevo Viajero</h1>
    <form action="{{ route('viajeros.store') }}" method="POST">
        @csrf
        <div>
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required>
        </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
