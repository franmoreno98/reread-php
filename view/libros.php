<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>

  <div class="logo">Re-Read</div>

<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>

  <div class="column left">
    <div class="topnav">
      <a href="../index.php">Re-Read</a>
      <a href="libros.php">Libros</a>
      <a href="eBooks.php">eBooks</a>
    </div>
    <h3>Todos los libros tienen el mismo precio</h3>
    <h4>Libros casi nuevos a un precio casi imposible.</h4>
    <div class="alineacionImg">
      <img src="../img/img1.gif" alt="Imagen 1">
    </div>
    <div class="alineacionImg">
      <img src="../img/1mg2.gif" alt="Imagen 2">
    </div>
    <div class="alineacionImg">
      <img src="../img/img3.gif" alt="Imagen 3">
    </div>
    </div>
  
  <div class="column right">
    <h2>Top Ventas</h2>
    <?php
      include '../services/connection.php';

    $result = mysqli_query($conn, "SELECT Books.Title FROM Books WHERE Top = '1'");

    if (!empty($result) && mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_array($result)){
        echo "<p>".$row['Title']."</p>";
      }
    } else {
      echo "0 resultados";
    }
    ?>
  </div>
</div>
  
</body>
</html>
