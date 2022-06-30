<?php

use App\Http\Controllers\CursoController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pantallas.index');
})->name('home');

Route::get('/',[CursoController::class, 'index'] );

Route::get('/nosotros', [CursoController::class, 'nosotros']);

Route::get('/inscripciones',[CursoController::class, 'inscripciones']);

Route::get('/boxeo', [CursoController::class, 'boxeo'])->name('boxeo');

Route::get('/futbol', [CursoController::class, 'futbol']);
Route::get('/basquetbol', [CursoController::class, 'basquetbol']);

Route::get('/voleibol', [CursoController::class, 'voleibol']);

Route::get('/deportes', [CursoController::class, 'deportes']);

Route::get('/logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::get('/mapasitio',[CursoController::class, 'mapa']);

Route::get('/carrusel',[CursoController::class, 'carrusel']);
Route::get('/sesion',[CursoController::class, 'login']);

Route::get('/admin', [CursoController::class, 'admin'])->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
