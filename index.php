<!DOCTYPE html>
<html lang="en">
<head>

<?php
$log = 'person_pin';
if($_GET['status'] == 'successCad'){
    unset($_GET['status']); 

    session_start();
    //parâmetro passado pelo model usuário no momento do cadastro
    $log = "verified_user";

}
if($_GET['status'] == 'successLog'){
    unset($_GET['status']); 

    session_start();
    //parâmetro passado pelo model usuário no momento do Login
    $log = "verified_user";

}
if($_GET['status'] == 'successLog'){
        //parâmetro passado pelo model usuário no momento do login

    echo "<script>alert('Login efetuado com sucesso')</script>";
    unset($_GET['status']); 
}
?>

<meta charset="UTF-8">
<link rel="shortcut icon" href="https://i.ya-webdesign.com/images/transparent-favicons-books-11.png">
<meta name="theme-color" content="#95a5a6">


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
   <li>  <a class='menu-item' href="View/"><span id='logo'>Sob a Égide</span> </a></li>
   <li>  <a class='menu-item' href="View/"><i> Home </i></a></li>
   <li>  <a class='menu-item' href="#destaques"><i> Novidades </i></a></li>
   <li>  <a class='menu-item' href="View/catalogo.php"><i> Catálogo </i></a></li>
   <li>  <a class='menu-item' href="View/"><i> Contatos </i></a></li>

   <li><a href=""> <i class='menu-item material-icons' id='menu-shop'>shopping_cart</i></a></li>
   <li><a href="View/login.php"><i class='menu-item material-icons' id='menu-login'><?php echo $log; ?></i></a></li>
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
              <button class='button'> <i class='material-icons'>shopping_cart</i> </button>
              <button class='button'> <i class='material-icons'>info</i> </button>

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
            <button class='button'> <i class='material-icons'>shopping_cart</i> </button>
            <button class='button'> <i class='material-icons'>info</i> </button>
            
        </center>
    </div>
    


    
    </div>

   
    <h1 id='catalogo' class='bar'>Catálogo</h1>


    <div id='destaques'>
    
    <div class='catalogo-bloco' id='catalogo-bloco-1'>
        <center>
            <h2 class='catalogo-titulo'>Fahrenheit 451  
             <br>    
            <small id='fi'>Ray Bradbury</small>
            <hr>
            </h2>
            <img src='https://images-na.ssl-images-amazon.com/images/I/71OFqSRFDgL.jpg' id='catalogo-livro1' class='catalogo-img'   alt="">
            <br><br>
              <button class='button'> <i class='material-icons'>shopping_cart</i> </button>
              <button class='button'> <i class='material-icons'>info</i> </button>

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
            <button class='button'> <i class='material-icons'>shopping_cart</i> </button>
            <button class='button'> <i class='material-icons'>info</i> </button>
            
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
              <button class='button'> <i class='material-icons'>shopping_cart</i> </button>
              <button class='button'> <i class='material-icons'>info</i> </button>

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
            <button class='button'> <i class='material-icons'>shopping_cart</i> </button>
            <button class='button'> <i class='material-icons'>info</i> </button>
            
        </center>
    </div>
    
    
    </div>
    <center>
    <button class='button' id='ver-mais'><a href="View/catalogo.php" class='menu-item'> Ver mais <span id='olho' class='material-icons'>visibility</span> </a> </button>
    </center>


    <h1 id='contatos' class='bar'>contatos</h1>

    <form action="" method="post">

    <fieldset>
        <legend>Email</legend>
        
        <center>
        <input type="text" placeholder="Email">
        <sup class='material-icons'>mail</sup>

        <br>
        <input id='form-msg' type="text" placeholder="Mensagem">  <sup class='material-icons'>mail</sup>
<br>
        <button id='form-button-submit' class='button' type='submit'>Enviar</button><br><br>
        <button id='form-button-reset' class='button' type='reset'>Apagar</button>
        </center>
    </fieldset>
    </form>

</body>
</html>
<script src='View/js/livros.js'></script>
<script src='View/js/texto.js'></script>
