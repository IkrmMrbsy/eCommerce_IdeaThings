<?php

use App\Models\fashionmale;
use App\Models\fashionwanita;
use App\Models\product;
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


Route::get ('/pakaianpria', function () 
{
    $kategori = DB::table('products')->where('kategori','=','pakaian pria')->get();
    return view ('pakaianpria' , ['title'=> 'Pakaian Pria','products' => $kategori] );
    
});


Route::get('/pakaianwanita', function () {
    $kategori = DB::table('products')->where('kategori','=','pakaian wanita')->get();
    return view ('pakaianwanita' , ['title'=> 'Pakaian Wanita','products' => $kategori] );
});

Route::get('/taspria', function () {
    $kategori = DB::table('products')->where('kategori','=','tas pria')->get();
    return view ('taspria' , ['title'=> 'Tas Pria','products' => $kategori] );
});

Route::get('/taswanita', function () {
    return view('taswanita' , ['title'=> 'Tas Wanita']);
});

Route::get('/aksesoris', function () {
    return view('aksesoris' , ['title'=> 'Aksesoris']);
});