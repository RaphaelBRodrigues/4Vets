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
    <link rel="stylesheet" href="css/login.css">
</head>
<center>
<form action="../Controller/CadastroController.php" method='get'>
<fieldset id='login'>
    <legend>Cadastro</legend>

    <input required type="text" name='user' placeholder="Nome de usuário"><span class='material-icons'>person</span> <br>
    <input required type="password" name='pass' placeholder="Senha"><span class='material-icons'>vpn_key</span> <br>

    <input required type="text" pattern="{8,9}" id='cep' name='cep' placeholder="CEP"><span class='material-icons'>filter_2</span> <br>
    <input readonly type="text" name='bairro' id='bairro' placeholder="Bairro"><span class='material-icons'>filter_2</span> <br>
    <input  readonly type="text" name='logradouro' id='logradouro' placeholder="Logradouro"><span class='material-icons'>filter_2</span> <br>
    <input required type="number" name='ncasa' placeholder="Número da casa"><span class='material-icons'>home</span> <br>
<input type="text" name='hint' placeholder="Dica para lembrar da senha"><span class='material-icons'>lightbulb_outline
</span>
<br><br>
<button id='cadastro'> <a href="login.php">Já tenho cadastro</a><br></button><br><br>
<button type="submit">Cadastrar</button>
</fieldset>

</form>
</center>
<?php
include("templates/footer.php");
?>
