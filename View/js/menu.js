var i = 2;
function retrair(){

if(i%2 == 1){
    document.getElementById('home').classList.add('invisivel');
    document.getElementById('novidades').classList.add('invisivel');
    document.getElementById('catalogos').classList.add('invisivel');
    document.getElementById('contatos').classList.add('invisivel');
    document.getElementById('menu-shop').classList.add('invisivel');
    document.getElementById('menu-login').classList.add('invisivel');
    document.getElementById("menu").style.height = "7.1em";
}else{
    document.getElementById('home').classList.remove('invisivel');
    document.getElementById('novidades').classList.remove('invisivel');
    document.getElementById('catalogos').classList.remove('invisivel');
    document.getElementById('contatos').classList.remove('invisivel');
    document.getElementById('menu-shop').classList.remove('invisivel');
    document.getElementById('menu-login').classList.remove('invisivel');
    document.getElementById("menu").style.height = "20em";
}
i++;

    
    }