const openModal = document.getElementById('open-modal');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.close-modal');

// Función para abrir el modal
function showModal() {
  modal.classList.add('opacity-100');
  modal.classList.remove('pointer-events-none');
}

// Función para cerrar el modal
function hideModal() {
  modal.classList.remove('opacity-100');
  modal.classList.add('pointer-events-none');
}

// Evento para abrir el modal al hacer clic en el botón
openModal.addEventListener('click', showModal);

// Evento para cerrar el modal al hacer clic en el botón de cerrar
closeModal.addEventListener('click', hideModal);

// Evento para cerrar el modal al hacer clic fuera del modal
modal.addEventListener('click', function(event) {
  if (event.target === modal) {
    hideModal();
  }
});

// Evento para cerrar el modal al presionar la tecla ESC
document.addEventListener('keydown', function(event) {
  if (event.key === 'Escape') {
    hideModal();
  }
});