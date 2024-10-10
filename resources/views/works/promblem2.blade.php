<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema -2 | Tabla de Multiplicar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            margin-bottom: 30px;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #4a69bd;
            border: none;
        }
        .btn-primary:hover {
            background-color: #3b5998;
        }
    </style>
</head>
<body>
    <x-navbar />

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card p-4">
                    <h1 class="text-center">¡Bienvenido al Laboratorio 2!</h1>
                    <p class="text-center text-muted">
                        Crea una vista que te muestre los números del 0 al 12. Al hacer clic en un número, te llevará a otra vista con la tabla de multiplicar correspondiente.
                    </p>
                    <form action="{{ route('tabla') }}" method="GET">
                        <div class="form-group mb-3">
                            <input type="number" name="numero" class="form-control" min="1" placeholder="Ingrese el número a multiplicar *" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Generar Tabla</button>
                    </form>

                    <div class="mt-4">
                        @if(isset($numero))
                            <div class="alert alert-success text-center">
                                <strong>Número seleccionado:</strong> {{ $numero }}
                            </div>
                        @else
                            <div class="alert alert-info text-center">
                                Aún no se ha proporcionado un número.
                            </div>
                        @endif
                    </div>


                    
<div class="container mt-3">
    @if(isset($numero) && !empty($tabla))
        <h3 class="text-center mb-4">Tabla de multiplicar del {{ $numero }}</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Multiplicación</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tabla as $fila)
                        <tr>
                            <td >{{ $fila['multiplicacion'] }}</td>
                            <td>{{ $fila['resultado'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-center text-danger">No se ha ingresado un número válido.</p>
    @endif
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
