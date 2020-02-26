<?php
include("templates/nav.php");
if(@$_GET['status'] == 'fail'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao realizar a compra')</script>";
    unset($_GET['status']);
}
if(@$_GET['status'] == 'failDeletar'){
    //parâmetro passado pelo model usuário no momento do login
echo "<script>alert('Falha ao deletar o livro')</script>";
unset($_GET['status']);
}
?>
<head>


    <link rel="stylesheet" href="css/compraFinalizada.css">
</head>
<body>




<?php
require '../Model/Compra.php';
$consulta = new Compra();
$consulta->consultarCompra();
?>


</body>
<?php
include("templates/footer.php");
?>
