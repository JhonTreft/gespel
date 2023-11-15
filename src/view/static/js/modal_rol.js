// Obtener el modal y el botón para abrirlo
var modal3 = document.getElementById("modal-3");
var btn3= document.getElementById("modal-btn-3");

// Obtener el botón para cerrar el modal
var closeBtn3 = document.querySelector(".modal-close-3");

// Cuando se hace clic en el botón, se muestra el modal
btn3.onclick = function() {
  modal3.classList.remove("hidden");
}

// Cuando se hace clic en el botón de cerrar o en cualquier parte fuera del modal, se cierra
closeBtn3.onclick = function() {
  modal3.classList.add("hidden");
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal3.classList.add("hidden");
  }
}

