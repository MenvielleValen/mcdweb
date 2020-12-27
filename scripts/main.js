const botonMenu=document.querySelector('.boton-menu');
const menu=document.querySelector('.nav');
const men=document.querySelector('.men');
const slider=document.querySelector('.activado');
let index=0;

botonMenu.addEventListener('click', ()=>{
    menu.classList.toggle("mostrar");
    botonMenu.classList.toggle("mover");
    
    
    
})

setInterval(function tiempo(){
    
    cambiarSlider(index+=1);
}, 8000);

function cambiarSlider(n){
    

    if(index==0){
        slider.setAttribute("src", "img/Tunegocio.png");
      
    }
    if(index==1){
        slider.setAttribute("src", "img/Responsive.png");
       

    }
    if(index==2){
        slider.setAttribute("src", "img/Idea.png");
        
        
    }
    if(index==3){
        slider.setAttribute("src", "img/Pyd.png");
       

        index=-1;
    }
    
    
}