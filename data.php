<?php
$users = [
    [
        'id' => 1,
        'name' => 'Ana Martínez',
        'email' => 'ana@example.com',
        'password' => password_hash('password123', PASSWORD_DEFAULT),
    ],
    // ... resto de usuarios del array original ...
];

$posts = [
    [
        'id' => 1,
        'title' => 'Bienvenidos al blog',
        'description' => 'Este es el primer post de prueba.',
        'image' => 'https://via.placeholder.com/600x400',
        'author_id' => 1,
        'created_at' => '2025-03-28 10:00:00',
        'status' => 'published'
    ],
    // ... resto de posts del array original ...
];
?> 