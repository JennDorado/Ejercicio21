<h1>Editar Viaje</h1>
    <form action="{{ route('viajes.update', $viaje->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" value="{{ $viaje->codigo }}">
        </div>
        <div>
            <label for="num_plazas">Número de Plazas:</label>
            <input type="number" id="num_plazas" name="num_plazas" value="{{ $viaje->num_plazas }}">
        </div>
        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" value="{{ $viaje->fecha }}">
        </div>
        <div>
            <label for="otros_datos">Otros Datos:</label>
            <textarea id="otros_datos" name="otros_datos">{{ $viaje->otros_datos }}</textarea>
        </div>

        <div>
            <label for="viajero_id">Viajero:</label>
            <select id="viajero_id" name="viajero_id">
                @foreach($viajeros as $viajero)
                    <option value="{{ $viajero->id }}" {{ isset($viaje) && $viaje->viajero_id == $viajero->id ? 'selected' : '' }}>
                    {{ $viajero->nombre }} {{ $viajero->apellido }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>
