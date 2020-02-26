<?php

class Compra{


    private $pdo;


    function __construct()
    {
        $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=egide","egide","password");

    }

    public function efetuarCompra(){
        @session_start();
        if($_POST['valor'] != 0){
          $total = $_POST['valor'];

        }else{
          header("location:../View/catalogo.php?status=totInv");

        }
      $prepare = $this->pdo->prepare("INSERT INTO Compra(Total,UsuarioID,SessaoID) values(".$total.",".$_SESSION['usrID'].",".$_SESSION['sessaoID'].")");
    $prepare->execute();
  if($prepare->rowCount() == 1){
    header("location:../View/compraFinalizada.php");
  }else{
    header("location:../View/carrinho.php?status=totInv");

  }
    }

    public function consultarCompra(){
        @session_start();
       foreach($this->pdo->query("select * from Compra Where UsuarioID = ".$_SESSION['usrID']." ORDER BY CompraID DESC") as $compra){

echo "<br><br>
<fieldset id='compra'>
<legend>Histórico</legend>


<input readonly  type='text' name='compraID' placeholder='ID' value='ID:".$compra['SessaoID']."'><span class='material-icons'>fingerprint</span> <br>
";


echo "<br>
<input readonly type='text' id='cep' name='cep' placeholder='Total' value='Total:R$".$compra['Total']."'><span class='material-icons'>money</span> <br>


";

echo "<ul> <h3>Itens:</h3> ";


foreach($this->pdo->query("SELECT * FROM Carrinho INNER JOIN Livro Where Carrinho.SessaoID = ".$compra['SessaoID']." and Carrinho.LivroID = Livro.LivroID") as $itens){
    echo "<li>".$itens['Titulo']."</li>";
}


    echo "</ul> </fieldset>

    ";


        }
        $_SESSION['sessaoID'] = rand();
       }
}
    ?>
