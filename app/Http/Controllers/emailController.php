<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\usuarios;
use App\classes\geradorSenha;
use App\Mail\emailRecuperarSenha;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    public function email(){

        //return geradorSenha::gerarSenha();
        return view("/recuperar_senha");
    }
    public function emailRecuperacao(Request $request){
        
        $request->validate([
            'email' => 'required|email'
        ]);
        
        $usuario = usuarios::where('email',$request->email)->get()->first();
        if ($usuario->count() != 0) {
            $nova_senha = geradorSenha::gerarSenha();
            $usuario->senha = Hash::make($nova_senha);
            $usuario->save();
            Mail::to($request->email)->send(new emailRecuperarSenha($nova_senha));
            $msg = "Nova senha enviado para o email informado";
            return view("/recuperar_senha",compact('msg'));
        }else {
            $msg_erro = "email nao existe";
        }

        return view("/recuperar_senha", compact('msg_erro'));
    }
}
