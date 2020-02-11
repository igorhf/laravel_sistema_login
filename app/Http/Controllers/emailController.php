<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
class emailController extends Controller
{
    public function email(){

        return view("/recuperar_senha");
    }
    public function emailRecuperacao(Request $request){
        
        $request->validate([
            'email' => 'required|email'
        ]);
        
        $usuario = usuarios::where('email',$request->email)->get();

        if ($usuario->count() != 0) {
            
            return view("/recuperar_senha");
        }else {
            $msg_erro = "email nao existe";
        }

        return view("/recuperar_senha", compact('msg_erro'));
    }
}
