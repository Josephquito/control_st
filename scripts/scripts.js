function irAlogin (){
    window.location.href = "login.html";
}

function irAregister (){
    window.location.href = "register.html";
}

const btnMas = document.getElementById('btn-mas');
const menuMas = document.getElementById('menu-mas');

btnMas.addEventListener('click', (e) => {
    e.stopPropagation();
    menuMas.style.display = menuMas.style.display === 'block' ? 'none' : 'block';
});

document.addEventListener('click', ()=> {
    menuMas.style.display = 'none';
});

document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function () {
        if (this.getAttribute('data-colapsar') === 'true') {
            localStorage.setItem('sidebarEstado', 'colapsada');
        } else {
            localStorage.removeItem('sidebarEstado');
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const estado = localStorage.getItem('sidebarEstado');

    if (estado === 'colapsada') {
        sidebar.classList.add('colapsada');
    } else {
        sidebar.classList.remove('colapsada');
    }
});

const btnAbrir = document.querySelector(".boton-plataforma button");
const modal = document.getElementById("modal-plataforma");
const cerrar = document.getElementById("cerrar-modal");

btnAbrir.addEventListener("click", () => {
    modal.style.display = "block";
});

cerrar.addEventListener("click", () => {
    modal.style.display = "none";
});

window.addEventListener("click", (e) => {
    if (e.target == modal) {
        modal.style.display = "none";
    }
});

function abrirModalEliminar() {
    document.getElementById('modal-eliminar').style.display = 'block';
}

function cerrarModalEliminar() {
    document.getElementById('modal-eliminar').style.display = 'none';
}

window.onclick = function(event) {
    const modal = document.getElementById('modal-eliminar');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

function mostrarModal(perfil) {
    document.getElementById('modalPerfil').style.display = 'block';
  }

  function cerrarModal() {
    document.getElementById('modalPerfil').style.display = 'none';
  }

  window.onclick = function(e) {
    const modal = document.getElementById('modalPerfil');
    if (e.target === modal) {
      cerrarModal();
    }
  }