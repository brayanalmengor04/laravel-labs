<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorkController;
use App\Http\Controllers\ProblemController;
// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::get('/',[HelloWorkController::class,'holaMundo'])->name('introduccion');  
// Ruta dinámica para los navbar
Route::get('/problema/{numero}', [ProblemController::class, 'show'])->name('problema');    
// Ruta para el triangulo
Route::get('/triangulo', [ProblemController::class, 'showTriangulo'])->name('triangulo');  
// Ruta para tabla de multiplicar
Route::get('/tabla',[ProblemController::class ,'showTablaMultiplicar'])->name('tabla');  

// Ruta para cifrado 
Route::get('/problema/3/cifrado', [ProblemController::class, 'showTablaCifrado'])->name('cifrado'); 
Route::get('/vercifrado/3/cifrado/{numero}/{hash}', [ProblemController::class, 'encriptado'])->name('encriptado');

// Ruta cifrado modals 
Route::get('/vercifrado/4/cifrado/{numero}/{hash}', [ProblemController::class, 'encriptadoModal'])->name('encriptadoModal');
Route::get('/problema/4/cifrado', [ProblemController::class, 'showTablaModals'])->name('cifradoM');  

// Ruta grafico 
Route::get('/grafico', [ProblemController::class, 'showTablaGrafico'])->name('grafico');
// Ruta grafico Colors 
Route::get('/grafico/colors', [ProblemController::class, 'showTablaGraficoColors'])->name('graficoColors');
