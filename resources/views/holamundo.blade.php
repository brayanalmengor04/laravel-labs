<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Página de Saludo | Saludo</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
    <x-navbar />
    
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4">¡Bienvenido a la Página de Saludo!</h1>
            <p class="lead">Envio desde el Controlador</p>
        </div>

        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title">Mensaje obtenido desde el controlador:</h3>
                <p class="card-text">{{ $mensaje }}</p>
                <hr>
                <h4 class="card-title">Valor obtenido desde el controlador:</h4>
                <p class="card-text">{{ $valores }}</p>
            </div>
        </div>
    </div>
 
  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
