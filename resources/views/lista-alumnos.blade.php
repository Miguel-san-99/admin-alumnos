<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
    <h1>Listado de alumnos</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha de nacimiento</th>
            <th>Ciudad</th>
            <th>Acciones</th>
        </tr>

        @foreach ($alumnos as $alumno)
            <tr>
                <td>
                    <a href="{{ route('alumnos.show', $alumno->id) }}">{{ $alumno->id }}</a>
                </td>
                <td>{{ $alumno->name }}</td>
                <td>{{ $alumno->email }}</td>
                <td>{{ $alumno->fecha_nac }}</td>
                <td>{{ $alumno->city }}</td>
                <td>
                    <a href="{{ route('alumnos.edit', $alumno) }}">Editar</a>
                </td>
            </tr>
        @endforeach

    </table>

</body>
</html>
