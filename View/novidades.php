<?php
include("templates/nav.php");
if(@$_GET['status'] == 'failCad'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao realizar o cadastro')</script>";
    unset($_GET['status']);
}
?>
<head>
<link rel="stylesheet" href="css/novidades.css">

</head>
<body>

 <div id='destaques' class='bloco'>

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
            <button id='7' onclick='info(this.id)' class='button'> <i class='material-icons'>info</i> </button>

        </center>
    </div>




    </div>

</body>

<?php
include("templates/footer.php");
?>
    <script src='js/livros.js'></script>
    <script src='js/infoCat.js'></script>
