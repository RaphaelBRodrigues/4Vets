<?php
include("templates/nav.php");
@session_start();
if(@isset($_SESSION['usr'])){
    echo "<script>alert('Você já está logado como:".$_SESSION['usr']."')
    window.location.href = ../index.php ;
    </script>";
}
if(@$_GET['status'] == 'FailSenha' ){
echo "<script>alert('Senha inválida')</script>";
}
if(@$_GET['status'] == 'FailLog' ){
    echo "<script>alert('Credenciais inválidas')</script>";
    }
?>
<head>
    <script src='js/recuperarSenha.js'></script>
    <link rel="stylesheet" href="css/info.css">
</head>
    <body>

    <div id='content'>
    <?php
     include_once('../Controller/infoLivroController.php');


     ?>
</div>
</body>

<?php
include("templates/footer.php");
?>
