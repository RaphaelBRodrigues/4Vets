<?php
include("templates/nav.php");
@session_start();
if(isset($_SESSION['usr'])){
    echo "<script>alert('Você já está logado como:".$_SESSION['usr']."')
    window.location.href = ../index.php ;
    </script>";
}
if($_GET['status'] == 'FailSenha' ){
echo "<script>alert('Senha inválida')</script>";
}
if($_GET['status'] == 'FailLog' ){
    echo "<script>alert('Credenciais inválidas')</script>";
    }
?>
<head>
    <script src='js/recuperarSenha.js'></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
<center>

<fieldset id='login'>
<legend>Login</legend>

<form action="../Controller/loginController.php" method='post'>

<input required type="text" name='nome' id='nome' placeholder="Usuário"><span class='material-icons'>person</span> <br>
<input  type="password" name='senha' placeholder="Senha"><span class='material-icons'>vpn_key
</span>
<br><br>
<button id='login-button' type="submit">Entrar</button><br><br>
</form>
<button id='cadastro'> <a href="cadastro.php">Não tenho cadastro</a></button>

<button id='senha' onclick="recuperar()"> Esqueci minha  senha</button>
<br><br>


</fieldset>
</body>

</center>
<?php
include("templates/footer.php");
?>


