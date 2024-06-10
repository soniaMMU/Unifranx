<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\RecomendacioneController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\InscripcioneController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\SesioneController;
use App\Http\Controllers\LugareController;
use App\Http\Controllers\HorarioController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\AuthController;

Route::get('/login2', function () {
    return view('login2');
})->name('login2');

Route::post('/login2', [AuthController::class, 'authenticate']);

Route::view('homepart', 'homepart')->name('homepart');
Route::view('homeanfi', 'homeanfi')->name('homeanfi');
Route::view('home', 'home')->name('home');


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ReportController;
Route::resource('reportes', App\Http\Controllers\ReportController::class);
//Route::get('/reporte', [ReportController::class, 'generarPDF']);
Route::get('/reporte', [ReportController::class, 'mostrarReporte'])->name('reporte.mostrar');
Route::get('/reporte/pdf', [ReportController::class, 'generarPDF'])->name('reporte.pdf');
Route::get('reporte/participantes', [ReportController::class, 'mostrarReporteParticipantes'])->name('reporte.participantes');
Route::get('reporte/participantes/pdf', [ReportController::class, 'generarPDFParticipantes'])->name('reporte.participantes.pdf');
Route::get('reporte/eventos', [ReportController::class, 'mostrarReporteEventos'])->name('reporte.eventos');
Route::get('reporte/eventos/pdf', [ReportController::class, 'generarPDFEventos'])->name('reporte.eventos.pdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('role', App\Http\Controllers\RoleController::class);
Route::resource('participante', App\Http\Controllers\ParticipanteController::class);
Route::resource('recomendacione', App\Http\Controllers\RecomendacioneController::class);
Route::resource('evento', App\Http\Controllers\EventoController::class);
Route::resource('inscripcione', App\Http\Controllers\InscripcioneController::class);
Route::resource('asistencia', App\Http\Controllers\AsistenciaController::class);
Route::resource('sesione', App\Http\Controllers\SesioneController::class);
Route::resource('lugare', App\Http\Controllers\LugareController::class);
Route::resource('horario', App\Http\Controllers\HorarioController::class);
//Route::resource('lugare', App\Http\Controllers\LugareControllerr::class);


Route::resource('roles', RoleController::class);
Route::resource('participantes', ParticipanteController::class);
Route::resource('recomendaciones', RecomendacioneController::class);
Route::resource('eventos', EventoController::class);
Route::resource('inscripciones', InscripcioneController::class);
Route::resource('asistencias', AsistenciaController::class);
Route::resource('sesiones', SesioneController::class);
Route::resource('lugares', LugareController::class);
Route::resource('horarios', HorarioController::class);
//Route::resource('sesiones', LugareControllerr::class);

Route::resource('eventoanfi', App\Http\Controllers\EventoAnfiController::class);
Route::resource('inscripcioneanfi', App\Http\Controllers\InscripcionAnfiController::class);
Route::resource('sesioneanfi', App\Http\Controllers\SesionAnfiController::class);
Route::resource('asistencianfi', App\Http\Controllers\AsistenciaAnfiController::class);
Route::resource('recomendacioneanfi', App\Http\Controllers\RecomendacionAnfiController::class);

// Rutas para mostrar las asistencias del participante
Route::get('/asistenciapart', function () {
    return view('asistenciapart.index');
})->name('asistenciapart.index');
//ver asistencias detalles
Route::get('/asistenciapart/{id}/show', function ($id) {
    $asistencia = \App\Models\Asistencia::findOrFail($id);
    return view('asistenciapart.show', compact('asistencia'));
})->name('asistenciapart.show');
Route::get('/mostrar/qr/{texto}', 'TuControlador@generarCodigoQR')->name('mostrar.qr');


Route::post('/asistencia/{id}/volver', [AsistenciaController::class, 'volver'])->name('asistencia.volver');
//eventos
use App\Models\Evento;

Route::get('/eventosparti', function () {
    $eventos = Evento::all();
    return view('eventosparti.index', compact('eventos'));
})->name('eventosparti.index');
///


Route::post('/inscribirse/evento', [InscripcioneController::class, 'inscribirse'])->name('inscribirse.evento');


///
use App\Models\Inscripcione;


Route::get('/misinscripciones', function () {
    // Usa el ID fijo del participante
    $participanteId = 1;

    // Obtén las inscripciones del participante con la relación al evento
    $inscripciones = Inscripcione::where('participantes_id', $participanteId)->with('evento')->get();

    // Retorna la vista con las inscripciones
    return view('misinscripciones.inscripciones', compact('inscripciones'));
})->name('mis.inscripciones');

