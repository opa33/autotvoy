<?php
include 'config.php'; // Подключаем файл с подключением к базе данных

// Обработка POST запроса после отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверяем, что все необходимые поля формы были отправлены
    if (isset($_POST['name'], $_POST['surname'], $_POST['login'], $_POST['email'], $_POST['password'], $_POST['password_repeat'], $_POST['rules'])) {
        // Получаем данные из формы
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_repeat = $_POST['password_repeat'];

        // Проверка на совпадение паролей
        if ($password !== $password_repeat) {
            echo "Пароли не совпадают.";
            exit();
        }

        // Хешируем пароль
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Подготовка SQL запроса для вставки данных в базу данных
        $sql = "INSERT INTO users (name, surname, login, email, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die('Ошибка подготовки запроса: ' . $conn->error);
        }

        // Привязываем значения к параметрам в запросе
        $stmt->bind_param('sssss', $name, $surname, $login, $email, $hashed_password);

        // Выполняем запрос
        if ($stmt->execute()) {
            // Перенаправление на личный кабинет
            header("Location: kabinet.php");
            exit();
        } else {
            echo "Ошибка выполнения запроса: " . $stmt->error;
        }
    } else {
        echo "Пожалуйста, заполните все обязательные поля формы.";
    }
		
}
?>