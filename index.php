<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Estudiante</title>
</head>

<body>
    <h1 class="titulo-principal">Formulario para estudiante</h1>

    <form action="">
    <label for="c_nombre">Nombre</label>
        <input type="text" name="c_nombre" id="c_nombre">
        <label for="c_apellido">Apellido</label>
        <input type="text" name="c_apellido" id="c_apellido">
        <label for="c_clave">Contraseña</label>
        <input type="password" name="c_clave" id="c_clave">
        <label for="c_correo">Correo</label>
        <input type="text" name="c_correo" id="c_correo">
        <label for="c_fechaNacimiento">Fecha de Nacimiento</label>
        <input type="date" name="c_fechaNacimiento" id="c_fechaNacimiento">
        <label for="c_ciudadNacimiento">Ciudad de Nacimiento</label>
        <select name="c_ciudadNacimiento" id="c_ciudadNacimiento">
            <option value="" selected></option>
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
        <fieldset>
            <legend>Género</legend>
            <input type="radio" name="genero" id="masculino" value="masculino">
            <label for="masculino">Masculino</label>
            <input type="radio" name="genero" id="femenino" value="femenino">
            <label for="femenino">Femenino</label>
        </fieldset>
        <input type="submit" value="Enviar Datos">
    </form>
</body>

</html>