<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailController extends Controller
{
    public function email(){
        return view("/recuperar_senha");
    }
}
