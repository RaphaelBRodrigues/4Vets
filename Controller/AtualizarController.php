<?php

require '../Model/Usuario.php';

$pdoo = new Usuario();


echo $pdoo->Atualizar($_POST['user'],$_POST['cep'],$_POST['bairro'],$_POST['logradouro'],$_POST['ncasa'],$_POST['hint']);
//header("location: ../View/atualizar.php?");

?>