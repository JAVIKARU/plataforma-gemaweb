   //FUNCION ENCARGADA DE BUSCAR EL AFILIADO EN LA BASE DE DATOS
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
   //FUNCION ENCARGADA DE CALCULAR LA EDAD DE LOS AFILIADOS SEGUN SU AÑO DE NACIMIENTO
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
   //FUNCION ENCARGADA DE MOSTRAR LA FECHA DE EXPEDICION OCULTA
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
   //FUNCION ENCARGADA DE MOSTRAR LOS RESGUARDOS OCULTOS EN EL FORMULARIO
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
   //FUNCION ENCARGADA DE HABILITAR EL BOTON DE TERMINOS Y CONDICIONES
   $("#terminos").on("change", function (e) {
     if($("#terminos:checked").length == 1) {
       $("#enviar").attr("disabled", false);
     }
     else if ($("#terminos:checked").length == 0) {
       $("#enviar").attr("disabled", true);
     }
   });
   //FUNCION ENCARGADA DE HABILITAR LA IPS Y LA EPS
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
   //FUNCION ENCARGADA DE CREAR LA PQRS EN LA BASE DE DATOS
   $("#enviar").on("click", function () {
     var url2 = baseurl + "/index.php/pqrs/crearpqrs",
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
     descripcion = $("#descripcion").val(),
     archivo = document.getElementById("soporte"),
     formdata = new FormData();
     // VALORES PARA EL FORMDATA
     formdata.append('archivo', archivo.files[0]);
     formdata.append('pqrs', pqrs);
     formdata.append('paciente_rad', paciente_rad);
     formdata.append('tpdocumento', tpdocumento);
     formdata.append('documento', documento);
     formdata.append('expedicion', expedicion);
     formdata.append('pnombre', pnombre);
     formdata.append('snombre', snombre);
     formdata.append('papellido', papellido);
     formdata.append('sapellido', sapellido);
     formdata.append('nacimiento', nacimiento);
     formdata.append('edad', edad);
     formdata.append('sexo', sexo);
     formdata.append('poblacion', poblacion);
     formdata.append('etnico', etnico);
     formdata.append('resguardo', resguardo);
     formdata.append('comunidad', comunidad);
     formdata.append('pais', pais);
     formdata.append('departamento', departamento);
     formdata.append('municipio', municipio);
     formdata.append('zona', zona);
     formdata.append('direccion', direccion);
     formdata.append('celular', celular);
     formdata.append('telefono', telefono);
     formdata.append('correo', correo);
     formdata.append('area', area);
     formdata.append('ips', ips);
     formdata.append('descripcion', descripcion);
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
         url: url2,
         processData: false,
         contentType: false,
         data: formdata,
         method: "POST",
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
   // FUNCIONAMIENTO DE LA BUSCAR PQRS
   $("#btn-consultar").on("click", function () {
     var url3 = baseurl + "/index.php/pqrs/buscarpqrs",
     tpdocumento = $("#tpdocumento2").val(),
     documento = $("#documento2").val(),
     radicado = $("#radicado").val(),
     table = $("#consulta-result");
       $.ajax( {
         url: url3,
         method: "POST",
         data: {
           tpdocumento: tpdocumento,
           documento: documento,
           radicado: radicado
         },
         success: function (data) {
           if(data == "error") {
             $("#estado1").html("SOLICITUD RADICADA");
           }
           else {
             data = JSON.parse(data);
             // console.log(data.pqrs[0]);
             nombre = $("#nombres1").val(data.pqrs[0].PRI_NOMBRE + " " + data.pqrs[0].SEG_NOMBRE),
             apellidos1 = $("#apellidos1").val(data.pqrs[0].PRI_APELLIDO + " " + data.pqrs[0].SEG_APELLIDO),
             celular1 = $("#celular1").val(data.pqrs[0].CELULAR1),
             direccion1 = $("#direccion1").val(data.pqrs[0].DIRECCION),
             correo1 = $("#correo1").val(data.pqrs[0].CORREOEMAIL),
             fecha1 = $("#fecha1").val(data.pqrs[0].FECHA_REGISTRO),
             solicitud1 = $("#solicitud1").val(data.pqrs[0].DETALLE),
             respuesta1 = $("#respuesta1").val(data.pqrs[0].SOL_ESPERADA);
             let respuesta = data.pqrs.map(function (result){
               return '<tr><td>'+result.DES_SOLUCION+'</td></tr>';
             });
             table.html(respuesta);
             $("#estado1").html(data.pqrs[0].DES_EST_QUEJA);
             let pdf = '<a target="blank" href="'+data.pqrs[0].DOCUMENTO_RESPUESTA+'" class="text-danger text-uppercase"><i class="fas fa-file-pdf fa-2x"></i> Descargar archivo de respuesta</a>';
             $("#content").html(pdf);
             $("#container-pdf").attr("hidden", false);
           }
         },
         error: function() {
         }
       });
   });
