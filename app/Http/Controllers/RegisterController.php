<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class RegisterController extends BaseController
{
    public function register(){
        return view ('register');
    }
    
}
