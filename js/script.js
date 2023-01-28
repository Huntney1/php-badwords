    
    /* collego il bottone e la textarea del documento html */
    const button = document.getElementById('myButton');
    const textarea = document.getElementById('paragraph');

    /* Assegno un evento "click" al bottone quando il tasto Invio viene premuto nella textarea */
    textarea.addEventListener('keyup', function(event){

    /* 13 è il codice del tasto enter della tastiera */
    if (event.keyCode === 13) {
        button.click();
    }
});