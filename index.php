<!DOCTYPE html>
<html lang="en">
<head>

<?php
if(@empty($_SESSION['usrID'] == true)){

@session_destroy();
$linkLogin = 'View/login.php';
    $log = 'person_pin';

}
@session_start();
//echo "<script>alert(".$_SESSION['usrID'].");</script>";
if(@$_SESSION['logado'] == 1){
    $log = "verified_user";
    $linkLogin = "Controller/ConsultarUsuarioController.php";

}else{
    $linkLogin = 'View/login.php';
    $log = 'person_pin';
}
// if($_GET['status'] == 'successCad'){
//     unset($_GET['status']);

//     //parâmetro passado pelo model usuário no momento do cadastro

// }
// if($_GET['status'] == 'successLog'){
//         //parâmetro passado pelo model usuário no momento do login
//     echo "<script>alert('Login efetuado com sucesso')</script>";
//     unset($_GET['status']);
// }
?>

<meta charset="UTF-8">
<link rel="shortcut icon" href="https://i.ya-webdesign.com/images/transparent-favicons-books-11.png">
<meta name="theme-color" content="#95b5a6">


    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="View/css/index.css">
    <title>4Vets</title>
</head>
<body>
    <nav id='menu'>
        <ul id='menu-list'>
   <li>  <a class='menu-item log' href="#"><span id='logo'>Sob a Égide</span> </a> <button class='material-icons retratil button' onclick='retrair()'>menu</button></li>
   <li>  <a class='menu-item invisivel' href="#" id='home'><i> Home </i></a></li>
   <li>  <a class='menu-item invisivel' id='novidades' href="View/novidades.php"><i> Novidades </i></a></li>
   <li>  <a class='menu-item invisivel' id='catalogos' href="View/catalogo.php"><i> Catálogo </i></a></li>
   <li>  <a class='menu-item invisivel' id='contatos' href="View/contatos.php"><i> Contatos </i></a></li>

   <li><a href="View/carrinho.php"> <i title='Carrinho' class='menu-item material-icons invisivel' id='menu-shop'>shopping_cart</i></a></li>
   <li><a href="<?php echo $linkLogin;?>"><i  title='Usuário' class='menu-item material-icons invisivel' id='menu-login'><?php echo $log; ?></i></a></li>
</ul>

    </nav>

    <div id='main'>

        <div id='main-escuro'>
        <center>
        <h1 id='main-text' ></h1>
        </center>
        </div>

    </div>
    <h1 id='novidades' class='bar'>Ultímas Aquisições</h1>

    <div id='destaques'>

    <div class='destaque-bloco' id='destaques-bloco-1'>
        <center>
            <h2 class='destaque-titulo'>Os irmãos Karamazov
             <br>
            <small id='fi'>Fiódor Dostoiévski</small>
            <hr>
            </h2>
            <img src='' id='livro1' class='destaque-img'  onmouseover='dentro(this.id)'  alt="">
            <br><br>
            <a href="View/catalogo.php">  <button class='button'> <i class='material-icons'>shopping_cart</i> </button></a>
              <button id='6' onclick='info(this.id)' class='button'> <i class='material-icons'>info</i> </button>

        </center>
    </div>

    <div class='destaque-bloco' id='destaques-bloco-2'>
        <center>
            <h2 class='destaque-titulo'>A Guerra dos mundos
             <br>
            <small id='fi'>H.G Wells</small>
            <hr>
            </h2>
            <img src='' id='livro2' class='destaque-img'  onmouseover='dentro(this.id)'  alt="">
            <br><br>
            <a href="View/catalogo.php">  <button class='button'> <i class='material-icons'>shopping_cart</i> </button></a>
            <button  id='7' onclick='info(this.id)' class='button'> <i class='material-icons'>info</i> </button>

        </center>
    </div>




    </div>


    <h1 id='catalogo' class='bar'>Catálogo</h1>


    <div id='catalogo'>

    <div class='catalogo-bloco' id='catalogo-bloco-1'>
        <center>
            <h2 class='catalogo-titulo'>Fahrenheit 451
             <br>
            <small id='fi'>Ray Bradbury</small>
            <hr>
            </h2>
            <img src='https://images-na.ssl-images-amazon.com/images/I/71OFqSRFDgL.jpg' id='catalogo-livro1' class='catalogo-img'   alt="">
            <br><br>
            <a href="View/catalogo.php">   <button class='button'> <i class='material-icons'>shopping_cart</i> </button></a>
              <button class='button' id='2' onclick='info(this.id)'> <i class='material-icons'>info</i> </button>

        </center>
    </div>

    <div class='catalogo-bloco' id='catalogo-bloco-2'>
        <center>
            <h2 class='catalogo-titulo'>1984
             <br>
            <small id='fi'>George Orwell</small>
            <hr>
            </h2>
            <img src='https://lojasaraiva.vteximg.com.br/arquivos/ids/12101548/1008972955.jpg?v=637142220125430000' id='catalogo-livro2' class='catalogo-img'    alt="">
            <br><br>
            <a href="View/catalogo.php">  <button class='button'> <i class='material-icons'>shopping_cart</i> </button></a>
            <button id='1' onclick='info(this.id)' class='button'> <i class='material-icons'>info</i> </button>

        </center>
    </div>


    <div class='catalogo-bloco' id='catalogo-bloco-1'>
        <center>
            <h2 class='catalogo-titulo'>Íliada
             <br>
            <small id='fi'>Homero</small>
            <hr>
            </h2>
            <img src='https://www.companhiadasletras.com.br/images/livros/85050_gg.jpg' id='catalogo-livro3' class='catalogo-img'   alt="">
            <br><br>
            <a href="View/catalogo.php">    <button class='button'> <i class='material-icons'>shopping_cart</i> </button></a>
              <button id='4' onclick='info(this.id)' class='button'> <i class='material-icons'>info</i> </button>

        </center>
    </div>

    <div class='catalogo-bloco' id='catalogo-bloco-2'>
        <center>
            <h2 class='catalogo-titulo'>A Divina comédia
             <br>
            <small id='fi'>Dante Alighieri</small>
            <hr>
            </h2>
            <img src='https://images-na.ssl-images-amazon.com/images/I/51DLakKYLVL.jpg' id='catalogo-livro4' class='catalogo-img'   alt="">
            <br><br>
            <a href="View/catalogo.php">  <button class='button'> <i class='material-icons'>shopping_cart</i> </button></a>
            <button id='5' onclick='info(this.id)' class='button'> <i class='material-icons'>info</i> </button>

        </center>
    </div>


    </div>
    <center>
    <button class='button' id='ver-mais'><a href="View/catalogo.php" class='menu-item'> Ver mais <span id='olho' class='material-icons'>visibility</span> </a> </button>
    </center>


    <h1 id='contatos' class='bar'>contatos</h1>

    <form action="https://formspree.io/tiunasp801@gmail.com" method="post">

    <fieldset>
        <legend>Email</legend>

        <center>
        <input  type="email" required ame="email" placeholder="Email">
        <sup class='material-icons'>mail</sup>

        <br>
        <input required id='form-msg' name="message" type="text" placeholder="Mensagem">  <sup class='material-icons'>textsms</sup>
<br><br>
        <button id='form-button-submit' class='button' type='submit'>Enviar</button><br><br>
        <button id='form-button-reset' class='button' type='reset'>Apagar</button>
        </center><br>
    </fieldset>
    </form>


    <?php
include("View/templates/footer.php");
?>

</body>
</html>
<script src='View/js/menu.js'></script>
<script src='View/js/texto.js'></script>
<script src='View/js/livros.js'></script>
<script src='View/js/info.js'></script>
