<?php

class Livro{


    private $pdo;


    function __construct()
    {
        $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=egide","root","password");
        
    }

    public function adicionarLivro(){
        $prepare = $this->pdo->prepare("INSERT INTO Livro values(null,?,?,?)");
        $prepare->bindParam(1,$_GET['titulo']);
        $prepare->bindParam(2,$_GET['autor']);
        $prepare->bindParam(3,$_GET['preco']);
        $prepare->execute();
        if($prepare->rowCount() == 1){
           header("location: ../View/catalogo.php");
        }else{
            header("location: ../View/adicionarLivro.php?status=fail");

        }

    }



}

?>