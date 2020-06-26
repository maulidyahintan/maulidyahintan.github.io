<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use App\Tutorial;
use App\Galeri;

class HomeController extends Controller
{
    public function index()
    {
        $data= [
            "dataexperience"=>Experience::get(),
            "datatutorial"=>Tutorial::get(),
            "datagaleri"=>Galeri::get()
        ];
        // dd($data);
        return view('home',$data);
    }

}
