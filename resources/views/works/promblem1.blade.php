<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1 | Triángulo Generado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; 
        }
        .container {
            background-color: #ffffff; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            padding: 30px; 
            margin-top: 50px; 
        }
        .triangulo {
            font-family: monospace; 
            margin: 20px;
            background-color: #e9ecef; 
            padding: 15px; 
        }
    </style>
</head>
<body>
    <x-navbar />

    <div class="container text-center"> 
        <h1>¡Bienvenido al Laboratorio 1 - Triángulo!</h1> 
        <p>
        Crear una ruta en laravel que acepte un parámetro, el mismo se pase al controlador y en la vista se dibuje el siguiente triangulo:
        </p>
        <form action="{{ route('triangulo') }}" method="GET">
            <div class="form-group">
                <input type="number" name="cantidad" class="form-control" min="1" placeholder='Ingrese la longitud del triángulo *' required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Generar Triángulo</button> 
        </form> 

        <div class="mt-3">
            <h4>Cantidad: 
                <span class="text-primary">
                {{ isset($cantidad) ? $cantidad : 'No se ha ingresado un número aún' }}
                </span>
            </h4> 
        </div>

        @if(isset($triangulo) && !empty($triangulo))
            <div class="triangulo">
                {!! $triangulo !!} 
            </div> 
        @endif
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
