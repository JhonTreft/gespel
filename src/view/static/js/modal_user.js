// Obtener el modal y el botón para abrirlo
var modal = document.getElementById("modal");
var btn = document.getElementById("modal-btn");

// Obtener el botón para cerrar el modal
var closeBtn = document.querySelector(".modal-close");

// Cuando se hace clic en el botón, se muestra el modal
btn.onclick = function() {
  modal.classList.remove("hidden");
}

// Cuando se hace clic en el botón de cerrar o en cualquier parte fuera del modal, se cierra
closeBtn.onclick = function() {
  modal.classList.add("hidden");
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.classList.add("hidden");
  }
}

