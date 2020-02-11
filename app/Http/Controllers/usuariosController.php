<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\usuarios;

class usuariosController extends Controller
{
    public function login(){
        return view('login');
    }    

    public function realizarLogin(Request $request){
        
        $request->validate([
            'usuario' => 'required',
            'senha' => 'required|min:3|max:8'            
        ]);

        $usuario = usuarios::where('usuario',$request->usuario)->first();

        if ($usuario->count() != 0) {
            if (Hash::check($request->senha, $usuario->senha)) {
                $request->session()->put('id_usuario', $usuario->id_usuario);
                $request->session()->put('usuario', $usuario->usuario);

                $msg_erro = "";
            }else {
                $msg_erro = "Senha invalidar";
            }
        }else{
            $msg_erro = "Usuario ja existe";
        }
                
        
        return view('/login', compact('usuario','msg_erro'));
    }

    

}
