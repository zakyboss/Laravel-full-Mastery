<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['greet'=> "yello"]);
});

Route::get('/jobs', function () {
    return view('jobs',['jobs'=> 

    [
        ['Description'=> 'Programmer' , 'Salary'=> 30000, 'YOE'=> 3],
        ['Description'=> 'Doctor' , 'Salary'=> 900000, 'YOE'=> 2],
        ['Description'=> 'Lawyer' , 'Salary'=> 340000, 'YOE'=> 1],
        ['Description'=> 'Captain' , 'Salary'=> 2320000, 'YOE'=> 13],
]]);
});

Route::get('/contacts', function (){
    return view ('contacts');
});