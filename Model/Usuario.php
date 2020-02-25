<?php

class Usuario{

private $pdo;


function __construct()
{
    $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=egide","root","password");
    
}

public function Consultar(){
     foreach($this->pdo->query("SELECT * FROM Usuario where UsuarioID = 1") as $user){

          return $user;
     }
}

public function Atualizar(){
     //Falta implementar
     foreach($this->pdo->query("SELECT * FROM Usuario where UsuarioID = 1") as $user){

          return $user;
     }
}

public function Logar(){

    foreach($this->pdo->query("SELECT * FROM Usuario") as $user){

         echo strtoupper($user['Nome']) ;
         echo strtoupper($user['Senha']);
         echo strtoupper($_GET['nome']);
         echo strtoupper($_GET['senha']);

         if(strtoupper($user['Nome']) == strtoupper($_GET['nome']) ){
          if(strtoupper($user['Senha']) == strtoupper($_GET['senha'])){
               session_start();
               $_SESSION['usr'] = $user['Nome'];
              $_SESSION['logado'] = true;
               header("location: ../index.php?status=successLog");


          }else{
               header("location: ../View/login.php?status=FailSenha");

          }
         }else{
          header("location: ../View/login.php?status=FailLog");

         }

    }
}


public function Cadastrar(){

     $prepare = $this->pdo->prepare("INSERT INTO Usuario(UsuarioID, Nome, cep, Bairro, Logradouro, Ncasa, Senha, Usuario, Hint) values(null,?,?,?,?,?,?,?,?)");
     $prepare->bindParam(1,$_GET['user']);
    $prepare->bindParam(2,$_GET['cep']);
    $prepare->bindParam(3,$_GET['bairro']);
    $prepare->bindParam(4,$_GET['logradouro']);
    $prepare->bindParam(5,$_GET['ncasa']);
    $prepare->bindParam(6,$_GET['pass']);
    $prepare->bindParam(7,$_GET['user']);
     $prepare->bindParam(8,$_GET['hint']);    

$prepare->execute();
     if($prepare->rowCount() == 1){
        session_start();
        $_SESSION['usr'] = $_GET['user'];
        $_SESSION['logado'] = true;

       header("location: ../index.php?status=successCad");

     }else{
        header("location: ../View/cadastro.php?status=failCad");

     }
    

}




    
}
?>