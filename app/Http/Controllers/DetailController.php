<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('pages.detail', ['title' => 'Detail Produk', 'product' => $product]);
    }
}