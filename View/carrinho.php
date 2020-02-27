<?php
include("templates/nav.php");
@session_start();
if($_SESSION['usrID'] == ''){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Faça o login no sistema'); window.location.href = 'login.php';</script>";
    unset($_GET['status']);
}
if(@$_GET['status'] == 'totInv'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao realizar a compra,o carrinho está vazio')</script>";
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

<form action="../Controller/efetuarCompraController.php?fim=1" method='post'>
<h2 >Título - Preço</h2>

<?php
require '../Model/Carrinho.php';
$itens = new Carrinho();
$total = $itens->mostrarCarrinho();


?>
<button name='valor' value='<?php echo $total;?>'>Efetuar a compra</button>
</form><br>
<a href="catalogo.php"><button id='comprarMais'> Continuar comprando</button></a><br><br>
<a href="compraFinalizada.php?hist=1"><button id='verHistorico'> Ver histórico </button></a>

</fieldset>


</body>

<?php
include("templates/footer.php");
?>
