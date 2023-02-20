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
        <fieldset>
            <legend>Nombre completo</legend>
            <input type="text" name="c_nombre" placeholder="Nombre(s)" value='<?php echo $nombre??''?>'>
            <input type="text" name="c_apellido" id="c_apellido" placeholder="Apellido(s)" value='<?php echo $apellido??''?>'>
        </fieldset>
        <fieldset class="caja genero" name="caja-genero">
            <legend>Género:</legend>
            <input type="radio" name="c_genero" id="masculino" value="Masculino" <?php if (!empty($genero)||$genero=="Masculino") echo "checked" ?>>
            <label for="masculino">Masculino</label>
            <input type="radio" name="c_genero" id="femenino" value="Femenino" <?php if (!empty($genero)||$genero=="Femenino") echo "checked" ?>>
            <label for="femenino">Femenino</label>
        </fieldset>
        <fieldset name="seleccion-idioma">
            <legend>Idioma:</legend>
            <input type="checkbox" name="c_idioma[]" id="español" value="Español">
            <label for="español">Español</label>
            <input type="checkbox" name="c_idioma[]" id="ingles" value="Inglés">
            <label for="ingles">Inglés</label>
            <input type="checkbox" name="c_idioma[]" id="frances" value="Francés">
            <label for="frances">Francés</label>
            <input type="checkbox" name="c_idioma[]" id="portugues" value="Portugués">
            <label for="portugues">Portugués</label>
            <input type="checkbox" name="c_idioma[]" id="italiano" value="Italiano">
            <label for="Italiano">Italiano</label>
        </fieldset>
        <fieldset>
            <legend>Datos de nacimiento</legend>
            <label for="c_fechaNacimiento">Fecha:</label>
            <input type="date" name="c_fechaNacimiento">
            <label for="c_ciudadNacimiento">Ciudad:</label>
            <select name="c_ciudadNacimiento" id="c_ciudadNacimiento">
                <option disabled selected>Selecciona una ciudad</option>
                <option value="Maracay">Maracay</option>
                <option value="Caracas">Caracas</option>
                <option value="Valencia">Valencia</option>
                <option value="Barinas">Barinas</option>
                <option value="Maturin">Maturin</option>
                <option value="Trujillo">Trujillo</option>
                <option value="Maracaibo">Maracaibo</option>
                <option value="Barquisimeto">Barquisimeto</option>
                <option value="Merida">Mérida</option>
                <option value="Barcelona">Barcelona</option>
            </select>
        </fieldset>
        <fieldset class="caja sesion">
            <legend>Datos para usuario</legend>
            <input type="text" name="c_correo" id="c_correo" placeholder="Correo">
            <input type="password" name="c_clave" id="c_clave" placeholder="Clave">
        </fieldset>
        <input class="boton-enviar" type="submit" value="Enviar Datos">
        <?php
        $infoEstudiante[] = $nombre;
        $infoEstudiante[] = $apellido;
        $infoEstudiante[] = $genero;
        $infoEstudiante[] = $idiomas;
        $infoEstudiante[] = $fechaNacimiento;
        $infoEstudiante[] = $ciudadNacimiento;
        $infoEstudiante[] = $correo;
        $infoEstudiante[] = $clave;

        for ($i = 0; $i <= count($infoEstudiante); $i++) {
            if (!empty($infoEstudiante[$i])) {
                if (is_array($infoEstudiante[$i])) {
                    for ($j = 0; $j < count($infoEstudiante[$i]); $j++) {
                        echo "<p>" . $infoEstudiante[$i][$j] . "</p>";
                    }
                } else {
                    echo "<p>" . $infoEstudiante[$i] . "</p>";
                }
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
</style>