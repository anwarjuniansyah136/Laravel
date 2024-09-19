<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaceController extends Controller
{
    public function home(){
        $nama = ["Anwar","Juniansyah","Harahap","Imron","Sihaloho"];
        return view('home',['nama' =>$nama]);
    }
    public function about(){
        $nama = ["Rifqi","Ikbal","Anwari","Imron","Sihaloho"];
        return view('about',['nama' => $nama]);
    }
}
