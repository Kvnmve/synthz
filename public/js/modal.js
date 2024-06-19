const abrirModales = document.querySelectorAll('.abrirModal');
const modal = document.querySelector('.modal');
const cerrarModal = document.querySelector('.modal_cerrar');

abrirModales.forEach(function(abrirModal){
    abrirModal.addEventListener('click', (e)=>{
        e.preventDefault();
        modal.classList.add('modal--show');
    })
})

cerrarModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.remove('modal--show');
})