<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Editar alumno # {{ $alumno->id }}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="mane" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{ $alumno->name }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="email" value="{{ $alumno->email }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nac" value="{{ $alumno->fecha_nac }}">
                    @error('fecha_nac')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <label for="city" class="form-label"> Ciudad </label>
                    <input type="text" class="form-control" name="city" value="{{ $alumno->city }}">
                    @error('city')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <input class="form-control input-color " type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
