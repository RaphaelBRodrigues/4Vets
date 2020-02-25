<?php

require '../Model/Usuario.php';

$pdoo = new Usuario();

$user = $pdoo->Atualizar();

header("location: ../View/atualizar.php?");

?>