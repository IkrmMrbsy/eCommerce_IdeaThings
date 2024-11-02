<?php

use App\Models\fashionmale;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('home', ['title' =>'Home Page']);
});

Route::get('/UMKM', function () {
    return view('UMKM', ['title' =>'UMKM']);
});

Route::get('/fashion', function () {
    return view('fashion' , ['title'=> 'Fashion']);
});


Route::get('/pakaianpria', function () {
    return view('pakaianpria' , ['title'=> 'Pakaian Pria','fashionmales' => fashionmale::all() ]);
});

Route::get('/pakaianwanita', function () {
    return view('pakaianwanita' , ['title'=> 'Pakaian Wanita']);
});

Route::get('/taspria', function () {
    return view('taspria' , ['title'=> 'Tas Pria']);
});

Route::get('/taswanita', function () {
    return view('taswanita' , ['title'=> 'Tas Wanita']);
});

Route::get('/aksesoris', function () {
    return view('aksesoris' , ['title'=> 'Aksesoris']);
});