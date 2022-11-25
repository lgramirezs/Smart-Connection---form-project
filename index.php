<?php 
//Arreglo de errores
$errors = []; 

if (isset($_POST['submit'])) {
    //Asignación de variables
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $mail = $_POST['mail'];
    $adress = $_POST['adress'];
    $age = $_POST['age'];
    //Asignación del tipo de genero según la selección 
    if($_POST['gender'] === 'female'){
        $gender = 'Mujer';    
    }else{
        $gender = 'Hombre';
    }

    //Validación de nombre
    if (!empty($name)) {
        //Elimina los espacios vacios 
        $name = trim($name);
        //
        $name = filter_var($name, FILTER_SANITIZE_STRING);

    }else {
        array_push($errors, 'Debe especificar un nombre');
    }


    //Validación de apellido
    if (!empty($lastname)) {
        //Elimina los espacios vacios 
        $lastname = trim($lastname);
        //
        $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
    }else {
        array_push($errors, 'Debe especificar un apellido');
    }

    //Validación dirección de correo electrónico
    if (!empty($mail)) {
        $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
        //Verica si un correo es valido
         if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
             array_push($errors, 'Debe especificar un dirección de correo electrónico válida');            
         }
    }else {
        array_push($errors, 'Debe especificar una dirección de correo electrónico');
    }


    //Validación dirección 
    if (!empty($adress)) {
        //Elimina los espacios vacios 
        $adress = trim($adress);
        //Código preformatedo 
        $adress = htmlspecialchars($adress);
        //Elimina los caracteres especiales 
        $adress = stripslashes($adress);
    }else {
        array_push($errors, 'Debe especificar una dirección');
    }

    //Validación de edad 
    if (!empty($age)) {
        if ($age <= 0 || $age >= 150) {
            array_push($errors, 'Edad incorrecta');
        }
    }else {
        array_push($errors, 'Debe especificar una edad válida');
    }


    //Validación de selección de genero
    if (!isset($_POST['gender'])) {
        array_push($errors, 'Seleccione un género');
    }

    //Validación de terminos
    if (empty($_POST['checked'])) {
        array_push($errors, 'Debe aceptar los terminos');
    }

    if (empty($errors) && $_POST) {
        $successfully = true;
    }

}

//Vista del formulario
require('index.view.php');

//Términos y condiciones
require('terms.php');

//Información enviada
require('info.php');


;?>



