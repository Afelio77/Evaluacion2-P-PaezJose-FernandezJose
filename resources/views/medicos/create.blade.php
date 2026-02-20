<a href="{{ route('pacientes.index') }}">← Volver a la Lista</a>

<h2>Registrar Nuevo Médico</h2>
<form action="{{ route('medicos.store') }}" method="POST">
    @csrf
    <label>Nombre del Médico:</label>
    <input type="text" name="nombre" required>
    
    <button type="submit">Guardar Médico</button>
</form>