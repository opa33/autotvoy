<?php
session_start();

require 'config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>АвтоТвое - запчасти для автомобилей</title>
	<link rel="stylesheet" href="catalog.css">
	<link rel="stylesheet" href="headfoot.css">
	<link rel="stylesheet" href="modal\modal.css">
</head>
<body>
	<header>
		<div class="сontainer">
			<div class="header-nav">
				<a href="index.php"><img class="logo" src="img\Logo.png" alt=""></a>
				<nav class="nav">
					<ul class="nav-list">
						<a href=""><img src="img\basket-shopping-simple 1.svg" alt=""></a>
						<a href="javascript:void(0);" id="user-icon"><img src="img\circle-user 1.svg" alt=""></a>
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
					<h1 class="title">Каталог</h1>
				</div>
				<div class="find">
					<input placeholder="Поиск запчастей">
					<button class="btn"><img src="img\arrow-alt-right 1.svg" alt=""></button>
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
	<div class="car8">
		<img src="img\car8.png" alt="">
	</div>
	<div class='rect'></div>
	<div class='rect2'>
		<section class="catalog">
			<div class="сontainer">
				<div class="catalog-row">
						<div class="sidebar">
							<div class="sort">
							<p>Сортировать по     
								<div class="dropdown">
									<input type="checkbox" id="dropdown-toggle">
									<label for="dropdown-toggle" class="dropdown-label"><span id="selected-item">Новизне</span> <i class="arrow-down"></i></label>
									<div class="dropdown-menu">
										<label class="dropdown-item" data-value="Новизне">Новизне</label>
										<label class="dropdown-item" data-value="Дешевле">Дешевле</label>
										<label class="dropdown-item" data-value="Дороже">Дороже</label>
									</div>
								</div>
							</p>
							</div>
							<h4>Фильтр</h4>
							<p>Запчасти</p>
							<p>Лаки и краски</p>
							<p>Аксессуары</p>
						</div>
						<div class="products">
                    <?php while($row = $result->fetch_assoc()): ?>
                        <div class="prod-card">
                            <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="">
                            <h4><?php echo htmlspecialchars($row['name']); ?></h4>
                            <h3><?php echo htmlspecialchars(number_format($row['price'], 0, '', ' ')); ?> ₽</h3>
                            <div class="butt">
                                <button class="btn2">Купить</button>
                                <button class="btn3">В корзину</button>
                            </div>
                        </div>
                    <?php endwhile; ?>
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

	<div id="modal" class="modal">
		<div class="modal-content">
	<div class="cls">
		<span class="close">&times;</span>
	</div>
				<h2>Авторизация</h2>
				<form id="login-form">
					<div class="modal-item">
						<label for="login">Логин</label>
						<input type="text" id="login" name="login" required>
					</div>
					<div class="modal-item">
						<label for="password">Пароль</label>
						<input type="password" id="password" name="password" required>
					</div>
					<div class="vhod">
						<button type="submit">Войти</button>
					</div>
					<p id="error-message" class="error" style="display:none;color: #D91B1B"></p>
				</form>
				<p>Нет аккаунта? <a href="javascript:void(0);" id='reg'>Зарегистрироваться</a></p>
		</div>
</div>

<div id="registr" class="modal2">
	<div class="modal-content">
<div class="cls">
	<span class="close">&times;</span>
</div>
			<h2>Регистрация</h2>
			<form action="register.php" method="POST">
				<div class="modal-item">
						<label for="name">Имя</label>
						<input type="text" id="name" name="name" required>
				</div>
				<div class="modal-item">
						<label for="surname">Фамилия</label>
						<input type="text" id="surname" name="surname" required>
				</div>
				<div class="modal-item">
						<label for="login">Логин</label>
						<input type="text" id="register-login" name="login" required>
				</div>
				<div class="modal-item">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" required>
				</div>
				<div class="modal-item">
						<label for="password">Пароль</label>
						<input type="password" id="register-password" name="password" required>
				</div>
				<div class="modal-item">
						<label for="password_repeat">Подтвердите пароль</label>
						<input type="password" id="password_repeat" name="password_repeat" required>
				</div>
				<div class="checkbox">
						<input type="checkbox" name="rules" id="rules" required>
						<p>Согласие с обработкой данных</p>
				</div>
				<div class="vhod">
						<button type="submit">Зарегистрироваться</button>
				</div>
				<p id="register-error-message" class="error" style="display:none;"></p>
		</form>
	</div>
</div>

<script>
		// Проверка состояния авторизации
		const isLoggedIn = <?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true ? 'true' : 'false'; ?>;
		
		document.getElementById('user-icon').addEventListener('click', function() {
				if (isLoggedIn) {
						window.location.href = 'kabinet.php';
				} else {
						document.getElementById('loginModal').style.display = 'block';
				}
		});
</script>

<script src="script.js"></script>
<script src="modal\modal.js"></script>
</body>
</html>