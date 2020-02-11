<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\usuarios;

class cadastroController extends Controller
{
    public function cadastroUsuario(){
        return view('cadastro_usuario');
    }

    public function realizarCadastro(Request $request){
        
        $request->validate([
            'usuario' => 'required',
            'senha' => 'required|min:3|max:10',
            'cf_senha' => 'required|min:3|max:10',
            'email' => 'required|email'
        ]);
        // same comparar os campos
        if ($request->senha == $request->cf_senha) {
            $usuario = usuarios::where('usuario',"=",$request->usuario)->orWhere('email',"=",$request->email)->get();
            if (count($usuario) == 0 ) {
                $usuario = new usuarios;
                $usuario->usuario = $request->usuario;
                $usuario->senha = Hash::make($request->senha);
                $usuario->email = $request->email;
                $usuario->save();

                $msg = "Cadastro realizado com sucesso";
                $msg_erro = "";
            }else{
                $msg = "";
                $msg_erro = "Usuario ou email ja cadastrado";
            }
        }else {
            $msg = "";
            $msg_erro = "a senha e a senha de confirmação deve ser iguais";
        }
        

        return view('/cadastro_usuario', compact('msg','msg_erro'));

    }
}
