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

    public function cadastroUsuario(){
        return view('cadastro_usuario');
    }

    public function realizarCadastro(Request $request){
        
        $request->validate([
            'usuario' => 'required',
            'senha' => 'required|min:3|max:8',
            'email' => 'required|email'
        ]);

        $usuario = new usuarios;
        $usuario->usuario = $request->usuario;
        $usuario->senha = Hash::make($request->senha);
        $usuario->email = $request->email;
        $usuario->save();

    }

    public function realizarLogin(Request $request){
        
        $request->validate([
            'usuario' => 'required',
            'senha' => 'required|min:3|max:8'            
        ]);

        $usuario = usuarios::where('usuario',$request->usuario)->first();
        if (Hash::check($request->senha, $usuario->senha)) {
            $request->session()->put('id_usuario', $usuario->id_usuario);
            $request->session()->put('usuario', $usuario->usuario);
        }        
        
        return view('/login', compact('usuario'));
    }

    public function deslogar(){
        session()->flush();        
        return redirect('/');
    }

}
