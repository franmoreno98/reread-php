<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>

  <div class="logo">Re-Read</div>

<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>

  <div class="column left">
    <div class="topnav">
      <a href="index.php">Re-Read</a>
      <a href="view/libros.php">Libros</a>
      <a href="view/eBooks.php">eBooks</a>
    </div>
    <h2>Main Content</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
  
  <div class="column right">
  <?php
    include './services/connection.php';

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
