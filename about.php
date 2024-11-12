<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>АвтоТвое - запчасти для автомобилей</title>
	<link rel="stylesheet" href="about.css">
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
					<h1 class="title">О нас</h1>
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
		<section class="about">
			<div class="сontainer">
				<div class='logob'>
					<img src="img\LogoBlue.svg" alt="">
				</div>
				<div class="about-row">
					<div class="about-card1">
						<h4>АвтоТвое - запчасти, которым доверяют</h4>
						<p>МЫ ваш надежный партнер в мире автозапчастей. Мы предлагаем широкий ассортимент высококачественных деталей 
							для всех марок и моделей автомобилей, обеспечивая надежность и долговечность каждой покупки. Наша миссия - сделать процесс обслуживания и ремонта вашего автомобиля простым и доступным. В "АвтоТвое" вы найдете 
							не только запчасти, но и экспертные советы 
							от наших опытных специалистов. Доверьтесь нам, и ваш автомобиль всегда будет на ходу!</p>
					</div>
					<div class="about-card2">
						<img src="img\abu.png" alt="">
					</div>
				</div>
			</div>
		</section>
		<section class="prod">
			<div class="сontainer">
				<h2>Новый завоз товаров</h2>
				<div class="prod-row">
					<div class="prod-card">
						<img src="img/img.png" alt="">
						<h4>Двигатель S63B1</h4>
						<h3>655 000 ₽</h3>
						<div class="butt">
							<button class="btn2">Купить</button>
							<button class="btn3">В корзину</button>
						</div>
					</div>
					<div class="prod-card">
						<img src="img/img.png" alt="">
						<h4>Двигатель S63B1</h4>
						<h3>655 000 ₽</h3>
						<div class="butt">
							<button class="btn2">Купить</button>
							<button class="btn3">В корзину</button>
						</div>
					</div>
					<div class="prod-card">
						<img src="img/img.png" alt="">
						<h4>Двигатель S63B1</h4>
						<h3>655 000 ₽</h3>
						<div class="butt">
							<button class="btn2">Купить</button>
							<button class="btn3">В корзину</button>
						</div>
					</div>
				</div>
				<div class="btn-more">
					<button class="btn4">Больше товаров</button>
				</div>
			</div>
		</section>
		<section class='banner'>
			<div class="сontainer">
				<img src="img\banner.png" alt="">
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