<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>АвтоТвое - запчасти для автомобилей</title>
	<link rel="stylesheet" href="styles.css">
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
					<h1 class="title">Автозапчасти</h1>
					<p class="text">Подберем запчасти на любой автомобиль в короткие сроки </p>
				</div>
				<div class="find">
					<input placeholder="Поиск запчастей">
					<button class="btn"><img src="img\arrow-alt-right 1.svg" alt=""></button>
				</div>
			</div>
		</div>
	</header>
	<div id="menu" class="menu">
		<a href="#">Главная</a>
		<a href="catalog.php">Каталог</a>
		<a href="about.php">О нас</a>
		<a href="#">Где нас найти</a>
	</div>
	<div class="parts">
		<div class="floating" style="top: 13%; left: 10%;">
			<img src="img\eng.svg" alt="">
			<div class="ellipse" style="width: 200px;height: 200px;"></div>
		</div>
		<div class="floating" style="top: 15%; left: 82%;">
			<img src="img\disk.svg" alt="">
			<div class="ellipse" style="width: 230px;height: 250px;"></div>
		</div>
		<div class="floating" style="top: 40%; left: 7%;">
			<img src="img\ngk.svg" alt="">
			<div class="ellipse" style="width: 150px;height: 170px;"></div>
		</div>
		<div class="floating" style="top: 9%; left: 55%">
			<img src="img\ex.svg" alt="">
			<div class="ellipse"></div>
		</div>
		<div class="floating" style="top: 33%; left: 63%;">
			<img src="img\turb.svg" alt="">
			<div class="ellipse" style="width: 150px;height: 150px;"></div>
		</div>
		<div class="floating" style="top: 46%; left: 81%;">
			<img src="img\kor.svg" alt="">
			<div class="ellipse"></div>
		</div>
	</div>
	<div class="car8">
		<img src="img\car8.png" alt="">
	</div>
	<div class='rect'></div>
	<div class='rect2'>
		<section class="prod">
			<div class="сontainer">
				<h2>Продукция</h2>
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
		<section class="why">
			<div class="сontainer">
				<h2>Почему мы?</h2>
				<div class="why-row">
					<div class="why-card">
						<img src="img\01.svg" alt="">
						<div class="why-text">
							<h4>Широкий ассортимент</h4>
							<p>Мы предлагаем обширный каталог запчастей для различных марок 
								и моделей автомобилей. 
								От проверенных поставщиков 
								и гарантируем высокое качество всех товаров.</p>
						</div>
					</div>
					<div class="why-card">
						<img src="img\02.svg" alt="">
						<div class="why-text">
							<h4>Гарантия качества</h4>
							<p>Многие автолюбители 
								и профессиональные механики выбирают Нас благодаря нашему внимательному отношению 
								к каждому клиенту и высокому уровню обслуживания.</p>
						</div>
					</div>
					<div class="why-card">
						<img src="img\03.svg" alt="">
						<div class="why-text">
						<h4>Быстрая доставка</h4>
							<p>Быстрая доставка позволяет получить заказанные запчасти 
								в кратчайшие сроки. Для вашего удобства у нас предусмотрены различные варианты получения товара.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="where">
			<div class="сontainer">
				<h2>Где нас  найти?</h2>
				<div class="where-row">
					<div class="where-block">
						<div class="where-card1">
							<img src="img\land-layer-location 1.svg" alt="">
							<p>г. Пермь, ул. Пушкина 107а</p>
						</div>
						<div class="where-card2">
							<div class="where-num">
								<img src="img\phone-call 1.svg" alt="">
								<p>+7 (342) 236-28-03</p>
							</div>
							<div class="where-num">
								<img src="img\at 1.svg" alt="">
								<p>autoTvoy@mail.ru</p>
							</div>
						</div>
					</div>
					<div class="where-block">
						<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A310e3056e72f578b3460a8d151bb47076614cc19ad598df373a22cd72540601a&amp;source=constructor" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</section>
		<section class="partn">
			<div class="сontainer">
				<h2>Наши партнеры</h2>
				<div class="partn-row">
					<div class="partn-card">
						<img src="img\image 5.svg" alt="">
					</div>
					<div class="partn-card">
						<img src="img\123 1.svg" alt="">
					</div>
					<div class="partn-card">
						<img src="img\por 1.svg" alt="">
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