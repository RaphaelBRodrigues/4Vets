<?php

class Livro{


    private $pdo;


    function __construct()
    {
        $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=egide","egide","password");

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

public function consultarAtualizarLivro(){
$id = $_GET['id'];
  foreach($this->pdo->query("SELECT * From Livro Where LivroID =  ".$id."") as $form){

echo "
<input required type='text' name='titulo' value='".$form['Titulo']."'  placeholder='Titulo'>
<input required type='text' name='autor'  value='".$form['Autor']."' placeholder='Autor'>
<textarea required type='text' name='desc'   placeholder='Descrição da obra'>".$form['Descricao']."</textarea>
<input required type='text' name='link'  value='".$form['linkImg']."' placeholder='Link da imagem de capa'>
<input required type='number' step='0.5'  value='".$form['Preco']."' name='preco' placeholder='Preço'>
<br><br>
<button id='cadastro' type='submit' name='atualizar' value='".$id."'>Atualizar</button><b></b>

";



  }
}


public function atualizarLivro(){
$prepare = $this->pdo->prepare("UPDATE Livro SET Titulo = ?, Autor = ?, linkImg = ?, Descricao = ?, Preco = ? WHERE LivroID = ?");


$prepare->bindParam(1,$_GET['titulo']);
$prepare->bindParam(2,$_GET['autor']);
$prepare->bindParam(3,$_GET['link']);
$prepare->bindParam(4,$_GET['desc']);
$prepare->bindParam(5 ,$_GET['preco']);
$prepare->bindParam(6 ,$_GET['atualizar']);
$prepare->execute();

if($prepare->rowCount() == 1){
  header("location: ../View/catalogo.php?status=attSuc");
}else{
  header("location: ../View/atualizarLivro.php?status=fail&id=".$_GET['atualizar']."");

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
      if(empty($livro['linkImg'])){
      $livro['linkImg'] = 'https://cdn4.iconfinder.com/data/icons/modern-education-01-line/128/ebook-reading_knowledge_publishing_student_education_template_reading_book_tablet_hold-512.png';
      }

        echo "
        <script src='js/infoCat.js'></script>

        <div class='fileira-bloco' >
        <center>
            <h1 class='fileira-titulo'>".$livro['Titulo']."
             <br>
            <small id='fi'>".$livro['Autor']."</small>
            <hr>
            </h1>
<div>
          <a href='../Controller/deletarProdutoCatalogoController.php?id=".$livro['LivroID']."'> <button title='Remover livro' name='id' value='".$livro['LivroID']."' class='button material-icons' id='X'>remove_circle</button></a>
          <a href='../View/atualizarLivro.php?id=".$livro['LivroID']."'>     <button title='Atualizar Livro' name='id' value='".$livro['LivroID']."' class='button material-icons' id='X'>border_color</button></a>
</div>
            <img src='".$livro['linkImg']."' id='fileira-livro1' class='fileira-img'   alt=''>

            <br><br>
               <h2>R$ ".$livro['Preco']."</h2>

               <form action='../Controller/ComprarLivroController.php?' method='get'>
               <button title='Comprar Livro' name='LivroID' value='".$livro['LivroID']."' class='button'> <i class='material-icons'>shopping_cart</i> </button>

               </form>
                    <button title='Informações do livro'  id='".$livro['LivroID']."' onclick='info(this.id)' class='button'> <i class='material-icons'>info</i> </button>

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
