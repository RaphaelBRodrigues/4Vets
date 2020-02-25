<?php
include("templates/nav.php");
if($_GET['status'] == 'failCad'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao realizar o cadastro')</script>";
    unset($_GET['status']); 
}
?>
<head>

<!-- Jquery usado para a requisição ajax,foi o único momento em que utilizei a biblioteca !-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='js/cep.js'></script>
<link rel="stylesheet" href="css/atualizar.css">
</head>
<center>
<fieldset id='login'>

<form action="../Controller/AtualizarController.php" method='post'>

    <legend>Atualizar dados</legend>

    <input  type="text" name='user' value="<?php echo $_GET['nome']; ?>"><span class='material-icons'>person</span> <br>

    <input  type="text" id='cep' name='cep' value="<?php echo $_GET['cep']; ?>"><span class='material-icons'>filter_2</span> <br>
    <input readonly type="text"  name='bairro' id='bairro' value="<?php echo $_GET['bairro']; ?>" placeholder="<?php echo $_GET['bairro']; ?>" ><span class='material-icons'>filter_2</span> <br>
    <input  readonly type="text" name='logradouro' id='logradouro' value="<?php echo $_GET['logr']; ?>" placeholder="<?php echo $_GET['logr']; ?>"><span class='material-icons'>filter_2</span> <br>
    <input  type="text" name='ncasa' value="<?php echo $_GET['ncasa']; ?>"><span class='material-icons'>home</span> <br>
<input type="text" name='hint' value="<?php echo $_GET['hint']; ?>"><span class='material-icons'>lightbulb_outline
</span>
<br><br>
<button type="submit">Atualizar</button>

</form>
<form action="../Controller/destruirSessao.php">
<button id='logout' type class='button'>Desconectar</button>
</form>
</fieldset>


</center>

</body>
</html>