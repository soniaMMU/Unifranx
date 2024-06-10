@extends('layouts.appparticipante')

@section('title', 'Detalles de la Asistencia')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Detalles de la Asistencia</h1>
                <p>ID: {{ $asistencia->id }}</p>
                <p>Sesiones ID: {{ $asistencia->sesiones_id }}</p>
                <p>Participantes ID: {{ $asistencia->participantes_id }}</p>
                <p>Fecha de Asistencia: {{ $asistencia->fh_asis }}</p>
                <p>Estado de Asistencia: <span id="estadoAsistencia">{{ $asistencia->st_asis }}</span></p>

                <form id="volverForm" action="{{ route('asistencia.volver', $asistencia->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Volver</button>
                </form>
            </div>
            <div class="col-md-6">
                <!-- Mostrar el QR -->
                <div id="qrContainer"></div>
            </div>
        </div>
    </div>

    <script>
        // Función para generar el QR
        function generateQR(text) {
            // Creamos un nuevo elemento para el QR
            var qrElement = document.createElement('img');

            // Definimos los atributos del elemento
            qrElement.src = 'https://api.qrserver.com/v1/create-qr-code/?data=' + encodeURIComponent(text) + '&size=200x200';
            qrElement.alt = 'QR Code';

            // Agregamos el elemento al contenedor del QR
            var qrContainer = document.getElementById('qrContainer');
            qrContainer.innerHTML = ''; // Limpiamos el contenedor antes de agregar el nuevo QR
            qrContainer.appendChild(qrElement);
        }

        // Genera el enlace con los datos de la asistencia
        var asistenciaData = {
            id: '{{ $asistencia->id }}',
            sesiones_id: '{{ $asistencia->sesiones_id }}',
            participantes_id: '{{ $asistencia->participantes_id }}',
            fh_asis: '{{ $asistencia->fh_asis }}',
            st_asis: '{{ $asistencia->st_asis }}'
        };

        var enlaceDatosAsistencia = 'https://docs.google.com/forms/u/1/d/e/1FAIpQLSdD7k30fvUErOShVdlgcWshgECyfSSB2Y3A5JokhvMm51nrDw/formResponse';
        for (var key in asistenciaData) {
            enlaceDatosAsistencia += key + '=' + encodeURIComponent(asistenciaData[key]) + '&';
        }
        enlaceDatosAsistencia = enlaceDatosAsistencia.slice(0, -1); // Eliminamos el último '&'

        // Llamamos a la función para generar el QR al cargar la página
        window.onload = function() {
            generateQR(enlaceDatosAsistencia);
        };
    </script>
@endsection