<?php
session_start();

$valid_username = "admin"; // Ваш логин
$valid_password = "333"; // Ваш пароль

// Обработка POST-запроса для входа
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['log'];
    $password = $_POST['pass'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        header("Location: admin-panel.php"); // Перенаправление на admin-panel.php после успешного входа
        exit;
    } else {
        $error_message = "Неправильный логин или пароль.";
        $_SESSION['error_message'] = $error_message;
        header("Location: log.php");
        exit;
    }
}

// Обработка выхода
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: log.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в админ панель</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: 'Jost', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0B2447;
        }

        .auth {
            position: fixed; 
            z-index: 3; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
            animation: fadeIn 0.5s;
            overflow: hidden;
        }

        .auth-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            background: #0b2447;
            margin: 10% auto; 
            padding: 20px;
            border-radius: 10px;
            width: 80%; 
            max-width: 580px;
            animation: slideIn 0.5s;
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @keyframes slideIn {
            from {transform: translateY(-50px);}
            to {transform: translateY(0);}
        }

        .auth h2 {
            font-weight: 400;
            font-size: 48px;
            letter-spacing: 0.05em;
            color: #fff;
            margin-bottom: 30px;
            margin-top: 0;
        }

        .auth p {
            font-weight: 400;
            font-size: 20px;
            letter-spacing: 0.05em;
            color: #fff;
        }

        .auth label {
            font-weight: 400;
            font-size: 20px;
            letter-spacing: 0.05em;
            color: #fff;
            margin-bottom: 10px;
        }

        .auth input {
            border: 2px solid #fff;
            border-radius: 10px;
            width: 380px;
            height: 60px;
            background-color: transparent;
            color: #fff;
            font-size: 28px;
            letter-spacing: 0.05em;
            font-family: 'Jost', sans-serif;
            margin-bottom: 10px;
        }

        .auth input:focus {
            border-color: #576CBC;
            outline: none;
            transition: 300ms;
        }

        .auth button {
            font-weight: 400;
            font-size: 28px;
            letter-spacing: 0.05em;
            color: #0b2447;
            border-radius: 10px;
            width: 381px;
            height: 65px;
            background-color: #fff;
            cursor: pointer;
            font-family: 'Jost', sans-serif;
            margin-top: 20px;
        }

        .auth button:hover {
            transition: 300ms;
            background-color: #576CBC;
            color: #fff;
            border: none;
        }

        .auth-item {
            display: flex;
            flex-direction: column;
            align-items: left;
            margin-bottom: 30px;
        }
        
        .auth a {
            color: #fff;
        }

        .auth-item input {
            border: 2px solid #fff;
            border-radius: 10px;
            width: 380px;
            height: 60px;
            background-color: transparent;
            color: #fff;
            font-size: 28px;
            letter-spacing: 0.05em;
            font-family: 'Jost', sans-serif;
            margin-bottom: 10px;
        }

        .auth-item input:focus {
            border-color: #576CBC;
            outline: none;
            transition: 300ms;
        }

        .error {
            color: #D91B1B;
            display: none;
        }
    </style>
</head>
<body>
    <div class="auth">
        <div class="auth-content">
            <h2>Вход в админ панель</h2>
            <form action="log.php" method="POST">
                <div class="auth-item">
                    <label>Логин</label>
                    <input type="text" name="log" required>
                </div>
                <div class="auth-item">
                    <label>Пароль</label>
                    <input type="password" id="pass" name="pass" required>
                </div>
                <div class="vhod">
                    <button type="submit">Войти</button>
                </div>
                <?php
                if (isset($_SESSION['error_message'])) {
                    echo '<p id="error-message" class="error">' . $_SESSION['error_message'] . '</p>';
                    unset($_SESSION['error_message']);
                }
                ?>
            </form>
            <?php
            // Ссылка для перехода в админ панель, если пользователь уже авторизован
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                echo '<p>Вы уже вошли в систему. <a href="admin-panel.php">Перейти в админ панель</a></p>';
            }
            ?>
        </div>
    </div>
</body>
</html>
