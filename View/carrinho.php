<?php
include("templates/nav.php");
if($_GET['status'] == 'failCad'){
        //parâmetro passado pelo model usuário no momento do login
    echo "<script>alert('Falha ao realizar o cadastro')</script>";
    unset($_GET['status']); 
}
?>
<head>

<!-- Jquery usado para a requisição ajax,foi o único momento em que utilizei a biblioteca !-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='js/cep.js'></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
</body>

<?php
include("templates/footer.php");
?>
