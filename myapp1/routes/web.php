<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("Welcome");
});

Route::get('about', function () {
    return view("about");
});

Route::get('blog', function () {
    return view("blog");
});

Route::get('/student/{id}', function ($id) {
    return view('student', ['id' => $id]);
})->name('student.profile');

Route::fallback(function () {
    return 'ไม่พบหน้าเว็บ';
});
