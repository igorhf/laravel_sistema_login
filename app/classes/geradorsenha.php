<?php

namespace App\classes;

class geradorSenha{
 
    public static function gerarSenha(){
        $valor = "";
        $caracteres = "abcdefghijklmnopqrstuvwxyz_ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?#$%";
        for ($i=0; $i < 10; $i++) { 
            $index = rand(0,strlen($caracteres));
            $valor .= substr($caracteres,$index,1);
            
        }
        return $valor;
    }
}

?>