<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Cifrado</title>
    <!-- Bootstrap CSS (si no lo tienes ya incluido) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Detalle de Cifrado</h2>
        <table class="table table-light table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Cifrado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $numero }}</td>
                    <td>{{ $hash }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('cifradoM') }}" class="btn btn-primary">Volver a la Tabla</a>
    </div>
</body>
</html>
