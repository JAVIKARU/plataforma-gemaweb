  $("#consultar").on("click", function () {
    var url1 = baseurl + "/index.php/pqrs/buscarafiliado",
    tpdocumento = $("#tpdocumento").val(),
    documento = $("#documento").val();

    $.ajax({
        url: url1,
        method: 'POST',
        data: {
            tpdocumento: tpdocumento,
            documento: documento
        },
        success: function (data) {
          data = JSON.parse(data);
        //   console.log(data);
          $("#pnombre").val(data.afiliado[0].PRI_NOMBRE);
          $("#snombre").val(data.afiliado[0].NOM_NOMBRE);
          $("#papellido").val(data.afiliado[0].PRI_APELLIDO);
          $("#sapellido").val(data.afiliado[0].SEG_APELLIDO);
          $("#departamento").val(data.afiliado[0].COD_DEPARTAMENTO).attr("selected", true);
          $("#municipio").val(data.afiliado[0].COD_CIUDAD).attr("selected", true);
        }
    });
  });

  $("#nacimiento").on("blur", function() {
    let fecha = document.getElementById("nacimiento").value;
    let hoy = new Date();
    let cumpleanos =  new Date(fecha);
    let edad = hoy.getFullYear() - cumpleanos.getFullYear();
    let m = hoy.getMonth() - cumpleanos.getMonth();
      if(m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad --;
      }
    $("#edad").val(edad);
});

   $("#tpdocumento").on("change", function () {
      var $tpdocumento = $("#tpdocumento").val();

    if($tpdocumento == "CC") {
      $(".fexpedicion").attr("hidden", false);
    }
    else {
      $(".fexpedicion").attr("hidden", true);
      this.expedicion = "";
    }
});

$("#etnico").on("change", function () {
   var etnico = $("#etnico").val();

   if(etnico == 4){
    $("#cont-resguardo").attr("hidden", false);
    $("#cont-comunidad").attr("hidden", false);
   }
   else {
    $("#cont-resguardo").attr("hidden", true);
    $("#cont-comunidad").attr("hidden", true);
   }
});

$("#terminos").on("change", function (e) {
  if($("#terminos:checked").length == 1) {
    $("#enviar").attr("disabled", false);
  }
  else if ($("#terminos:checked").length == 0) {
    $("#enviar").attr("disabled", true);
  }
});

$("input[name=flexRadioDefault]").on("click", function () {
    if($("input[name=flexRadioDefault]:checked").val() == "ips") {
      $(".eps").attr("hidden", true);
      $(".ips").attr("hidden", false);
    }
    else if ($("input[name=flexRadioDefault]:checked").val() == "eps") {
      $(".ips").attr("hidden", true);
      $(".eps").attr("hidden", false);
    }
});

$("#enviar").on("click", function () {
    var  url = baseurl + "/index.php/pqrs/crearpqrs",
    pqrs = $("#pqrs").val(),
    paciente_rad = $("#paciente_rad").val(),
    tpdocumento = $("#tpdocumento").val(),
    documento = $("#documento").val(),
    expedicion = $("#expedicion").val(),
    pnombre = $("#pnombre").val(),
    snombre = $("#snombre").val(),
    papellido = $("#papellido").val(),
    sapellido = $("#sapellido").val(),
    nacimiento = $("#nacimiento").val(),
    edad = $("#edad").val(),
    sexo = $("#sexo").val(),
    poblacion = $("#poblacion").val(),
    etnico = $("#etnico").val(),
    resguardo = $("#resguardo").val(),
    comunidad = $("#comunidad").val(),
    pais = $("#pais").val(),
    departamento = $("#departamento").val(),
    municipio = $("#municipio").val(),
    zona = $("#zona").val(),
    direccion = $("#direccion").val(),
    celular = $("#celular").val(),
    telefono = $("#telefono").val(),
    correo = $("#correo").val(),
    area = $("#area").val(),
    ips = $("#ips").val(),
    descripcion = $("#descripcion").val();

    //VALIDACION DE LOS CAMPOS DE TEXTO PARA INSERTAR EN LA BASE DE DATOS
    if(pqrs == "") {
        document.getElementById("pqrs").focus();
    }
    else if(paciente_rad == "") {
        document.getElementById("paciente_rad").focus();
    }
    else if(tpdocumento == "") {
        document.getElementById("tpdocumento").focus();
    }
    else if (documento == "") {
        document.getElementById("documento").focus();
    }
    else if(pnombre == "") {
        document.getElementById("pnombre").focus();
    }
    else if(papellido == ""){
        document.getElementById("papellido").focus();
    }
    else if(nacimiento == "") {
        document.getElementById("nacimiento").focus();
    }
    else if(poblacion == "") {
        document.getElementById("poblacion").focus();
    }
    else if(etnico == "") {
        document.getElementById("etnico").focus();
    }
    else if(departamento == "") {
        document.getElementById("departamento").focus();
    }
    else if(municipio == "") {
        document.getElementById("municipio").focus();
    }
    else if(zona == "") {
        document.getElementById("zona").focus();
    }
    else if(direccion == "") {
        document.getElementById("direccion").focus();
    }
    else if(celular == "") {
        document.getElementById("celular").focus();
    }
    else if(correo == "") {
        document.getElementById("correo").focus();
    }
    else if(descripcion == "") {
        document.getElementById("descripcion").focus();
    }
    else {
        $("#enviar").attr("disabled", true);
        $(".cargando").attr("hidden", false);

        $.ajax({
          url: url,
          method: "POST",
          data: {
            pqrs: pqrs,
            paciente_rad: paciente_rad,
            tpdocumento: tpdocumento,
            documento: documento,
            expedicion: expedicion,
            pnombre: pnombre,
            snombre: snombre,
            papellido: papellido,
            sapellido: sapellido,
            nacimiento: nacimiento,
            edad: edad,
            sexo: sexo,
            poblacion: poblacion,
            etnico: etnico,
            resguardo: resguardo,
            comunidad: comunidad,
            pais: pais,
            departamento: departamento,
            municipio: municipio,
            zona: zona,
            direccion: direccion,
            celular: celular,
            telefono: telefono,
            correo: correo,
            area: area,
            ips: ips,
            descripcion: descripcion
          },
          success: function (data) {
            data = JSON.parse(data);
            console.log(data.consecutivo);
            let respuesta = 'Solicitud registrada con exito su solicitud ha sido de creada exitosamente con el radicado N° <br><br> <span class="text-primary h2">'+ data.consecutivo +'</span>';
            $(".msjsuccess").html(respuesta);
            $("#modal-notificacion").modal("show");
            $("#enviar").attr("disabled", false);
            $(".cargando").attr("hidden", true);
          },
          error: function () {
            alert("Hubo un error ! No se ha podido crear la Pqrsf");
            $("#enviar").attr("disabled", false);
            $(".cargando").attr("hidden", true);
          }
        });
    }
});