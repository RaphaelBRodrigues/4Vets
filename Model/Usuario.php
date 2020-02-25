<?php

class Usuario{

private $pdo;


function __construct()
{
    $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=egide","root","password");
    
}

public function Consultar(){
     @session_start();
     foreach($this->pdo->query("SELECT * FROM Usuario where UsuarioID = ".$_SESSION['usrID']."") as $user){

          return $user;
     }
}

public function Atualizar($nome,$cep,$bairro,$logr,$ncasa,$hint){
     @session_start();

$prepare =  $this->pdo->prepare("UPDATE Usuario set  Nome = '".$nome."',cep ='".$cep."', Bairro ='".$bairro."' , Logradouro ='".$logr."', Ncasa ='".$ncasa."', Usuario ='".$nome."', Hint = '".$hint."' where UsuarioID = ".$_SESSION['usrID']."");
$prepare->execute();
return $prepare->rowCount();
}

public function Logar($usuario,$senha){

    foreach($this->pdo->query("SELECT * FROM Usuario") as $user){
echo "Banco:".strtoupper($user['Nome']) ."<br>";
echo "Inserido:".$usuario ."<br><br><br>" ;

echo "Banco:".strtoupper($user['Senha']) ."<br>";
echo "Inserido".$senha;
     if(strtoupper($user['Nome']) == $usuario){
          if(strtoupper($user['Senha']) == $senha){
               session_start();
               $_SESSION['usr'] = $user['Nome'];
               $_SESSION['usrID'] = $user['UsuarioID'];
               $_SESSION['logado'] = true;
               
          header("location: ../index.php?status=successLog");

              return "FOOOOOOOOOOOOOOOOOOOOOOOOOI ";
         // break;

          
     }else if($_SESSION['logado'] != true){
          $_SESSION['logado'] = false;

          echo "n foi";

       // header("location: ../View/login.php?status=FailSenha");

     }
    }else{
     echo "n foi";

     $_SESSION['logado'] = false;

    

    }

      
}
header("location: ../View/login.php?status=FailLog");
return "Falhou";
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
        @session_start();
        $_SESSION['usr'] = strtoupper($_GET['user']);
        foreach($this->pdo->query("SELECT UsuarioID FROM Usuario where UPPER(Nome) = '".$_SESSION['usr']."'") as $user){
          $_SESSION['usrID'] = $user['UsuarioID'];
     }

        $_SESSION['logado'] = true;

       header("location: ../index.php?status=successCad");

     }else{
        header("location: ../View/cadastro.php?status=failCad");

     }
    

}




    
}
?>