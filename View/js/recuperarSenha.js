function recuperar(){

nome = document.getElementById('nome').value;
nome = nome.toUpperCase();
if(nome != ""){
    window.location.replace("../Controller/Recuperar.php?funcao=recuperar&nome="+nome+"");

}else{
    alert("Preencha o campo de usuário");


}

}

