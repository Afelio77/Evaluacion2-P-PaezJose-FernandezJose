<a href="{{ route('pacientes.index') }}">← Volver a la Lista</a>
<h1>Registrar Paciente</h1>
<form action="{{ route('pacientes.store') }}" method="POST">
    @csrf <div>
        <label>Nombre del Paciente:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') }}"> 
        @error('nombre') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <br>

    <div>
        <label>DNI (8 dígitos):</label><br>
        <input type="text" name="dni" value="{{ old('dni') }}">
        @error('dni') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <div>
        <label>Fecha de Nacimiento:</label><br>
        <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
        @error('fecha_nacimiento') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <br>

    <div>
        <label>Médico:</label><br>
        <select name="medico_id">
            <option value="" selected disabled>Seleccione un médico</option>
            @foreach($medicos as $medico)
                <option value="{{ $medico->id }}" {{ old('medico_id') == $medico->id ? 'selected' : '' }}>{{ $medico->nombre }}

                </option>
            @endforeach
        </select>
        @error('medico_id') <small style="color:red">{{ $message }}</small> @enderror
    </div>

    <br>

    <button type="submit">Guardar</button>
</form>