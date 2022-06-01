$(document).ready( function () {
    $('#table_diagnosticos').DataTable({
      "lengthMenu": [4, 50, 100, 200],
      "language":{
      "processing": "Procesando",
      "search": "Buscar:",
      "lengthMenu": "Ver _MENU_ Usuarios",
      "info": "Mirando _START_ a _END_ de _TOTAL_ Usuarios",
      "zeroRecords": "No encontraron resultados",
      "paginate": {
        "first":      "Primera",
        "last":       "Ultima",
        "next":       "Siguiente",
        "previous":   "Anterior"
      }
    }
    });
});

$(document).ready( function () {
    $('#table_procedimientos').DataTable({
      "lengthMenu": [4, 50, 100, 200],
      "language":{
      "processing": "Procesando",
      "search": "Buscar:",
      "lengthMenu": "Ver _MENU_ Usuarios",
      "info": "Mirando _START_ a _END_ de _TOTAL_ Usuarios",
      "zeroRecords": "No encontraron resultados",
      "paginate": {
        "first":      "Primera",
        "last":       "Ultima",
        "next":       "Siguiente",
        "previous":   "Anterior"
      }
    }
    });
});

$("#documento").on("blur", function() {
    var tpdocumento = $("#tpdocumento").val(),
    documento = $("#documento").val(),
    url = "" + "/" + tpdocumento + "/" + documento  ;
    if(tpdocumento == ''){
        $("#tpdocumento").addClass("is-invalid");
        $("#tpdocumento").focus();
    }
    $.ajax({
      url: url,
      method: "GET",
      success: function (data) {
        console.log(data);
      }
    });
});