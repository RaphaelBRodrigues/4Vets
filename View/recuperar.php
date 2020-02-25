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