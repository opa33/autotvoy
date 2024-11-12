<?php
include 'config.php';
session_start();
header('Content-Type: application/json');

$response = ["success" => false, "message" => "Неверные данные!"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Подготовленный запрос для безопасности
    $sql = "SELECT * FROM users WHERE login=?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Ошибка подготовки запроса: ' . $conn->error);
    }

    $stmt->bind_param('s', $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Сохраняем данные в сессии
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_surname'] = $row['surname'];
            $_SESSION['user_email'] = $row['email'];

            $response = ["success" => true, "message" => "Авторизация прошла успешно!"];
        } else {
            $response = ["success" => false, "message" => "Неверный пароль!"];
        }
    } else {
        $response = ["success" => false, "message" => "Пользователь не найден!"];
    }

    $stmt->close();
}

echo json_encode($response);
?>
