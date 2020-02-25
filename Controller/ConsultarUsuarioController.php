<?php

require '../Model/Usuario.php';

$pdoo = new Usuario();

$user = $pdoo->Consultar();

header("location: ../View/atualizar.php?nome=".$user['Nome']."&cep=".$user['cep']."&ncasa=".$user['Ncasa']."&hint=".$user['Hint']."&bairro=".$user['Bairro']."&logr=".$user['Logradouro']."");

?>