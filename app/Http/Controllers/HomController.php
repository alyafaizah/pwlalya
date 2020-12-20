<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomController extends Controller
{
    public function home(){
        return view('hom');
    }
}
