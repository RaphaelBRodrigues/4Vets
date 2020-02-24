document.getElementById("livro1").src = "http://lojasaraiva.vteximg.com.br/arquivos/ids/12115848/1008609552.jpg?v=637142273191770000";
document.getElementById("livro2").src = "http://lojasaraiva.vteximg.com.br/arquivos/ids/12107444/1008975936.jpg?v=637142242124430000";


var idd = null;
 function fora(id){
     if(id == "livro1"){
         img = "http://lojasaraiva.vteximg.com.br/arquivos/ids/12115848/1008609552.jpg?v=637142273191770000";

    }
    if(id == "livro2"){
        img = "http://lojasaraiva.vteximg.com.br/arquivos/ids/12107444/1008975936.jpg?v=637142242124430000";

   }

    document.getElementById(id).style.transform = "rotateY(0deg)"; 

    setTimeout(function(){
        document.getElementById(id).src = img;
       // document.getElementById(id).style.transform = "rotateY(180deg)"; 
    },100)
    }

 function dentro(id){
    if(id == "livro1"){
        img = "http://lojasaraiva.vteximg.com.br/arquivos/ids/3230761/1008609529.jpg?v=637033836534000000";

   }
   if(id == "livro2"){
       img = "http://lojasaraiva.vteximg.com.br/arquivos/ids/12110072/1006546026.jpg?v=637142251851070000";

  }
    document.getElementById(id).style.transform = "rotateY(180deg)"; 



    document.getElementById(id).src = img;
    setTimeout(function(){
fora(id);
},1300)

}

