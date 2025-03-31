<?php
// Inicia la sesión para poder destruirla
session_start();
// Destruye la sesión actual para cerrar sesión
session_destroy();
// Redirige al usuario de vuelta al formulario de login
header('Location: index.php');
exit();
?> 