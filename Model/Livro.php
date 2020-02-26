<?php

class Livro{


    private $pdo;


    function __construct()
    {
        $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=egide","root","password");
        
    }



public function deletarLivro(){
$prepare = $this->pdo->prepare("DELETE FROM Livro WHERE LivroID = 3");
$prepare->execute();

if($prepare->rowCount() == 1){
    header("location: ../View/catalogo.php");
    }else{
        header("location: ../View/catalogo.php?status=failDeletar");
      
    }
}

public function infoLivro(){
    foreach($this->pdo->query("SELECT * FROM Livro where LivroID = ".$_GET['idLivro']."") as $livro){
      echo "
      
   <h1>   Nome do livro: ".$livro['Titulo']."</h1>
    <h2>  Autor:  ".$livro['Autor']."</h2>
    <img src=' ".$livro['linkImg']."'>
    <h3>".$livro['Descricao']."</h3>
      ";
    
    }
    }

    public function deletarProdutoCatalogo(){

        $livroID = $_GET['id'];
        echo $livroID;

        $prepare = $this->pdo->prepare("DELETE FROM Livro where LivroID = ".$livroID."");
        $prepare->execute();

        if($prepare->rowCount() == 1){
            header("location: ../View/catalogo.php?status=delSuc");

        }else{
            header("location: ../View/catalogo.php?status=delFail");

        }


       

    }

public function Consultar(){


   
    foreach($this->pdo->query("SELECT * FROM Livro") as $livro){

        echo "
        <script src='js/infoCat.js'></script>

        <div class='fileira-bloco' >
        <center>
            <h1 class='fileira-titulo'>".$livro['Titulo']."  
             <br>    
            <small id='fi'>".$livro['Autor']."</small>
            <hr>
            </h1>
            <form action='../Controller/deletarProdutoCatalogoController.php'>
            <button name='id' value='".$livro['LivroID']."' class='button material-icons' id='X'>remove_circle</button>
            </form>
            <img src='".$livro['linkImg']."' id='fileira-livro1' class='fileira-img'   alt=''>

            <br><br>         
               <h2>R$ ".$livro['Preco']."</h2>

               
               <form action='../Controller/ComprarLivroController.php?' method='get'>
               <button name='LivroID' value='".$livro['LivroID']."' class='button'> <i class='material-icons'>shopping_cart</i> </button>

               </form>          
                    <button  id='".$livro['LivroID']."' onclick='info(this.id)' class='button'> <i class='material-icons'>info</i> </button>

           
        </center>
    </div>
        
        ";


    }
}

    public function adicionarLivro(){
        $prepare = $this->pdo->prepare("INSERT INTO Livro values(null,?,?,?,?,?)");
        $prepare->bindParam(1,$_GET['titulo']);
        $prepare->bindParam(2,$_GET['autor']);
        $prepare->bindParam(3,$_GET['link']);
        $prepare->bindParam(4,$_GET['desc']);
        $prepare->bindParam(5,$_GET['preco']);
        $prepare->execute();
        if($prepare->rowCount() == 1){
           header("location: ../View/catalogo.php");
        }else{
            header("location: ../View/adicionarLivro.php?status=fail");

        }

    }



}

?>