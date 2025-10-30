<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',[PrimerControlador::class, 'index']);
Route::get('test2',[App\Http\Controllers\SegundoControlador::class, 'index']);

/*Route::get('/contact', function () {
    //Agregar parametros
    $data = ['nombre' => 'Victor'];

    // Redireccionar a otra ruta
    //return redirect()->route('contact2');
    //return to_route('contact2');

    return view('contact', $data);
})->name ('contact');

Route::get('/contact2', function () {
    return view('contact2');
})->name ('contact2');*/

/*
// Test Route
Route::get('/test', function () {
    return view ('test');
});

// CRUD Route
Route::get('/crud', function () {
    return view ('crud/index');
});


Route::get('/crud', function () {
    $edad = 46;
    $data = ['nombre' => 'Victor', 'edad' => $edad];
    return view ('/crud/index', $data);

    //Dar nombre a la ruta
}) ->name('crud');
 */