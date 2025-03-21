<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registrar alumnos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Registrar alumno</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/alumnos" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del alumno</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Rodrigo">
                    <label for="name" class="form-label">Correo electronico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@hotmail.com">
                    <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="31/12/00">
                    <label for="city" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Chicago">
                </div>

                {{-- <div class="mb-3">
                    <label for="email" class="form-label">Correo electronico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" rows="6" name="mensaje"></textarea>
                </div> --}}
                {{-- <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select class="form-select" id="categoria" name="categoria" aria-label=""Default select example>
                        <option selected>Selecciona una categoria</option>
                        <option value="contratacion">Contratacion</option>
                        <option value="personal">Personal</option>
                        <option value="otro">Otro</option>
                    </select>
                </div> --}}

                <input class="form-control input-color " type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
