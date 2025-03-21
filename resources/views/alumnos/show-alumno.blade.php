<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar</title>
</head>
<body>
    <h1>Alumno # {{ $alumno->id }}</h1>

    <ul>
        <li>Nombre: {{ $alumno->name }}</li>
        <li>Correo: {{ $alumno->email }}</li>
        <li>Fecha de nacimiento: {{ $alumno->fecha_nac }}</li>
        <li>Ciudad: {{ $alumno->city }}</li>
    </ul>
    <hr>
    <a href="{{ route('alumnos.edit', $alumno) }}">Editar</a>
    <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar
        </button>
    </form>
</body>
</html>
