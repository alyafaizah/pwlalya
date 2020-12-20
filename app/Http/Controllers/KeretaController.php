<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeretaController extends Controller
{
    //
    public function desin(){
        return view('desin');
    }
    public function signin(){
        return view('desinSignIn');
    }

    public function riwayat(){
        return view('desinRiwayat');
    }

    public function berhasil(){
        return view('desinBerhasil');
    }

    public function batal(){
        return view('desinDibatalkan');
    }

    public function detail(){
        return view('desinRingkasan');
    }

    public function home(){
        return view('desinHome');
    }

    public function home1(){
        return view('desinHome1');
    }  
    
    public function setting(){
        return view('desinSetting');
    } 

    public function profil(){
        return view('desinProfil');
    } 
}
