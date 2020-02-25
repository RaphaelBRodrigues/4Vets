<?php

require '../Model/Usuario.php';

$pdoo = new Usuario();
$usuario =strtoupper($_POST['nome']);
$senha = strtoupper($_POST['senha']);

echo $pdoo->Logar($usuario,$senha);




?>