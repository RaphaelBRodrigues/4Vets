<?php
include("templates/nav.php");
if($_GET['status'] == 'failCad'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao realizar o cadastro')</script>";
    unset($_GET['status']); 
}
?>
<head>


    <link rel="stylesheet" href="css/catalogo.css">
</head>
<body>
    


<center>

<a href="adicionarLivro.php"><button class='botao' id='adicionar'>Adicionar um novo livro</button></a>


<div id='linha'>
    
    <div class='fileira-bloco' id='b1' >
        <center>
            <h1 class='fileira-titulo'>Fahrenheit 451  
             <br>    
            <small id='fi'>Ray Bradbury</small>
            <hr>
            </h1>
            <img src='https://images-na.ssl-images-amazon.com/images/I/71OFqSRFDgL.jpg' id='fileira-livro1' class='fileira-img'   alt="">

            <br><br>         
               <h2>R$50,00</h2>

              <button class='button'> <i class='material-icons'>shopping_cart</i> </button>

        </center>
    </div>

    <div class='fileira-bloco' id='b2'>
        <center>
            <h1 class='fileira-titulo'>1984   
             <br>    
            <small id='fi'>George Orwell</small>
            <hr>
            </h1>
            <img src='https://lojasaraiva.vteximg.com.br/arquivos/ids/12101548/1008972955.jpg?v=637142220125430000' id='fileira-livro2' class='fileira-img'    alt="">

            <br><br>   
             <h2>R$50,00</h2>

            <button class='button'> <i class='material-icons'>shopping_cart</i>  </button>
            
        </center>
    </div>
    

    
    </div>



    </center>
</body>
<?php
include("templates/footer.php");
?>
