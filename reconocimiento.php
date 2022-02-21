<?php
  if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $practica = $_POST['practica'];
    $dan = $_POST['dan'];
    $dananios = $_POST['dananios'];
    $edad = $_POST['edad'];
  }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="estilos.css"
    </head>
    <body>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h1>Reconocimiento de Meritos</h1>
        <label for="">Nombre del Participante:</label>
        <input type="text" name="nombre">
        <label for="">Años de Practica:</label>
        <input type="number" name="practica">
        <label for="">Numero de dan:</label>
        <input type="number" name="dan">
        <label for="">Años de Dan:</label>
        <input type="number" name="dananios">
        <label for="">Edad:</label>
        <input type="number" name="edad">
        <input type="submit" name="submit">
        <?php
        include ("validacion.php");
        ?>
      </form>
    </body>
</html>
