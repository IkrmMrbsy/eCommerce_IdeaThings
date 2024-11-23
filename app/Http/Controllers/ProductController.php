<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function allProducts()
    {
        $products = DB::table('products')->paginate(10);
        return view('home', ['title' => 'Semua Produk', 'product' => $products]);
    }

    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('detail', ['title' => 'Detail Produk', 'product' => $product]);
    }

    public function umkm()
    {
        $products = DB::table('products')
            ->where('kategori', 'UMKM')
            ->paginate(10);

        return view('UMKM', [
            'title' => 'UMKM',
            'products' => $products
        ]);
    }

    public function fashion()
    {
        $products = DB::table('products')->where('kategori', 'Fashion')->get();
        return view('fashion', ['title' => 'Fashion', 'products' => $products]);
    }

    public function pakaianPria()
    {
        $products = DB::table('products')
            ->where('kategori', 'pakaian pria')
            ->paginate(10);

        return view('pakaianpria', [
            'title' => 'Pakaian Pria',
            'products' => $products
        ]);
    }

    public function pakaianWanita()
    {
        $products = DB::table('products')
            ->where('kategori', 'pakaian wanita')
            ->paginate(10);

        return view('pakaianwanita', [
            'title' => 'Pakaian Wanita',
            'products' => $products
        ]);
    }

    public function tasPria()
    {
        $products = DB::table('products')
        ->where('kategori', 'tas pria')
        ->paginate(10);

    return view('taspria', [
        'title' => 'Tas Pria',
        'products' => $products
    ]);
    }

    public function tasWanita()
    {
        $products = DB::table('products')
            ->where('kategori', 'tas wanita')
            ->paginate(10);

        return view('tas wanita', [
            'title' => 'Tas Wanita',
            'products' => $products
        ]);
    }

    public function aksesoris()
    {
        $products = DB::table('products')
            ->where('kategori', 'aksesoris')
            ->paginate(10);

        return view('aksesoris', [
            'title' => 'Aksesoris',
            'products' => $products
        ]);
    }
}
