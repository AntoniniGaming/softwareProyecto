<?php
  if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $numjuez = $_POST['numjuez'];
    $federacion = $_POST['federacion'];
    $curso = $_POST['curso'];
    $federacion = $_POST['federacion'];
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
        <h1>Jueces</h1>
        <label for="">Nombre del Jues:</label>
        <input type="text" name="nombre">
        <label for="">Numero de juez:</label>
        <input type="number" name="numjuez">
        <label for="">Curso:</label>
        <input type="text" name="curso">
        <label for="">Federacion:</label>
        <input type="text" name="federacion">
        <input type="submit" name="submit">
        <?php
        include ("validacion.php");
        ?>
      </form>
    </body>
</html>