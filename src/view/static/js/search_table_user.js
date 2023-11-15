

  function searchTable() {
    // Obtener el valor de búsqueda del usuario
    var input = document.getElementById("searchInput");
    var filter = input.value.toUpperCase();
  
    // Obtener la tabla y las filas de la tabla
    var table = document.getElementById("miTabla3");
    var rows = table.querySelectorAll("tbody tr");
  
    // Iterar por todas las filas y ocultar aquellas que no coincidan con la búsqueda del usuario
    for (var i = 0; i < rows.length; i++) {
      var cells = rows[i].getElementsByTagName("td");
      var found = false;
      for (var j = 0; j < cells.length; j++) {
        var cell = cells[j];
        if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
          found = true;
          break;
        }
      }
      if (found) {
        rows[i].style.display = "";
      } else {
        rows[i].style.display = "none";
      }
    }
  }