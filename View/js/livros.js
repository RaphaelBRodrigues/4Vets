document.getElementById("livro1").src = "https://images-na.ssl-images-amazon.com/images/I/51YW03-YNLL._SX348_BO1,204,203,200_.jpg";
document.getElementById("livro2").src = "https://images-na.ssl-images-amazon.com/images/I/51YW03-YNLL._SX348_BO1,204,203,200_.jpg";


 function fora(id){
    document.getElementById(id).style.transform = "rotateY(0deg)"; 

    setTimeout(function(){
        document.getElementById(id).src = "https://images-na.ssl-images-amazon.com/images/I/51YW03-YNLL._SX348_BO1,204,203,200_.jpg";
       // document.getElementById(id).style.transform = "rotateY(180deg)"; 
    },100)
    }

 function dentro(id){
    document.getElementById(id).style.transform = "rotateY(180deg)"; 



    document.getElementById(id).src = "https://images-na.ssl-images-amazon.com/images/I/51ZLTMyg2KL._SX337_BO1,204,203,200_.jpg";
    setTimeout(function(){
fora(id);
},1300)

}

