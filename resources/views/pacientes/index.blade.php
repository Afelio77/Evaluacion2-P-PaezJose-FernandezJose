<nav style="margin-bottom: 20px;">
    <a href="{{ route('medicos.create') }}" style="background: #28a745; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">
        + Registrar Médico
    </a>
    <a href="{{ route('pacientes.create') }}" style="background: #007bff; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">
        + Registrar Paciente
    </a>
</nav>

<hr>
<h1>Lista de Pacientes</h1>
<hr>

<table border="1" style="width: 100%; text-align: left; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>Nombre</th>
            <th>DNI</th>
             <th>Fecha de Nacimiento</th>
            <th>Médico Asignado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pacientes as $paciente)
        <tr>
            <td>{{ $paciente->nombre }}</td>
            <td>{{ $paciente->dni }}</td>
            <td>{{ $paciente->fecha_nacimiento }}</td>
            <td>{{ $paciente->medico->nombre }}</td>
        </tr>
        @endforeach
    </tbody>
</table>