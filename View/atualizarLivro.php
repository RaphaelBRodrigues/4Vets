<?php
include("templates/nav.php");
if(@$_GET['status'] == 'fail'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao  atualizar o livro')</script>";
    unset($_GET['status']);
}

?>
<head>


    <link rel="stylesheet" href="css/adicionarLivro.css">
</head>

<body>

<center>
<fieldset id='login'>
<legend>Atualizar Livro</legend>

<form action="../Controller/atualizarLivroController.php" method='get'>


<?php
include_once('../Controller/consultarLivroFormController.php');
?>


</form>

</fieldset>
</center>
</body>

<?php
include("templates/footer.php");
?>
