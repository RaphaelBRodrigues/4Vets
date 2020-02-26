<?php

require '../Model/Compra.php';

$livro = new Compra();

if($_POST['valor'] == 0){
    header("location: ../View/catalogo.php");
}

echo $livro->efetuarCompra();


?>