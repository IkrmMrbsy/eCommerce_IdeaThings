<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;





Route::get('/', function () {
    $products = DB::table('products')->get();
    return view('home', ['title' => 'Home Page', 'products' => $products]);
});;

Route::get('/UMKM', function () {
    $products = DB::table('products')->where('kategori', 'UMKM')->get();
    return view('UMKM', ['title' => 'UMKM', 'products' => $products]);
});

Route::get('/fashion', function () {
    $products = DB::table('products')->where('kategori', 'Fashion')->get();
    return view('fashion', ['title' => 'Fashion', 'products' => $products]);
});

Route::get('/detail/{id}', function ($id) {
	$product = DB::table('products')->where('id',$id)->first();
	return view('detail' , ['title'=> 'Detail Produk','product' => $product]);
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