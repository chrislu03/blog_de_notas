<?php
session_start();

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloc_de_notas";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " .mysqli_error($conn));
}


// Verificar credenciales
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;

        // Si el usuario ha marcado "Remember me", establece una cookie
        if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
            setcookie('username', $username, time() + (86400 * 30), "/"); // cookie válida por 30 días
        }

        header("Location: welcome.php");
        exit();
    } else {
        echo "Credenciales inválidas.";
    }
}

$conn->close();
?>