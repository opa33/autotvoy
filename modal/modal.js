document.getElementById('user-icon').onclick = function() {
    document.getElementById('modal').style.display = "block";
    document.body.classList.add('no-scroll');
}

document.querySelectorAll('.close').forEach(function(element) {
    element.onclick = function() {
        document.getElementById('modal').style.display = "none";
        document.getElementById('registr').style.display = "none";
        document.body.classList.remove('no-scroll');
    }
});

window.onclick = function(event) {
    if (event.target == document.getElementById('modal')) {
        document.getElementById('modal').style.display = "none";
        document.body.classList.remove('no-scroll');
    } else if (event.target == document.getElementById('registr')) {
        document.getElementById('registr').style.display = "none";
        document.body.classList.remove('no-scroll');
    }
}

document.getElementById('reg').onclick = function() {
    document.getElementById('modal').style.display = "none";
    document.getElementById('registr').style.display = "block";
}
