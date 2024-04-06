<?php
require 'vendor/autoload.php';

use App\Src\Aluno;
use App\Src\Professor;
use App\Src\IHumano;

$alunos = new Aluno();
$alunos -> logar();
$alunos -> cadastrar();
$alunos -> fala();