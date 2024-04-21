<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloc_de_notas";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " .mysqli_error($conn));
}


session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header("Location: index.php");
    exit();
}

// Mostrar la página de bienvenida
echo "<h2>Bienvenido, " . $_SESSION['username'] . "!</h2>";
echo "<p>Has iniciado sesión correctamente.</p>";

// Enlace para cerrar sesión

$sql = "SELECT * 
        FROM post 
        JOIN users ON post.id_user = users.id 
        WHERE users.username = '" . $_SESSION["username"] . "'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row["title"]."<br>";
    echo $row["description"]."<br> <br>";
}
echo "<a href='logout.php'>Cerrar sesión</a>";
?>


