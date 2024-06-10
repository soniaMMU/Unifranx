<!-- resources/views/reporte.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Inscripciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        header img {
            max-width: 100px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px; /* Reducir el tamaño de la fuente de la tabla */
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 5px; /* Reducir el padding */
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            padding: 10px 20px;
            background-color: #6a1b9a;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ffb922;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="{{ asset('admin_assets/img/unifranzpng.png') }}" alt="LOGO" style="max-width: 280px; height: auto;">
            <h1>Reporte de Inscripciones</h1>
        </header>
        <div>
            <strong>CANTIDAD DE REGISTROS INACTIVOS EN TOTAL: {{ $data->where('est_p', 'ACTIVO')->count() }}</strong>
        </div>
        <div>
            <strong>HORA Y FECHA DE EXPEDICIÓN DE ESTE REPORTE: {{ now()->format('d/m/Y H:i:s') }}</strong>
            
        </div>

        <br/>
        
        <table>
            <thead>
                <tr>
                    <th>NOMBRE COMPLETO</th>
                    <th>CÉDULA DE IDENTIDAD</th>
                    <th>ROL</th>
                    <th>FECHA DE REGISTRO</th>
                    <th>FECHA DE CAMBIO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nom_p }} {{ $item->app_p }} {{ $item->apm_p }}</td>
                    <td>{{ $item->ci_p }}</td>
                    <td>{{ $item->role->rol }}</td>
                    <td>{{ $item->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>{{ $item->updated_at->format('d/m/Y H:i:s') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br/>
        <!-- Botón para generar PDF -->
        <form action="{{ route('reporte.pdf') }}" method="GET">
            <button type="submit">Generar PDF</button>
        </form>
    </div>
</body>
</html>
