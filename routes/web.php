<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['title' => 'Mi página con Laravel y Vue']);
});

//RUTAS DE SALA DE CLASES
Route::get('/classroomStudent', function () {
    return view('classRoom/classRoomStudent', ['title' => 'Mi página con Laravel y Vue']);
});
Route::get('/classroomTeacher', function () {
    return view('classRoom/classRoomTeacher', ['title' => 'Mi página con Laravel y Vue']);
});


//RUTAS DE VUE
Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');

