<?php

require '../Model/Carrinho.php';

$compra = new Carrinho();

echo $compra->Comprar();


echo $_GET['id'];
?>