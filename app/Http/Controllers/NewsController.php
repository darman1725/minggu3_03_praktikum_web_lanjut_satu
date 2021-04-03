<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($tanggal) {
        echo 'Berita Penulis <br><br> Tanggal Berita : '.$tanggal;
        return view('news', ['name' => 'Darman']);    }
}
