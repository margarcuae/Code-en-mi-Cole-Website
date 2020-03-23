function animar() {
    setTimeout(function(){
        docentes.innerHTML = 200;
    }, 50);
    setTimeout(function(){
        colegios.innerHTML = 15;
    }, 50);
    setTimeout(function(){
        voluntarios.innerHTML = 100;
    }, 50);
    setTimeout(function(){
        estudiantes.innerHTML = 1500;
    }, 50);
    setTimeout(function(){
        organizaciones.innerHTML = 50;
    }, 50);
    setTimeout(function(){
        estudiantesal.innerHTML = 5000;
    }, 50);    


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