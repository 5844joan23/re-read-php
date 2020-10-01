<?php
<<<<<<< HEAD
// ESTILO POR PROCEDIMIENTOS
=======
>>>>>>> 3298ff5bb5ba33f2bb30fc9c8edc101881d211c4

$host = "localhost";
$user = "root";
$pass = "";
<<<<<<< HEAD
$db = "reread";

// Crear la conexión
$conn = mysqli_connect($host, $user, $pass, $db);

// Checkear la conexión
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
} else {
	mysqli_set_charset($conn, "utf8");
}

/* //ESTILO ORIENTADO A OBJETOS
// Crear la conexión
$conn = new mysqli('localhost', 'root', '', 'imagenes');

// Checkear la conexión
if ($conn->connect_errno) {
	die("Error: No se pudo conectar a MySQL: " . $conn->connect_errno);
} else {
	$conn->set_charset("utf8");
}
*/

=======
$db = "reread-php";

$conn = mysqli_connect($host,$user, $pass, $db);

if (!$conn){
    echo "Error: No se pudo conectar a MySql." . PHP_EOL;
    echo "Error de depuracion " . mysqli_connect_errno() . PHP_EOL;
    exit;
} else {
    mysqli_set_charset($conn, "utf8");
}

>>>>>>> 3298ff5bb5ba33f2bb30fc9c8edc101881d211c4
?>