<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: log.php");
    exit;
}

require '../config.php';

// Удаление товара, если передан параметр id для удаления
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];

    // Получаем путь к изображению товара, чтобы удалить его
    $sql_image = "SELECT image FROM products WHERE id = ?";
    $stmt_image = $conn->prepare($sql_image);
    $stmt_image->bind_param("i", $id);
    $stmt_image->execute();
    $stmt_image->store_result();

    if ($stmt_image->num_rows > 0) {
        $stmt_image->bind_result($image);
        $stmt_image->fetch();

        // Удаляем изображение товара, если оно существует
        if (file_exists($image)) {
            unlink($image);
        }

        // Удаляем запись о товаре из базы данных
        $sql_delete = "DELETE FROM products WHERE id = ?";
        $stmt_delete = $conn->prepare($sql_delete);
        $stmt_delete->bind_param("i", $id);

        if ($stmt_delete->execute()) {
            echo "Товар успешно удален!";
        } else {
            echo "Ошибка при удалении товара: " . $stmt_delete->error;
        }
    } else {
        echo "Товар не найден.";
    }

    $stmt_image->close();
    $stmt_delete->close();
}

// Выборка всех товаров для отображения в таблице
$sql_select = "SELECT id, name, price, image FROM products";
$result = $conn->query($sql_select);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление товарами</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="сontainer">
        <div class="content-add-product">
            <h1>Управление товарами</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Изображение</th>
                    <th>Действие</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td><img src='" . $row['image'] . "' style='max-width: 100px; max-height: 100px;'></td>";
                        echo "<td><form method='POST' action='add-product.php'>";
                        echo "<input type='hidden' name='delete_id' value='" . $row['id'] . "'>";
                        echo "<button type='submit'>❌</button>";
                        echo "</form></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Нет товаров для отображения</td></tr>";
                }
                ?>
            </table>

            <h2>Добавить новый товар</h2>
            <form method="POST" action="add-product.php" enctype="multipart/form-data">
                <label>Название товара</label>
                <input type="text" name="product_name" required>
                <label>Цена товара</label>
                <input type="number" name="product_price" required>
                <label>Изображение товара</label>
                <input type="file" name="product_image" required>
                <button type="submit">Добавить</button>
            </form>
        </div>
    </div>
</body>
</html>
