<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function blogs(){
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
       
    ['title' => 'บทความที่ 4',
        'content' =>'เนื้อหาบทที่สี่',
        'status' => false
    ],
       
    ['title' => 'บทความที่ 5',
        'content' =>'เนื้อหาบทที่ห้า',
        'status' => true
    ],
];   
    return view("blogs",compact('blogs'));
    }

    function abouts(){
         $name = " Arriya Kisanthia";
         $date = " 6 กรกฎาคม 2026";
         return view("abouts", compact('name','date'));
    }

    function create(){
        return view('form');
    }
    
}

