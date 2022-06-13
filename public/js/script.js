function siguiente(){
    let imagen=document.getElementById("yotsuba");
    const numero=document.getElementById("numerofoto").innerHTML.toString().substring(0,1);
    let numfoto= parseInt(numero)+1;

    if  ( numero<6){
        imagen.setAttribute("src","D:/3er semestre/prog web/elblok/img/"+numfoto+"yotsuba.jpg");
        imagen.style.objectFit="contain";
        document.getElementById("numerofoto").innerHTML=numfoto+"/6";
    }

}
function anterior(){
    let imagen=document.getElementById("yotsuba");
    const numero=document.getElementById("numerofoto").innerHTML.toString().substring(0,1);
    let numfoto= parseInt(numero)-1;

    if (numero>1){
        imagen.setAttribute("src","D:/3er semestre/prog web/elblok/img/"+numfoto+"yotsuba.jpg");
        imagen.style.objectFit="contain";
        document.getElementById("numerofoto").innerHTML=numfoto+"/6";
    }


    
}