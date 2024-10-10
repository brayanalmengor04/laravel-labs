<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema -4| Cifrado y modals!</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Personalización adicional */
        body {
            background-color: #f8f9fa;
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }

        .btn-danger {
            background-color: #d9534f;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <x-navbar /> <!-- Si tienes un componente de navbar en tu proyecto -->
    
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h2>Tabla de Cifrado</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Número</th>
                            <th scope="col">Cifrado</th>
                            <th scope="col">Ver Cifrado</th> 
                            <th scope="col" >Ver Modal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($numeros as $dato)
                            <tr>
                                <th scope="row">{{ $dato['numero'] }}</th>
                                <td>{{ $dato['hash'] }}</td>
                                <td>
                                    <a href="{{ route('encriptadoModal', ['numero' => $dato['numero'], 'hash' => $dato['hash']]) }}">
                                        <button type="button" class="btn btn-danger btn-sm">Ver</button>
                                    </a>
                                </td> 
                                 <td> 
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{ $dato['numero'] }}">
                                            Ver Modal
                                    </button>
                                 </td>   
                                 <div class="modal fade" id="modal-{{ $dato['numero'] }}" tabindex="-1" aria-labelledby="modalLabel-{{ $dato['numero'] }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLabel-{{ $dato['numero'] }}">Detalles del Cifrado</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>Número:</strong> {{ $dato['numero'] }}</p>
                                                    <p><strong>Cifrado:</strong> {{ $dato['hash'] }}</p>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
