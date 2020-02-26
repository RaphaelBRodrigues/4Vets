<?php
include("templates/nav.php");
if(@$_GET['status'] == 'failCad'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao realizar o cadastro')</script>";
    unset($_GET['status']);
}
?>
<head>

<!-- Jquery usado para a requisição ajax,foi o único momento em que utilizei a biblioteca !-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='js/cep.js'></script>
    <link rel="stylesheet" href="css/contatos.css">
</head>
<body>

<center>
<div class='linha'>
<a href="https://api.whatsapp.com/send?phone=5511965482567"><img src="https://ecrie.com.br/sistema/conteudos/imagem/20192251643233970.png" class='icone' alt=""></a>
<a href=""><img src="http://paginapessoal.utfpr.edu.br/sidgleyandrade/skoob.png/image_preview" class='icone' alt=""></a>
<a href="https://www.linkedin.com/in/raphael-b-rodrigues-08b02889/"><img src="https://image.flaticon.com/icons/png/512/174/174857.png" class='icone' alt=""></a>
<a href="https://github.com/RaphaelBRodrigues/"><img src="https://www.pngkit.com/png/detail/442-4423800_github-logo-github-icon.png" class='icone' alt=""></a>

</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190028.2570931247!2d12.395912211157928!3d41.910241488095714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f6196f9928ebb%3A0xb90f770693656e38!2zUm9tYSwgSXTDoWxpYQ!5e0!3m2!1spt-BR!2sbr!4v1582737659490!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</center>

</body>

<?php
include("templates/footer.php");
?>
