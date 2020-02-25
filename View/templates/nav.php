<?php
@session_start();
if($_SESSION['logado']){
    $log = 'verified_user';
    $linkLogin = '../Controller/ConsultarUsuarioController.php';

}else{
    $linkLogin = 'login.php';
    $log = 'person_pin';
}
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<link rel='shortcut icon' href='https://i.ya-webdesign.com/images/transparent-favicons-books-11.png'>
<meta name='theme-color' content='#95a5a6'>

    <link href='https://fonts.googleapis.com/css?family=Dancing+Script&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Raleway&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat&display=swap' rel='stylesheet'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/index.css'>
    <title>4Vets</title>

<script src='js/menu.js'></script>
</head>
<body>
    <nav id='menu'>
    <ul id='menu-list'>
    <li>  <a class='menu-item log' href='../index.php'><span id='logo'>Sob a Égide</span> </a> <button class='material-icons retratil button' onclick='retrair()'>menu</button></li> 
    <li>  <a class='menu-item invisivel' href='../index.php' id='home'><i> Home </i></a></li>
    <li>  <a class='menu-item invisivel' id='novidades' href='novidades.php'><i> Novidades </i></a></li>
    <li>  <a class='menu-item invisivel' id='catalogos' href='catalogo.php'><i> Catálogo </i></a></li>
    <li>  <a class='menu-item invisivel' id='contatos' href='contatos.php'><i> Contatos </i></a></li>
     
    <li><a href='carrinho.php'> <i class='menu-item material-icons invisivel' id='menu-shop'>shopping_cart</i></a></li>
    <li><a href='".$linkLogin."'><i class='menu-item material-icons invisivel' id='menu-login'> ".$log."</i></a></li>
 </ul>
   
    </nav>


    ";
?>
<style>
body{
margin-top:3.4em;

}

@media screen and (max-width:1088px) {
    body{
margin-top:1.4em;

}
}
</style>