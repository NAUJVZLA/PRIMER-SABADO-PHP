<?php
// Inicia la sesión para verificar el estado del usuario
session_start();
// Incluye el archivo de datos que contiene los usuarios y posts
require_once 'data.php';

// Verifica si hay una sesión activa, si no, redirige al login
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

// Filtra los posts para mostrar solo los que están publicados
$published_posts = array_filter($posts, function($post) {
    return $post['status'] === 'published';
});
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- Incluye Bootstrap para estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand">Blog</span>
            <div class="navbar-text text-white me-3">
                Bienvenido(a), <?php echo htmlspecialchars($_SESSION['user_name']); ?>
            </div>
            <!-- Enlace para cerrar sesión -->
            <a href="logout.php" class="btn btn-outline-light">Cerrar Sesión</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="mb-4">Posts Publicados</h2>
        <div class="row">
            <?php foreach ($published_posts as $post): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo htmlspecialchars($post['image']); ?>" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($post['title']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($post['description']); ?></p>
                        <p class="card-text"><small class="text-muted">Fecha: <?php echo $post['created_at']; ?></small></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 