<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodyController extends Controller
{
    //
    public function home(){
        return view('body.home');
    }

    public function ladies(){
        return view('body.ladies');
    }
    
    public function men(){
        return view('body.men');
    }

    public function shop(){
        return view('body.shop');
    }

    public function shop2(){
        return view('body.shop2');
    }

    public function shop3(){
        return view('body.shop3');
    }

    public function form(){
        return view('body.form');
    }

    public function formsignin(){
        return view('body.formsignin');
    }

    public function saleLadies(){
        return view('body.saleLadies');
    }

    public function saleMen(){
        return view('body.saleMen');
    }

}
