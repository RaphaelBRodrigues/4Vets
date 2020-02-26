<?php

class Carrinho{


    private $pdo;


    function __construct()
    {
        $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=egide","egide","password");

    }


    public function Comprar(){
        @session_start();
        echo "oi";
        foreach($this->pdo->query("SELECT * FROM Livro WHERE LivroID = ".$_GET['LivroID']."") as $livro){

        $prepare = $this->pdo->prepare("INSERT INTO Carrinho values(null,?,?,?)");
        $prepare->bindParam(1,$_GET['LivroID']);
        $prepare->bindParam(2,$_SESSION['usrID']);
        $prepare->bindParam(3,$_SESSION['sessaoID']);
        $prepare->execute();
        }
        if($prepare->rowCount() == 1){
        header("location: ../View/carrinho.php");
        }else{
            header("location: ../View/catalogo.php?status=fail");

        }
        }

        public function mostrarCarrinho(){
            $total= 0 ;
            $quantidade = 0;
            @session_start();
            foreach($this->pdo->query("select * from Carrinho INNER JOIN Livro where Livro.LivroID = Carrinho.LivroID and Carrinho.UsuarioID = ".$_SESSION['usrID']." and Carrinho.SessaoID = ".$_SESSION['sessaoID']."") as $itens){
                $quantidade++;
                $total += $itens['Preco'];
                echo "

              <h3 id='nome'>  ".$itens['Titulo']."(".$itens['Autor'].")</h3>
              <p id='preco'> R$".$itens['Preco']." <br> </p>
              <i class='material-icons' id='x' onclick='deletar(".$itens['CarrinhoID'].")' id='deletar' >remove_circle</i>
<hr id='separador'>
                ";




               // echo "<script>alert(".$itens['LivroID'].");</script>";
            }
            echo "<h2 id='total'>ID da sessão:".$_SESSION['sessaoID']."</h2>";
            echo "<h2 id='total'>Valor total da compra:".$total."</h2>";
            echo "<h2 id='total'>Quantidade de itens no carrinho:".$quantidade."</h2>";
            return $total;

        }


        public function removerItemCarrinho(){

            $itemID = $_GET['id'];

            $prepare = $this->pdo->prepare("DELETE FROM Carrinho where CarrinhoID = ".$itemID."");
            $prepare->execute();

                header("location: ../View/carrinho.php?");



        }
}

?>
