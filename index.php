<?php
$nombre = $_POST['c_nombre'] ?? null;
$apellido = $_POST['c_apellido'] ?? null;
$genero = $_POST['c_genero'] ?? null;
$idiomas = $_POST['c_idioma'] ?? null;
$fechaNacimiento = $_POST['c_fechaNacimiento'] ?? null;
$ciudadNacimiento = $_POST['c_ciudadNacimiento'] ?? null;
$correo = $_POST['c_correo'] ?? null;
$clave = $_POST['c_clave'] ?? null;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1 class="titulo-principal">Formulario para estudiantes</h1>

    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
        <h3>Datos del estudiante</h3>
        <fieldset name='nombre-apellido'>
            <legend>Nombre completo</legend>
            <label for="c_nombre">Nombre:</label>
            <input type="text" name="c_nombre" placeholder="Nombre(s)" value='<?php echo $nombre ?? '' ?>'>
            <label for="apellido">Apellido:</label>
            <input type="text" name="c_apellido" id="c_apellido" placeholder="Apellido(s)" value='<?php echo $apellido ?? '' ?>'>
        </fieldset>
        <fieldset class="caja genero" name="seleccion-genero">
            <legend>Género</legend>
            <input type="radio" name="c_genero" id="masculino" value="Masculino" <?php if (!empty($genero) && $genero == "Masculino") echo "checked"; ?>>
            <label for="masculino">Masculino</label>
            <input type="radio" name="c_genero" id="femenino" value="Femenino" <?php if (!empty($genero) && $genero == "Femenino") echo "checked"; ?>>
            <label for="femenino">Femenino</label>
        </fieldset>
        <fieldset name="seleccion-idioma">
            <legend>Idiomas que habla</legend>
            <input type="checkbox" name="c_idioma[]" id="español" value="Español" <?php if (!empty($idiomas) && in_array("Español", $idiomas)) echo "checked"; ?>>
            <label for="español">Español</label>
            <input type="checkbox" name="c_idioma[]" id="ingles" value="Inglés" <?php if (!empty($idiomas) && in_array("Inglés", $idiomas)) echo "checked"; ?>>
            <label for="ingles">Inglés</label>
            <input type="checkbox" name="c_idioma[]" id="frances" value="Francés" <?php if (!empty($idiomas) && in_array("Francés", $idiomas, false)) echo "checked"; ?>>
            <label for="frances">Francés</label>
            <input type="checkbox" name="c_idioma[]" id="portugues" value="Portugués" <?php if (!empty($idiomas) && in_array("Portugués", $idiomas, false)) echo "checked"; ?>>
            <label for="portugues">Portugués</label>
            <input type="checkbox" name="c_idioma[]" id="italiano" value="Italiano" <?php if (!empty($idiomas) && in_array("Italiano", $idiomas, false)) echo "checked"; ?>>
            <label for="Italiano">Italiano</label>
        </fieldset>
        <fieldset name='datos-nacimiento'>
            <legend>Datos de nacimiento</legend>
            <label for="c_fechaNacimiento">Fecha:</label>
            <input type="date" name="c_fechaNacimiento" value="<?php echo $fechaNacimiento ?? '' ?>">
            <label for="c_ciudadNacimiento">Ciudad:</label>
            <select name="c_ciudadNacimiento" id="c_ciudadNacimiento">
                <option value=""disabled selected>Selecciona una ciudad</option>
                <option value="Maracay" <?php if (!empty($ciudadNacimiento) && $ciudadNacimiento == "Maracay") echo "selected" ?>>Maracay</option>
                <option value="Caracas" <?php if (!empty($ciudadNacimiento) && $ciudadNacimiento == "Caracas") echo "selected" ?>>Caracas</option>
                <option value="Valencia" <?php if (!empty($ciudadNacimiento) && $ciudadNacimiento == "Valencia") echo "selected" ?>>Valencia</option>
                <option value="Barinas" <?php if (!empty($ciudadNacimiento) && $ciudadNacimiento == "Barinas") echo "selected" ?>>Barinas</option>
                <option value="Maturin" <?php if (!empty($ciudadNacimiento) && $ciudadNacimiento == "Maturin") echo "selected" ?>>Maturin</option>
                <option value="Trujillo" <?php if (!empty($ciudadNacimiento) && $ciudadNacimiento == "Trujillo") echo "selected" ?>>Trujillo</option>
                <option value="Maracaibo" <?php if (!empty($ciudadNacimiento) && $ciudadNacimiento == "Maracaibo") echo "selected" ?>>Maracaibo</option>
                <option value="Barquisimeto" <?php if (!empty($ciudadNacimiento) && $ciudadNacimiento == "Barquisimeto") echo "selected" ?>>Barquisimeto</option>
                <option value="Mérida" <?php if (!empty($ciudadNacimiento) && $ciudadNacimiento == "Mérida") echo "selected" ?>>Mérida</option>
                <option value="Barcelona" <?php if (!empty($ciudadNacimiento) && $ciudadNacimiento == "Barcelona") echo "selected" ?>>Barcelona</option>
            </select>
        </fieldset>
        <fieldset class="caja sesion">
            <legend>Datos para usuario</legend>
            <label for="c_correo">Correo:</label>
            <input type="text" name="c_correo" id="c_correo" placeholder="Correo" value="<?php echo $correo ?? '' ?>">
            <label for="c_clave">Clave:</label>
            <input type="password" name="c_clave" id="c_clave" placeholder="Clave" value="<?php echo $clave ?? '' ?>">
        </fieldset>
        <input class="boton-enviar" type="submit" value="Enviar Datos" name="boton-enviar">
        <?php
        //Se guardan todos los datos en un array
        $estudiante[0] = array($nombre, $apellido);
        $estudiante[1] = $genero;
        $estudiante[2] = $idiomas;
        $estudiante[3] = array($fechaNacimiento, $ciudadNacimiento);
        $estudiante[4] = array($correo, $clave);

        //Primero se comprueba que se hizo click en el boton para enviar los datos
        if (isset($_POST["boton-enviar"])) {
            //Se hace un bucle While y se crea una variable contadora
            $i = 0;
            while ($i < count($estudiante)) {

                if (is_null($estudiante[$i])) {
                    switch ($i) {

                        //Caso: género
                        case 1:
                            if (empty($estudiante[$i])) {echo "<p class='error'>* Debes seleccionar el género</p>";} else {
                                echo "<p class='confirmacion'>- Se ha ingresado el género correctamente</p>";
                            }
                            break;

                        //Caso: idiomas
                        case 2:
                            echo "<p class='error'>* Debes seleccionar los idiomas</p>";
                            break;
                    }
                } else {

                    if (is_array($estudiante[$i])) {

                        switch ($i) {

                            //Caso: nombre
                            case 0:
                                for ($j=0;$j<count($estudiante[$i]);$j++) {
                                    //Se comprueba que no esté vacío
                                    if (isset($estudiante[$i][$j])&&empty($estudiante[$i][$j])) {
                                        switch ($j) {
                                            //Caso: nombre
                                            case 0:
                                                echo "<p class='error'>* Debes ingresar el nombre</p>";
                                                break;
                                            
                                            //Caso: apellido
                                            case 1:
                                                echo "<p class='error'>* Debes ingresar el apellido</p>";
                                                break;
                                        }
                                    //Se comprueba que los campos del nombre no tengan números
                                    } elseif (isset($estudiante[$i][$j])&&preg_match("~[0-9]~", $estudiante[$i][$j])) {
                                        switch ($j) {
                                            //Caso: nombre
                                            case 0:
                                                echo "<p class='error'>* El nombre no puede contener números</p>";
                                                break;
                                            
                                            //Caso: apellido
                                            case 1:
                                                echo "<p class='error'>* El apellido no puede contener números</p>";
                                                break;
                                        }
                                    //Se comprueba que no tenga caracteres especiales
                                    } elseif (isset($estudiante[$i][$j])&&preg_match("/[\'^£€$%&*()}{@#~?><>,|=_+¬-]/",$estudiante[$i][$j])) {
                                        switch ($j) {
                                            //Caso: nombre
                                            case 0:
                                                echo "<p class='error'>* El nombre no puede contener caracteres especiales</p>";
                                                break;
                                            
                                            //Caso: apellido
                                            case 1:
                                                echo "<p class='error'>* El apellido no puede contener caracteres especiales</p>";
                                                break;
                                        }
                                    } else {
                                        echo "<p class='confirmacion'>- El nombre y el apellido han sido escritos correctamente</p>";
                                    }
                                }
                                break;
                            
                            //Caso: idiomas
                            case 2:
                                if (count($estudiante[$i])<3) {echo "<p class='error'>* Debes seleccionar al menos 3 idiomas</p>";
                                } else {
                                    echo "<p class='confirmacion'>- Se han seleccionado los idiomas correctamente</p>";
                                };
                                break;

                            //Caso: datos de nacimiento
                            case 3:
                                for ($j=0;$j<count($estudiante[$i]);$j++) {
                                        switch ($j) {
                                            //Caso: fecha
                                            case 0:
                                                if (isset($estudiante[$i][$j])&&empty($estudiante[$i][$j])) {echo "<p class='error'>* Debes ingresar la fecha de nacimiento</p>";} else {
                                                    echo "<p class='confirmacion'>- Se ha ingresado la fecha correctamente</p>";
                                                }
                                                break;
                                            
                                            //Caso: ciudad
                                            case 1:
                                                if (empty($estudiante[$i][$j])) {echo "<p class='error'>* Debes seleccionar una ciudad de nacimiento</p>";} else {
                                                    echo "<p class='confirmacion'>- Se ha seleccionado la ciudad correctamente</p>";
                                                }
                                                
                                                break;
                                        }
                                }
                                break;

                            //Caso: usuario
                            case 4:
                                for ($j=0;$j<count($estudiante[$i]);$j++) {
                                    if (isset($estudiante[$i][$j])&&empty($estudiante[$i][$j])) {
                                        switch ($j) {
                                            //Caso: correo
                                            case 0:
                                                echo "<p class='error'>* Debes ingresar un correo</p>";
                                                break;
                                            
                                            //Caso: clave
                                            case 1:
                                                echo "<p class='error'>* Debes ingresar una clave</p>";
                                                break;
                                        }
                                    } else {
                                        switch ($j) {
                                            //Caso: correo
                                            case 0:
                                                if (!empty($estudiante[$i][$j])&&!filter_var($estudiante[$i][$j], FILTER_VALIDATE_EMAIL)) {echo "<p class='error'>* Debes ingresar un correo válido</p>";} else {
                                                    echo "<p class='confirmacion'>- Se ha ingresado el correo correctamente</p>";
                                                }
                                                break;
                                            
                                            //Caso: clave
                                            case 1:
                                                if (strlen($estudiante[$i][$j])<10||!preg_match("@[A-Z]@",$estudiante[$i][$j])||!preg_match("@[0-9]@",$estudiante[$i][$j])||!preg_match("/[\'^£€$%&*()}{@#~?><>,|=_+¬-]/", $estudiante[$i][$j])) {echo "<p class='error'>* La clave debe tener al menos 10 caracteres, 1 número y 1 carácter especial</p>";} else {
                                                    echo "<p class='confirmacion'>- Se ha ingresado la clave correctamente</p>";
                                                }
                                                break;
                                        }
                                    }
                                }
                        }
                
                    }

                }    
                $i += 1;
            }
        }
        ?>
    </form>

</body>

</html>

<style>
    body {
        font-family: Arial;
    }

    h1,
    h3 {
        text-align: center;
    }

    form {
        background-color: #e8e8e8;
        border-radius: 25px;
        padding: 1rem 2.5rem 2rem;
        margin: 2.5rem auto;
        width: 75%;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    form>fieldset {
        width: 100%;
        margin: .5rem 0;
        display: flex;
        justify-content: space-around;
    }

    form>fieldset.caja.genero>label {
        margin: 0 0 0 -7rem;
    }

    form>fieldset>input[type="text"] {
        width: 30ch;
    }

    form>input.boton-enviar {
        font-weight: bold;
        width: fit-content;
        margin: 2rem 0 0;
        padding: .5rem 1.25rem;
    }

    .error {
        color: red;
        z-index: 0;
    }

    .confirmacion {
        color: green;
    }
</style>