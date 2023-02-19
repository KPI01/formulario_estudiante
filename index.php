<?php
//Se determina si la variable esta definida y no es null
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
            <input type="text" name="c_nombre" placeholder="Nombre(s)">
            <input type="text" name="c_apellido" id="c_apellido" placeholder="Apellido(s)">
        </fieldset>
        <fieldset class="caja genero" name="caja-genero">
            <legend>Género:</legend>
            <input type="radio" name="c_genero" id="masculino" value="masculino">
            <label for="masculino">Masculino</label>
            <input type="radio" name="c_genero" id="femenino" value="femenino">
            <label for="femenino">Femenino</label>
        </fieldset>
        <fieldset name="seleccion-idioma">
            <legend>Idioma:</legend>
            <input type="checkbox" name="c_idioma[]" id="español" value="español">
            <label for="español">Español</label>
            <input type="checkbox" name="c_idioma[]" id="ingles" value="ingles">
            <label for="ingles">Inglés</label>
            <input type="checkbox" name="c_idioma[]" id="frances" value="frances">
            <label for="frances">Francés</label>
            <input type="checkbox" name="c_idioma[]" id="portugues" value="portugues">
            <label for="portugues">Portugués</label>
            <input type="checkbox" name="c_idioma[]" id="italiano" value="italiano">
            <label for="Italiano">Italiano</label>
        </fieldset>
        <fieldset>
            <legend>Datos de nacimiento</legend>
            <label for="c_fechaNacimiento">Fecha:</label>
            <input type="date" name="c_fechaNacimiento">
            <label for="c_ciudadNacimiento">Ciudad:</label>
            <select name="c_ciudadNacimiento" id="c_ciudadNacimiento">
                <option disabled selected>Selecciona una ciudad</option>
                <option value="maracay">Maracay</option>
                <option value="caracas">Caracas</option>
                <option value="valencia">Valencia</option>
                <option value="barinas">Barinas</option>
                <option value="maturin">Maturin</option>
                <option value="trujillo">Trujillo</option>
                <option value="maracaibo">Maracaibo</option>
                <option value="barquisimeto">Barquisimeto</option>
                <option value="merida">Mérida</option>
                <option value="barcelona">Barcelona</option>
            </select>
        </fieldset>
        <fieldset class="caja sesion">
            <legend>Datos para usuario</legend>
            <input type="text" name="c_correo" id="c_correo" placeholder="Correo">
            <input type="password" name="c_clave" id="c_clave" placeholder="Clave">
        </fieldset>
        <input class="boton-enviar" type="submit" value="Enviar Datos">
        <?php
        $nombre = $_POST['c_nombre'] ?? null;
        $infoEstudiante[] = $nombre;
        $apellido = $_POST['c_apellido'] ?? null;
        $infoEstudiante[] = $apellido;
        $genero = $_POST['c_genero'] ?? null;
        $infoEstudiante[] = $genero;
        $idiomas = $_POST['c_idioma'] ?? null;
        $infoEstudiante[] = $idiomas;
        $fechaNacimiento = $_POST['c_fechaNacimiento'] ?? null;
        $infoEstudiante[] = $fechaNacimiento;
        $ciudadNacimiento = $_POST['c_ciudadNacimiento'] ?? null;
        $infoEstudiante[] = $ciudadNacimiento;
        $correo = $_POST['c_correo'] ?? null;
        $infoEstudiante[] = $correo;
        $clave = $_POST['c_clave'] ?? null;
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