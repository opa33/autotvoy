function toggleMenu() {
	var menu = document.getElementById("menu");
	if (menu.style.display === "block") {
			menu.style.opacity = "0";
			menu.style.maxHeight = "0";
			setTimeout(function() {
					menu.style.display = "none";
			}, 500); // Тайм-аут должен совпадать с длительностью перехода
	} else {
			menu.style.display = "block";
			setTimeout(function() {
					menu.style.opacity = "1";
					menu.style.maxHeight = "500px"; // Достаточно большая высота, чтобы вместить все пункты меню
			}, 10); // Небольшая задержка для применения display: block;
	}
    const icon = document.querySelector('.icon');
    icon.classList.toggle('open');
}

document.addEventListener('mousemove', (e) => {
    const floatingElements = document.querySelectorAll('.floating');
    floatingElements.forEach(el => {
        const speed = el.getAttribute('data-speed') || 5;
        const x = (window.innerWidth - e.pageX * speed) / 100;
        const y = (window.innerHeight - e.pageY * speed) / 100;
        el.style.transform = `translateX(${x}px) translateY(${y}px)`;
    });
});

document.addEventListener('scroll', () => {
    const floatingElements = document.querySelectorAll('.floating');
    floatingElements.forEach(el => {
        const speed = el.getAttribute('data-speed') || 2;
        const y = window.scrollY / speed;
        el.style.transform = `translateY(${-y}px)`;
    });
});

window.addEventListener('scroll', function() {
	const car = document.querySelector('.car8');
	const scrollPosition = window.scrollY;
	car.style.left = (0 - scrollPosition * 0.1) + '%';
});

document.addEventListener('scroll', () => {
    const floatingElements = document.querySelectorAll('.title');
    floatingElements.forEach(el => {
        const speed = el.getAttribute('data-speed') || 2;
        const y = window.scrollY / speed;
        el.style.transform = `translateY(${-y}px)`;
    });
});

document.addEventListener('scroll', () => {
    const floatingElements = document.querySelectorAll('.text');
    floatingElements.forEach(el => {
        const speed = el.getAttribute('data-speed') || 2;
        const y = window.scrollY / speed;
        el.style.transform = `translateY(${-y}px)`;
    });
});

document.addEventListener('scroll', () => {
    const floatingElements = document.querySelectorAll('.find');
    floatingElements.forEach(el => {
        const speed = el.getAttribute('data-speed') || 2;
        const y = window.scrollY / speed;
        el.style.transform = `translateY(${-y}px)`;
    });
});

document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Предотвращает перезагрузку страницы

    let formData = new FormData(this);
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'login.php', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            let response = JSON.parse(xhr.responseText);
            let errorMessage = document.getElementById('error-message');
            if (response.success) {
                // Перенаправление на личный кабинет
                window.location.href = 'kabinet.php';
            } else {
                errorMessage.style.display = 'block';
                errorMessage.textContent = response.message;
            }
        }
    };

    xhr.send(formData);
});

document.addEventListener("DOMContentLoaded", function() {
    const dropdownItems = document.querySelectorAll(".dropdown-item");
    const selectedItem = document.getElementById("selected-item");

    dropdownItems.forEach(item => {
        item.addEventListener("click", function() {
            const value = this.getAttribute("data-value");
            selectedItem.textContent = value;  // Обновляем текст выбранного элемента

            console.log("Selected value:", value);

            // Закрываем выпадающее меню после выбора
            document.getElementById("dropdown-toggle").checked = false;
        });
    });
});
