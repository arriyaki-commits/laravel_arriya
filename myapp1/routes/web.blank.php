<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "ยินดีต้อนรับเว็บไซต์ของฉัน <a href='".route('login')."'>Login </a>";
});

Route::get('about', function () {
    return "เกี่ยวกับเรา";
});

Route::get('blog/{id}', function ($id) {
    return "บทความทั้งหมด".$id;
});

Route::get('admin/user/arriya', function () {
    return "<h1>ยินดีต้อนรับ Admim </h1>";
})->name('login');


Route::get('blog', function () {
    return "บทความทั้งหมด";
});

Route::fallback(function () {
    return "ไม่พบหน้า";
});
