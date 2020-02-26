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

public function Consultar(){


   
    foreach($this->pdo->query("SELECT * FROM Livro") as $livro){

        echo "
        
        <div class='fileira-bloco' >
        <center>
            <h1 class='fileira-titulo'>".$livro['Titulo']."  
             <br>    
            <small id='fi'>".$livro['Autor']."</small>
            <hr>
            </h1>
            <img src='".$livro['linkImg']."' id='fileira-livro1' class='fileira-img'   alt=''>

            <br><br>         
               <h2>".$livro['Preco']."</h2>

               
               <form action='../Controller/ComprarLivroController.php?' method='get'>
               <button name='LivroID' value='".$livro['LivroID']."' class='button'> <i class='material-icons'>shopping_cart</i> </button>
           
               </form>
           
        </center>
    </div>
        
        ";


    }
}

    public function adicionarLivro(){
        $prepare = $this->pdo->prepare("INSERT INTO Livro values(null,?,?,?,?)");
        $prepare->bindParam(1,$_GET['titulo']);
        $prepare->bindParam(2,$_GET['autor']);
        $prepare->bindParam(3,$_GET['link']);
        $prepare->bindParam(4,$_GET['preco']);
        $prepare->execute();
        if($prepare->rowCount() == 1){
           header("location: ../View/catalogo.php");
        }else{
            header("location: ../View/adicionarLivro.php?status=fail");

        }

    }



}

?>