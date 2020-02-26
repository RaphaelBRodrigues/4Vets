<?php
include("templates/nav.php");
if($_GET['status'] == 'failCad'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao realizar o cadastro')</script>";
    unset($_GET['status']); 
}
?>
<head>

<script src='js/deletarCarrinho.js'></script>
    <link rel="stylesheet" href="css/carrinho.css">
</head>
<body>
    



<fieldset id='carrinho'>
<legend>Carrinho</legend>

<form action="../Controller/efetuarCompraController.php" method='post'>
<h2 >Título - Preço</h2>

<?php
require '../Model/Carrinho.php';
$itens = new Carrinho();
$total = $itens->mostrarCarrinho();


?>
<button name='valor' value='<?php echo $total;?>'>Efetuar a compra</button>
</form><br>
<a href="catalogo.php"><button id='comprarMais'> Continuar comprando</button></a>
<a href="compraFinalizada.php"><button id='verHistorico'> Ver histórico </button></a>

</fieldset>


</body>

<?php
include("templates/footer.php");
?>
