<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailController extends Controller
{
    public function email(){

        return view("/recuperar_senha");
    }
    public function emailRecuperacao(Request $request){
        
        $request->validate([
            'email' => 'required|email'
        ]);        

        return "igor";
    }
}
