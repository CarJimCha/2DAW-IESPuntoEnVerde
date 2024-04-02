<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return "<h1>Título principal</h1>";
});

Route::get('/departamento', function () {
    // return view('departamentos');        // resources/views/departamentos.blade.php
    return "<h1>Listado de departamentos</h1>";
});

Route::get('/departamento/{id}', function ($id) {
    // return view('departamentos');        // resources/views/departamentos.blade.php
    return "<h1>Datos del departamento: " . $id . "</h1>";
});