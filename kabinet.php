<?php
include 'config.php';
session_start();

// Проверяем, залогинен ли пользователь
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Если пользователь не залогинен, перенаправляем его на страницу входа или другую страницу
    header("Location: index.php"); // Пример перенаправления на страницу входа
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>АвтоТвое - запчасти для автомобилей</title>
	<link rel="stylesheet" href="kabinet.css">
</head>
<body>
	<header>
		<div class="сontainer">
			<div class="header-nav">
				<a href="index.php"><img class="logo" src="img\Logo.png" alt=""></a>
				<nav class="nav">
					<ul class="nav-list">
						<a href=""><img src="img\basket-shopping-simple 1.svg" alt=""></a>
						<a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
							<svg width="40" height="40" viewBox="0 0 100 100">
									<rect class="line top" width="100" height="5" x="10" y="10" rx="5"></rect>
									<rect class="line middle" width="100" height="5" x="10" y="45" rx="5"></rect>
									<rect class="line bottom" width="100" height="5" x="10" y="80" rx="5"></rect>
							</svg>
						</a>
					</ul>
				</nav>
			</div>
			<div class="header-row">
				<div class="content">
					<h1 class="title">Личный кабинет</h1>
				</div>
			</div>
		</div>
	</header>
	<div id="menu" class="menu">
		<a href="index.php">Главная</a>
		<a href="catalog.php">Каталог</a>
		<a href="about.php">О нас</a>
		<a href="#">Где нас найти</a>
	</div>
	<div class='rect2'>
		<section class="kabinet">
			<div class="сontainer">
              	<div class="kabinet-row">
                    <div class="kabinet-block">
										<h4><?php echo $_SESSION['user_name'] . ' ' . $_SESSION['user_surname']; ?></h4>
                        <div class="inf">
                            <p><?php echo $_SESSION['user_email']; ?></p>
                        </div>
										<form action="logout.php" method="POST">
											<button type='submit' class="btn">Выйти</button>
										</form>
                    </div>
                    <div class="kabinet-block">
                        <div class="zak">
                            <h4>Заказы</h4>
                        </div>
                    </div>
                </div>
							</div>
		</section>
		
	</div>
	<footer>
		<div class="сontainer">
			
			<p>© 2024. Все права защищены ООО “АвтоТвое”</p>
		</div>
	</footer>

	<script src="script.js"></script>
</body>
</html>