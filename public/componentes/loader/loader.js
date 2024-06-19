window.onload = function(){
    $('#onload').fadeOut();
    alert("hola ya cargué el puto loader");
}
/*
window.onload = function() {
    var onloadElement = document.getElementById('onload');
    onloadElement.style.opacity = 1;
    var fadeOutInterval = setInterval(function() {
        if (!onloadElement.style.opacity) {
            onloadElement.style.opacity = 1;
        }
        if (onloadElement.style.opacity > 0) {
            onloadElement.style.opacity -= 0.1;
        } else {
            clearInterval(fadeOutInterval);
        }
    }, 100);
}*/
