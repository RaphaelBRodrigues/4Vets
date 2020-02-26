var texto = "Bem vindo a sua livraria virtual favorita!";
var textoQuebrado = texto.split("");
var letra = 0;
var show = null;

show = setInterval(function(){

    tela = document.getElementById("main-text").innerHTML;
document.getElementById("main-text").innerHTML = tela + textoQuebrado[letra];

letra+=1;

    if(letra >= textoQuebrado.length){
        clearInterval(show);

    }

},200)