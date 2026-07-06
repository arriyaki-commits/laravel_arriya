<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("index");
});

Route::get('about', function () {
    return view("about");
});

Route::get('blog', function () {
    return view("blog");
});

Route::get('abouts', function () {
    $name = " Arriya Kisanthia";
    $date = " 6 กรกฎาคม 2026";
return view("abouts", compact('name','date'));
})->name('abouts');

Route::get('blogs', function () {
    $blogs = [
        ['title' => 'บทความที่ 1',
        'content' =>'เนื้อหาบทที่หนึ่ง',
        'status' => true
    ],
      ['title' => 'บทความที่ 2',
        'content' =>'เนื้อหาบทที่สอง',
        'status' => true
    ],
   
      ['title' => 'บทความที่ 3',
        'content' =>'เนื้อหาบทที่สาม',
        'status' => false
    ],
];
        
    return view("blogs",compact('blogs'));
})->name('blogs');




Route::get('/student/{id}', function ($id) {
    return view('student', ['id' => $id]);
})->name('student.profile');


Route::fallback(function () {
    return 'ไม่พบหน้าเว็บ';
});
