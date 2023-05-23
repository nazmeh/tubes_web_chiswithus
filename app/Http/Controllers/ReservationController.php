<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ReservationController extends BaseController
{
    public function reservation(){
        return view ('reservation');
    }
    
}
