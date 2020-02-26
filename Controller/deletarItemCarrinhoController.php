<?php
require '../Model/Carrinho.php';

$del = new Carrinho();
echo $del->removerItemCarrinho();

?>