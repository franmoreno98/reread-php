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


    <h3>Toda la actualidad en eBooks</h3>
    <h4>Libros casi nuevos a un precio casi imposible.</h4>
    <!-- nuevo desarrollo: formulario para filtrar autor-->
    <div>
      <form action="eBooks.php" method="POST">
        <label for="fautor">Autor</label>
        <input type="text" id="fautor" name="fautor" placeholder="Introduzca el autor...">

        <!--<label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>-->
        <input type="submit" value="Buscar">
      </form>
    </div>
    <?php
      if(isset($_POST['fautor'])){
        //filtrará los eBooks qe se mostrarán en la página
      }else{
        //mostrará todos los eBooks de la BD
        
      }
    ?>

    <?php
    //1. Conexion con bd
    include '../services/connection.php';

    //2. selecion y muestra de datos d la bd

    $result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title From Books WHERE eBook != '0'");

    if (!empty($result) && mysqli_num_rows($result) > 0){
      //datosde salida de cada fila (fila = row)
      $i=0;
      while ($row = mysqli_fetch_array($result)){
      $i++;
      echo "<div class='ebook'>";
      echo "<img src=../img/".$row['img']." alt='".$row['Title']."'>";
      echo "<div class='desc'>".$row['Description']."</div>";
      echo "</div>";
      if ($i%3==0) {
        echo "<div style='clear:booth;'></div>";
      }
      
      }
    } else {
      echo "0 resultados";
    }
    ?>
  </div>
  </div>
  </div>

  <div class="column right">
  <h2>Top Ventas</h2>
  <?php

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
