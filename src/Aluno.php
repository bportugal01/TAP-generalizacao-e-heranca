<?php
namespace App\Src;
class Aluno extends Pessoa implements IHumano{ 

    public function fala(){
        echo "abriu a porra da boca\n";
    }
    public function logar(){
        echo "método login: implementado\n";
    }

    public function cadastrar(){
        echo "método cadastrar implementado\n";
    }
}




