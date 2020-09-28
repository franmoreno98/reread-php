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
    <!--<div class="ebook">
      <a href="https://es.wikipedia.org/wiki/Cell_(novela)"><img src="../img/ebook1.jpeg" alt="Imagen 1">
     <div>A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div></a>
    </div>-->

    <!--<div class="ebook">
      <a href="https://es.wikipedia.org/wiki/El_ciclo_del_hombre_lobo"><img src="../img/ebook2.jpeg" alt="Imagen 2">
      <div>Una escalofriante revisión del mito del hombre lobo por el rey de la literatura de terror...</div></a>
    </div>
    <div class="ebook">
      <a href="https://es.wikipedia.org/wiki/El_resplandor_(novela)"><img src="../img/ebook3.jpeg" alt="Imagen 3">
      <div>Esa es la palabra que Danny había visto en el espejo. Y, aunque no sabía leer, entendió que era un mensaje de horror...</div></a>
    </div>
    <div class="ebook">
      <a href="https://es.wikipedia.org/wiki/Doctor_Sue%C3%B1o"><img src="../img/ebook4.jpeg" alt="Imagen 4">
      <div>Una novela que entusiasmará a los millones de lectores de El resplandor y que encantará...</div></a>
    -->

    <?php
    //1. Conexion con bd
    include '../services/connection.php';

    //2. selecion y muestra de datos d la bd

    $result = mysqli_query($conn, "SELECT Books.description, Books.img, Books.Title From Books WHERE eBook != '0'");

    if (!empty($result) && mysqli_num_rows($result) > 0){
      //datosde salida de cada fila (fila = row)
      while ($row = mysqli_fetch_array($result)){
      echo "<div class='ebook'>";
      echo "<img src=../img/".$row['img']." alt='".$row['Title']."'>";
      echo "<div class='desc'>".$row['Title']." </div>";
      echo "</div>";
        //añadimos el titulo a la pagina con etiqueta h2 de html
      
      
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
    <p>Cien años de soledad</p>
    <p>Crónica de una muerte anunciada</p>
    <p>El otoño del patriarca</p>
    <p>El general en su laberinto</p>
  </div>
</div>
  
</body>
</html>
