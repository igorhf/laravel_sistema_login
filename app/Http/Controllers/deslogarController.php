<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deslogarController extends Controller
{
    public function deslogar(){
        session()->flush();        
        return redirect('/');
    }
}
