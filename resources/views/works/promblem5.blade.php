<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema -5 ! Graficos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            color: #343a40;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .table-container {
            margin-top: 40px;
        }

        .table {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .card {
            border: none;
            border-radius: 10px;
        }

        .card-header {
            background-color: #343a40;
            color: #fff;
            border-bottom: 2px solid #007bff;
        }

        .progress {
            height: 25px;
            border-radius: 5px;
            background-color: #e9ecef;
        }

        .progress-bar {
            background-color: #007bff;
            transition: width 0.6s ease;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 123, 255, 0.05);
        }

        .table-hover tbody tr:hover {
            background-color: #f1f3f5;
        }

        .no-data {
            text-align: center;
            font-size: 1.2em;
            color: #dc3545;
            font-weight: bold;
            padding: 20px;
        }
    </style>
</head>
<body>
    <x-navbar />
    <div class="container text-center mt-5">
        <h1>¡Bienvenido al Laboratorio 5! - Gráfico</h1> 
        <p>Crear una ruta que muestre gráficos con valores generados al azar con 10 filas por la función rand() de php. Los gráficos se deben mostrar con progress bar de html5 (la generación de los datos se debe realizar en el controlador usando un array).
        </p>
        <a href="{{ route('grafico') }}" class="btn btn-primary mb-4">Generar Gráfico</a>
    </div>
    <div class="container table-container">
        <div class="card">
            <div class="card-body p-4">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Número</th>
                            <th>Valor</th>
                            <th>Gráfico</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (isset($numeros))
                        @foreach ($numeros as $dato)
                        <tr>
                            <td class="text-center">{{ $dato['numero'] }}</td>
                            <td class="text-center">{{ $dato['valor'] }}%</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $dato['valor'] }}%;" aria-valuenow="{{ $dato['valor'] }}" aria-valuemin="0" aria-valuemax="100">{{ $dato['valor'] }}%</div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="no-data">¡No se encontró nada!</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
