<!-- resources/views/reporte_eventos.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Eventos</title>
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
            font-size: 12px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 5px;
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
            <h1>Reporte de Eventos</h1>
        </header>
        <div>
            <strong>Total de Eventos: {{ $eventos->count() }}</strong>
        </div>
        <div>
            <strong>Hora y Fecha de Expedición de este Reporte: {{ now()->format('d/m/Y H:i:s') }}</strong>
        </div>

        <br/>

        <table>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>TIPO</th>
                    <th>FECHA INICIO</th>
                    <th>FECHA FIN</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                <tr>
                    <td>{{ $evento->nom_ev }}</td>
                    <td>{{ $evento->tip_ev }}</td>
                    <td>{{ $evento->f_in_ev}}</td>
                    <td>{{ $evento->f_fi_ev}}</td>
                    <td>{{ $evento->st_ev }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br/>
        <!-- Botón para generar PDF -->
        <form action="{{ route('reporte.eventos.pdf') }}" method="GET">
            <button type="submit">Generar PDF</button>
        </form>
    </div>
</body>
</html>
