<?php 
require '../Model/Usuario.php';

$user = new Usuario();

echo "<script>alert('Dica para lembrar da sua senha:".$user->Consultar()."');
window.location.replace('../View/login.php?');

</script>";


?>