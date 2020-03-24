function animar() {
    setTimeout(function(){
        docentes.innerHTML = 200;
    }, 1000);
    setTimeout(function(){
        colegios.innerHTML = 15;
    }, 1000);
    setTimeout(function(){
        voluntarios.innerHTML = 100;
    }, 1000);
    setTimeout(function(){
        estudiantes.innerHTML = 1500;
    }, 1000);
    setTimeout(function(){
        organizaciones.innerHTML = 50;
    }, 1000);
    setTimeout(function(){
        estudiantesal.innerHTML = 5000;
    }, 1000);    


}


window.addEventListener('scroll',function () {
    let animacion = document.getElementById("home6");
    let posicionObj1 = animacion.getBoundingClientRect().top;
    console.log(posicionObj1);
    let sizePantalla = window.innerHeight/1.5;
    if(posicionObj1 < sizePantalla){
        animar();
    }
})