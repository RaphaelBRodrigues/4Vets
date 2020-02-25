<?php
@session_start();
if($_SESSION['logado']){
    $log = "verified_user";
    $linkLogin = "../Controller/ConsultarController.php";

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
</head>
<body>
    <nav id='menu'>
        <ul id='menu-list'>
   <li>  <a class='menu-item' href='../index.php'><span id='logo'>Sob a Égide</span> </a></li>
   <li>  <a class='menu-item' href='../index.php'><i> Home </i></a></li>
   <li>  <a class='menu-item' href='#destaques'><i> Novidades </i></a></li>
   <li>  <a class='menu-item' href='catalogo.php'><i> Catálogo </i></a></li>
   <li>  <a class='menu-item' href=''><i> Contatos </i></a></li>

   <li><a href=''> <i class='menu-item material-icons' id='menu-shop'>shopping_cart</i></a></li>
   <li><a href='".$linkLogin."'><i class='menu-item material-icons' id='menu-login'>".$log."</i></a></li>
</ul>
   
    </nav>


    ";
?>
<style>
body{
margin-top:3.4em;
}
</style>