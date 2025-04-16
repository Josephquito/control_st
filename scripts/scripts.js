function irAlogin (){
    window.location.href = "login.html";
}

function irAregister (){
    window.location.href = "register.html";
}

const sidebar = document.getElementById("sidebar");
const links = document.getSelectorAll(".nav.link");

links.forEach(link => {
    link.addEventListener("Click", function (e) {
        const colapsar = this.getAttribute("data-colapsar");

        if (colapsar=="true") {
            sidebar.classList.add("colapsada");
        } else {
            sidebar.classList.remove("colapsada");
        }
    });
});