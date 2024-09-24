1.
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    echo "Hola, " . $nombre;
}
?>
<form method="post" action="">
    Nombre: <input type="text" name="nombre"><br>
    <input type="submit" value="Enviar">
</form>


2.
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentario = $_POST['comentario'];
    echo "Tu comentario: " . nl2br($comentario);
}
?>
<form method="post" action="">
    Comentario:<br>
    <textarea name="comentario" rows="5" cols="40"></textarea><br>
    <input type="submit" value="Enviar">
</form>

3.
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $genero = $_POST['genero'];
    echo "Género seleccionado: " . $genero;
}
?>
<form method="post" action="">
    Género:<br>
    <input type="radio" name="genero" value="Masculino"> Masculino<br>
    <input type="radio" name="genero" value="Femenino"> Femenino<br>
    <input type="radio" name="genero" value="Otro"> Otro<br>
    <input type="submit" value="Enviar">
</form>

4.
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['intereses'])) {
        $intereses = $_POST['intereses'];
        echo "Tus intereses: " . implode(", ", $intereses);
    } else {
        echo "No seleccionaste ningún interés.";
    }
}
?>
<form method="post" action="">
    Selecciona tus intereses:<br>
    <input type="checkbox" name="intereses[]" value="Deportes"> Deportes<br>
    <input type="checkbox" name="intereses[]" value="Música"> Música<br>
    <input type="checkbox" name="intereses[]" value="Cine"> Cine<br>
    <input type="checkbox" name="intereses[]" value="Literatura"> Literatura<br>
    <input type="submit" value="Enviar">
</form>

5.
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pais = $_POST['pais'];
    echo "País seleccionado: " . $pais;
}
?>
<form method="post" action="">
    Selecciona tu país:<br>
    <select name="pais">
        <option value="México">México</option>
        <option value="España">España</option>
        <option value="Argentina">Argentina</option>
        <option value="Colombia">Colombia</option>
    </select>
    <input type="submit" value="Enviar">
</form>

6.
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    echo "Contraseña ingresada: " . $password;
}
?>
<form method="post" action="">
    Contraseña: <input type="password" name="password"><br>
    <input type="submit" value="Enviar">
</form>

7.
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST['edad'];
    echo "Tu edad es: " . $edad;
}
?>
<form method="post" action="">
    Edad: <input type="number" name="edad" min="0" max="120"><br>
    <input type="submit" value="Enviar">
</form>

8.
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST['fecha'];
    echo "Fecha seleccionada: " . $fecha;
}
?>
<form method="post" action="">
    Selecciona una fecha: <input type="date" name="fecha"><br>
    <input type="submit" value="Enviar">
</form>

9.
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $nombre_archivo = basename($archivo['name']);
    $directorio = 'uploads/';

    if (move_uploaded_file($archivo['tmp_name'], $directorio . $nombre_archivo)) {
        echo "El archivo se ha subido correctamente.";
    } else {
        echo "Hubo un error al subir el archivo.";
    }
}
?>
<form method="post" enctype="multipart/form-data">
    Selecciona un archivo: <input type="file" name="archivo"><br>
    <input type="submit" value="Subir">
</form>

10.
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_POST['color'];
    echo "Color seleccionado: " . $color;
}
?>
<form method="post" action="">
    Selecciona un color: <input type="color" name="color"><br>
    <input type="submit" value="Enviar">
</form>