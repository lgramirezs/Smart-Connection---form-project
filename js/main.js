//Variables
//Botón de enviar
const btnSubmite = document.querySelector('#submit');
//Campos 
const name = document.querySelector('#name');
//
const lastname = document.querySelector('#lastname');
//
const mail = document.querySelector('#mail');
//
const adress = document.querySelector('#adress');
//
const age = document.querySelector('#age');
//
const female = document.querySelector('#female');
//
const male = document.querySelector('#male');
//
const terms = document.querySelector('#terms');
//Boton de reseteo
const btnReset = document.querySelector('#reset');


//Arreglos de elementos 
let elements = [name, lastname, mail, adress, age, female, male, terms ];

//Listener
elements.forEach(element => {
    element.addEventListener('blur', validate)
});
//Listener para reset boton
btnReset.addEventListener('click', reset);



//Funciones
function validate(e){
    if (!e.target.value.length) {
        if(e.target.classList.contains('is-valid')){
            e.target.classList.remove('is-valid');
        }
        e.target.classList.add('is-invalid');
    } else {
        if(e.target.classList.contains('is-invalid')){
            e.target.classList.remove('is-invalid');
        }
        e.target.classList.add('is-valid');
    }
    //validando un correo
    if (e.target.type === 'email') {
        //Expresión regular
        const er = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

        if (er.test(e.target.value)) {
            e.target.classList.add('is-valid');
        }else {
            if (e.target.classList.contains('is-valid') ) {
                e.target.classList.remove('is-valid');
                e.target.classList.add('is-invalid');
            }
        }

    }
}

function reset(){
    elements.forEach(element => {
        if (element.classList.contains('is-valid') || element.classList.contains('is-invalid')) {
            element.classList.remove('is-valid', 'is-invalid');
        }
    });
}
