<h1>Crear Nuevo Viaje</h1>
    <form action="{{ route('viajes.store') }}" method="POST">
        @csrf
        <div>
            <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" required>
        </div>
        <div>
            <label for="num_plazas">Número de Plazas:</label>
            <input type="number" id="num_plazas" name="num_plazas" required>
        </div>
        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
        </div>
        <div>
            <label for="otros_datos">Otros Datos:</label>
            <textarea id="otros_datos" name="otros_datos"></textarea>
        </div>
        <div>
            <label for="viajero_id">Viajero:</label>
            <select id="viajero_id" name="viajero_id" required>
                <option value="" disabled selected>Seleccione un viajero</option>
                @foreach($viajeros as $viajero)
                    <option value="{{ $viajero->id }}">{{ $viajero->nombre }} {{ $viajero->apellido }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>
