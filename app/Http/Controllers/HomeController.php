<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function home(){
        return view ('home');
    }
    public function about(){
        return view ('about');
    }
    
}
