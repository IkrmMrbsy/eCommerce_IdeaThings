<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query'); 
        
        // Jika query tidak kosong, cari produk sesuai query
        if ($query) {
            $products = DB::table('products')
                          ->where('produk', 'like', '%' . $query . '%') // Produk yang mengandung query
                          ->orWhere('kategori', 'like', '%' . $query . '%') // Kategori yang mengandung query
                          ->get();
        } else {
            // Jika query kosong, ambil semua produk
            $products = DB::table('products')->get();
        }

        // Kembalikan hasil pencarian dalam bentuk partial view
        return response()->view('partials.product-list', ['products' => $products]);
    }
}
