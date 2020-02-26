<?php
include("templates/nav.php");
if($_GET['status'] == 'fail'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao realizar o cadastro do livro')</script>";
    unset($_GET['status']); 
}
?>
<head>


    <link rel="stylesheet" href="css/adicionarLivro.css">
</head>

<body>
    
<center>
<fieldset id='login'>
<legend>Login</legend>

<form action="../Controller/CadastroLivroController.php" method='get'>

<input required type="text" name='titulo'  placeholder="Titulo">
<input required type="text" name='autor' placeholder="Autor">
<input required type="text" name='link' placeholder="Link da imagem de capa">
<input required type="number" step='0.5' name='preco' placeholder="Preço">
<br><br>
<button id='cadastro' type="submit">Cadastrar</button><b></b>
<button id='reset' type="reset"> Limpar</button>

</form>

</fieldset>
</center>
</body>

<?php
include("templates/footer.php");
?>
