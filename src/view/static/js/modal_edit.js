$(document).on('click', '.boton-modal', function() {
    // Obtener el contenido desde el atributo data-contenido del botón
    var contenido = $('#' + $(this).data('contenido')).html();
  
    // Mostrar el modal y el contenido correspondiente
    $('#contenido-modal').html(contenido);
    $('#mi-modal').show();
  });
  
  $(document).on('click', '.cerrar-modal', function() {
    // Cerrar el modal al hacer clic en el botón de "Cerrar"
    $('#mi-modal').hide();
  });