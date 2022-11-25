<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <div id="area" class="card border-dark mt-5">
            <div class="card-header text-center bg-dark">
                <h1 class="h3 text-white"> Registro de datos</h1>
            </div>
            <?php if (!empty($errors)): ;?>
                <div class="card bg-danger p-3 m-3">
                    <ul>
                        <?php 
                            foreach($errors as $key => $error){
                                echo '<li class="text-white">' . $error . '</li>'; 
                            }                            
                        ;?>
                     </ul>
                </div>
            <?php endif ;?>
            <form id="formSubmite" class="p-3 text-white" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="name">Nombre</label>
                        <input id="name" type="text" class="form-control" value="<?php echo htmlspecialchars((!$successfully && isset($name)) ? $name : '');?>" name="name" id="name" placeholder="Ingrese su nombre">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="lastname">Apellido</label>
                        <input id="lastname" type="text" class="form-control" value="<?php echo htmlspecialchars((!$successfully && isset($lastname)) ? $lastname : '');?>" name="lastname" id="lastname" placeholder="Ingrese su apellido">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="mail">Correo electrónico</label>
                        <input id="mail" type="email" class="form-control" value="<?php echo htmlspecialchars((!$successfully && isset($mail)) ? $mail : '');?>" name="mail" id="mail" placeholder="Ingrese su dirección de correo electrónico">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="adress">Dirección</label>
                        <input id="adress" type="text" class="form-control" value="<?php echo htmlspecialchars((!$successfully && isset($adress)) ? $adress : '');?>" name="adress" id="adress" placeholder="Ingrese su dirección ">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-2">
                        <label for="age">Edad</label>
                        <input id="age" class="form-control" type="number" name="age" id="age" min="1" max="100" value="<?php echo htmlspecialchars((!$successfully && isset($age)) ? $age : '');?>">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="female">Mujer</label>
                        <input id="female" type="radio" name="gender" id="female" value="female">
                        <label for="male">Hombre</label>
                        <input id="male" type="radio" name="gender" id="male" value="male">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="checked">
                            <a class="text-white" data-toggle="modal" data-target="#modalTerms"  href="javascript:void(0)">
                                ¿Acepta los términos?
                            </a>    
                        </label>
                        <input id="terms" type="checkbox" name="checked" id="checked" value="checked">
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <input id="reset" class="btn btn-secondary" type="reset" value="Limpiar">
                    <input id="submit" class="btn btn-md btn-dark" type="submit" name="submit">
                </div>
                <!-- Información del usuario registrado -->
                <?php if(empty($errors) && $_POST): ;?>
                    <div class="alert alert-dark mt-3" role="alert">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalinformation">
                          Información del usuario
                        </button>
                    </div>
                <?php endif ;?>
            </form>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>