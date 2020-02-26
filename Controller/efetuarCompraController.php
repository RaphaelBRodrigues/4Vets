<?php

require '../Model/Compra.php';

$livro = new Compra();

echo $_POST['valor'];
echo $livro->efetuarCompra();


?>