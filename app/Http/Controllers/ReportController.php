<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Participante;
use App\Models\Role;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function mostrarReporte() 
    {
        // Obtén los datos que deseas mostrar en el reporte
        $data = Participante::with('role')->get();

        // Retorna la vista 'reporte' con los datos
        return view('reporte', compact('data'));
    }

    public function generarPDF()
    {
        // Obtén los datos que deseas mostrar en el PDF
        $data = Participante::with('role')->get();

        // Genera el PDF utilizando la vista 'reporte' y los datos obtenidos
        $pdf = Pdf::loadView('reporte', compact('data'));

        // Mostrar el PDF en el navegador
        return $pdf->stream('reporte.pdf');
    }



    public function mostrarReporteParticipantes()
    {
        // Obtén los datos de los participantes
        $data = Participante::all();

        // Retorna la vista 'reporte_participantes' con los datos
        return view('reporte_participantes', compact('data'));
    }

    public function generarPDFParticipantes()
    {
        // Obtén los datos de los participantes
        $data = Participante::all();

        // Genera el PDF utilizando la vista 'reporte_participantes' y los datos obtenidos
        $pdf = Pdf::loadView('reporte_participantes', compact('data'));

        // Mostrar el PDF en el navegador
        return $pdf->stream('reporte_participantes.pdf');
    }


    public function mostrarReporteEventos()
    {
        $eventos = Evento::all(); // Asegúrate de tener el modelo Event correctamente configurado
        return view('eventos', compact('eventos'));
    }

    public function generarPDFEventos()
    {
        $eventos = Evento::all();
        $pdf = PDF::loadView('eventos', compact('eventos'));
        return $pdf->download('reporte_eventos.pdf');
    }
}
