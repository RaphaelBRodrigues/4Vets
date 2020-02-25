<?php

require '../Model/Livro.php';

$livro = new Livro();

echo $_GET['titulo'];
echo $_GET['preco'];
echo $_GET['autor'];


echo $livro->adicionarLivro();


?>