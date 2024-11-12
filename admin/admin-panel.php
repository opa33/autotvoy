<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: log.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ панель</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="сontainer">
        <div class="title">
            <h1>Добро пожаловать в админ панель!</h1>
            <a href="log.php?logout=true">Выйти</a>
        </div>
        <div class="content">
            <h2>Заказы</h2>
        </div>
        <a href="add-product.php">Товары</a>
    </div> 
</body>
</html>
