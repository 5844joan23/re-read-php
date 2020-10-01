<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
<title>Re-Read libros</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>

<div class="logo"><h1>Re-Read</h1></div>
=======
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Estilos enlazados-->
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>

  <div class="logo">Re-Read</div>
>>>>>>> 3298ff5bb5ba33f2bb30fc9c8edc101881d211c4

<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>

<<<<<<< HEAD
<div class="row">
  <div class="column middle">
    <div class="topnav">
      <a href="../index.php">Re-Read</a>
      <a href="libros.php" class="active">Libros</a>
      <a href="ebooks.php">eBooks</a>
    </div>
    <div class="textpage">
      <h3>Todos los libros tienen el mismo precio</h3>
      <p>Libros casi nuevos a un precio casi imposible.</p>
      <div class="inlineImg">
        <img src="../img/1-libro-3€.gif" alt="Cinque Terre">
      </div>

      <div class="inlineImg">
        <img src="../img/2-libros-5€.gif" alt="Forest">
      </div>

      <div class="inlineImg">
        <img src="../img/5-libros-10€.gif" alt="Northern Lights">
      </div>
      <h3>¿Te cambias de piso? ¿Tienes que vaciar la casa? ¿O sencillamente necesitas algo más de espacio?</h3>
      <p>En Re-Read compramos tus libros para darles una segunda vida. Los compramos todos al mismo precio: 0,20 euros. Siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
    </div>
  </div>
  
  <div class="column side">
    <h2>Top ventas</h2>
    <?php
      // 1. Conexión con la base de datos	
      include '../services/connection.php';

      // 2. Selección y muestra de datos de la base de datos
      $result = mysqli_query($conn, "SELECT Books.Title FROM Books WHERE eBook != '0'");

      if (!empty($result) && mysqli_num_rows($result) > 0) {
      // datos de salida de cada fila	(fila = row)
        while ($row = mysqli_fetch_array($result)) {
          echo "<p>".$row['Title']."</p>";
        }
      } else {
        echo "0 resultados";
      }
      ?>
=======

<div class="row">
  
  <div class="column left">

    <div class="topnav">
      <a href="../index.php">Re-Read</a>
      <a href="libros.php">Libros</a>
      <a href="ebooks.php">eBooks</a>
    </div>

    <h3>Todos los libros tienen el mismo precio</h3>
    <p>Libros casi nuevos a un precio casi imposible.</p>
    <div class="alineacionImg">
      <img src="../img/1-libro-3€.gif" alt="imágen 1">
    </div>
    <div class="alineacionImg">
      <img src="../img/2-libros-5€.gif" alt="imágen 2">
    </div>
    <div class="alineacionImg">
      <img src="../img/5-libros-10€.gif" alt="imágen 3">
    </div>
    <h3>¿Te cambias de piso? ¿Tienes que vaciar la casa? ¿O sencillamente necesitas algo más de espacio?</h3>
    <p>En Re-Read compramos tus libros para darles una segunda vida. Los compramos todos al mismo precio: 0,20 euros. Siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
    
  </div>
  
  <div class="column right">
    <h2>Top ventas</h2>
    <p>Cien años de soledad.</p>
    <p>Crónica de una muerte anunciada.</p>
    <p>El otoño del patriarca.</p>
    <p>El general en su laberinto.</p>
>>>>>>> 3298ff5bb5ba33f2bb30fc9c8edc101881d211c4
  </div>
</div>
  
</body>
</html>
