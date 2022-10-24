<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Creedenciales</h1>
    <form name="miformu" action="/autoriza.php" method="get">
     <p>
        <label for="nombre"> Introduce Nombre: </label>
        <input type="text" name="nombreusuario" id="nombreusuario">
     </p>
     <p>
        <label for="password">Introduce la contraseña:</label>
        <input type="password" name="passwd" id="passwd">
     </p>
    
    <p>
        <p>Elige tu modulo preferido: </p>
        <label for="asignatura1">PHP </label>
        <input type="checkbox" name="asignaturas[]" id="asignatura1" value="PHP">
        <label for="asignatura2">Javascript </label>
        <input type="checkbox" name="asignaturas[]" id="asignatura2" value="Javascript">
        <label for="asignatura3">Python </label>
        <input type="checkbox" name="asignaturas[]" id="asignatura3" value="Python">
        <label for="asignatura4">SQL </label>
        <input type="checkbox" name="asignaturas[]" id="asignatura4" value="SQL">
    </p>
    <p>
        <select name="menusm[]" id="menu" multiple size ="6" required>
            <option value="codillo">Codillo Asado</option>
            <option value="Ensalada cesar">Ensalada cesar</option>
            <option value="Macarrones">Macarrones</option>
            <option value="Brocoli">Brocoli</option>
        </select>
    </p>
     <input type="hidden" name="ip" value="<?= $_SERVER['SERVER_ADDR']  ?>">


     <input type = "submit" name="envio" id="envio" value="Enviar">
    </form>
</body>
</html>