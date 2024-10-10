<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema -6 | Graficos y colors!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
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
        <h1>¡Bienvenido al Laboratorio 6 - Gráfico Colors</h1> 
       <p>Modificar el problema anterior, para que dependiendo del valor se genere de manera aleatorio se le asigne un color de acuerdo a las siguientes condiciones: 
        </p>
       
        <a href="{{ route('graficoColors') }}" class="btn btn-primary mb-4">Generar Gráfico</a>
    </div>
    <div class="container table-container">
        <div class="card">
            <div class="card-body p-4">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Número</th>
                            <th>Valor</th>
                            <th>Gráfico Color</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
                            @if (isset($numeros))
                                @foreach ($numeros as $dato)
                                <tr>
                                    <td class="text-center">{{ $dato['numero'] }}</td>
                                    <td class="text-center">{{ $dato['valor'] }}%</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar 
                                                @if ($dato['valor'] < 61) bg-secondary 
                                                @elseif ($dato['valor'] <= 70) bg-danger 
                                                @elseif ($dato['valor'] <= 80) bg-warning 
                                                @elseif ($dato['valor'] <= 90) bg-info 
                                                @else bg-success 
                                                @endif"
                                            role="progressbar" style="width: {{ $dato['valor'] }}%;" aria-valuenow="{{ $dato['valor'] }}" aria-valuemin="0" aria-valuemax="100">{{ $dato['valor'] }}%</div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="no-data">¡No se encontró nada! Presione el Boton Generar!</td>
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
