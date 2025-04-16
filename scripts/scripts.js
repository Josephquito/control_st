function irAlogin (){
    window.location.href = "login.html";
}

function irAregister (){
    window.location.href = "register.html";
}

const sidebar = document.getElementById("sidebar");
const links = document.querySelectorAll(".nav-link");

links.forEach(link => {
    link.addEventListener("click", function (e) {
        const colapsar = this.getAttribute("data-colapsar");

        if (colapsar=="true") {
            sidebar.classList.add("colapsada");
        } else {
            sidebar.classList.remove("colapsada");
        }
    });
});

const btnMas = document.getElementById('btn-mas');
const menuMas = document.getElementById('menu-mas');

btnMas.addEventListener('click', (e) => {
    e.stopPropagation();
    menuMas.style.display = menuMas.style.display === 'block' ? 'none' : 'block';
});

document.addEventListener('click', ()=> {
    menuMas.style.display = 'none';
});