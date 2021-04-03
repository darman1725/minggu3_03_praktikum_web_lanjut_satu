<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function programs($prog) {
        echo 'Program Penulis <br><br> Berikut Adalah Penjelasan Mengenai Program : '.$prog;
        return view('program', ['name' => 'Darman']);
    }
}
