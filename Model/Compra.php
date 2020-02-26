<?php

class Compra{


    private $pdo;


    function __construct()
    {
        $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=egide","root","password");
        
    }

    public function efetuarCompra(){
        @session_start();
        $total = $_POST['valor'];
      $prepare = $this->pdo->prepare("INSERT INTO Compra(Total,UsuarioID) values(".$total.",".$_SESSION['usrID'].")");
    $prepare->execute();
    $prepare->rowCount();
    header("location:../View/compraFinalizada.php");
    }

    public function consultarCompra(){
       foreach($this->pdo->query("select * from Compra ORDER BY CompraID DESC") as $compra){

echo "
<input readonly  type='text' name='compraID' placeholder='ID' value='ID:".$compra['CompraID']."'><span class='material-icons'>fingerprint</span> <br>

<input readonly type='text' id='cep' name='cep' placeholder='Total' value='Total:R$".$compra['Total']."'><span class='material-icons'>money</span> <br>

<hr>

";


        }
       }
}
    ?>