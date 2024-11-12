<?php
session_start();

// Удаляем все переменные сессии
session_unset();

// Уничтожаем сессию
session_destroy();

// Перенаправляем пользователя на страницу входа или другую страницу
header("Location: index.php");
exit;
?>