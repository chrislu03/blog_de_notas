<?php
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Si se desea destruir la sesión completamente, borra también la cookie.
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/');
}

// Finalmente, destruir la sesión.
session_destroy();

header("Location: index.php");
exit();
?>