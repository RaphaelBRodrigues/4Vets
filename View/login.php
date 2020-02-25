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
    <link rel="stylesheet" href="css/login.css">
</head>
<center>
<form action="../Controller/loginController.php" method='get'>
<fieldset id='login'>
    <legend>Login</legend>

<input required type="text" name='nome' placeholder="Usuário"><span class='material-icons'>person</span> <br>
<input required type="password" name='senha' placeholder="Senha"><span class='material-icons'>vpn_key
</span>
<br><br>
<button id='login-button' type="submit">Entrar</button><br><br>
<button id='cadastro'> <a href="cadastro.php">Não tenho cadastro</a><br></button>
<button id='senha'> <a href="cadastro.php">Esqueci minha senha</a><br></button>

<br><br>
</fieldset>

</form>
</center>

</body>
</html>