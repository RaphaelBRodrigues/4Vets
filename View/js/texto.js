var texto = "Bem vindo a sua livraria virtual favorita!";
var textoQuebrado = texto.split("");
var i = 0;
var show = null;

show = setInterval(function(){

    tela = document.getElementById("main-text").innerHTML;
document.getElementById("main-text").innerHTML = tela + textoQuebrado[i];

    i++;

    if(i >= textoQuebrado.length){
        clearInterval(show);

    }

},200)