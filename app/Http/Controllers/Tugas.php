<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tugas extends Controller
{
    //
    public function jumlah(){
        $x=1;
        $y=3;
        $hasil=$x+$y;
        return "Hasil dari penjumlahan x+y  =  ".$hasil;
    }
    
}
