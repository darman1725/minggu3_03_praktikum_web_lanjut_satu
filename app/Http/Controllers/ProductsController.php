<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products($produk) {
        echo 'Produk Penulis <br><br> Halaman Ini Berisi Tentang Produk : '.$produk;
        return view('products', ['name' => 'Darman']);
    }
}

