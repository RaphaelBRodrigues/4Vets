<?php

class Usuario{

private $pdo;


function __construct()
{
    $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=egide","root","password");
    
}

public function Cadastrar(){

     $prepare = $this->pdo->prepare("INSERT INTO Usuario(UsuarioID, Nome, cep, Ncasa, Senha, Usuario) values(null,?,?,?,?,?)");
     $prepare->bindParam(1,$_GET['user']);
    $prepare->bindParam(2,$_GET['pass']);
  $prepare->bindParam(3,$_GET['cep']);
     $prepare->bindParam(4,$_GET['ncasa']);
     $prepare->bindParam(5,$_GET['hint']);    

$prepare->execute();
     if($prepare->rowCount() == 1){
        header("location: ../index.php?status=1");
     }else{
        header("location: ../View/cadastro.php?status=0");

     }
    

}




    
}
?>