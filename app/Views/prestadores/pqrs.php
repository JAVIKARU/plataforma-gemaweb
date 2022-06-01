<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pqrs / Crear</title>
    <?php require_once('componentes/head.php'); ?>
  </head>
<body>
<div class="container">
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="text-center">
      <img src="<?= base_url(); ?>/img/logo.png"  width="100px;">
      </div>
    </div>
  </div>
        <div class="row">
          <div class="col-md-6">
            <h4 class="push-left text-uppercase mt-4 pull-rigth">Pijaos Salud EPSI</h4>
          </div>
          <div class="col-md-3 offset-md-3">
            <a class="btn rounded-pill btn-primary btn-sm mt-4 text-uppercase" href="<?= base_url(); ?>/pqrs/buscar">
              Consulta tu pqrs
            </a>
          </div>
        </div>
        <hr>
        <h3>Este formulario está destinado para presentar PQRD  relacionados con la prestación de servicios de salud.</h3>
        <div class="alert alert-success mt-3" role="alert">
          Los campos con * son de diligenciamiento obligatorio
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="was-validated">
              <div class="form-group">
                <label>Tipo de Solicitud</label>
                <select
                  class="form-control form-control-sm text-uppercase"
                  required aria-label=""
                  id="pqrs"
                  v-model="pqrs"
                >
                  <option value="">SELECCIONE</option>
                  <option value="PETICION">Petición</option>
                  <option value="QUEJA">Queja</option>
                  <option value="RECLAMO">Reclamo</option>
                  <option value="SUGERENCIA">Sugerencia</option>
                  <option value="FELICITACION">Felicitación</option>
                </select>
                <div class="invalid-feedback">Ingrese el tipo de petición</div>
              </div>
            </div>
          </div>
        </div>
        <p> ¿ Es usted el paciente o afectado ? </p>
        <div class="was-validated">
          <div class="form-check">
            <input
              type="radio"
              class="form-check-input"
              id="paciente_rad"
              name="paciente_rad"
              value="1" required
              v-model="paciente_rad"
            >
            <label class="form-check-label" for="validationFormCheck2">Si</label>
          </div>
          <div class="form-check mb-3">
            <input
              type="radio"
              class="form-check-input"
              id="flexRadioDefault2"
              name="paciente_rad"
              value="0"
              required
              v-model="paciente_rad"
            >
            <label class="form-check-label" for="validationFormCheck3">No</label>
          <div class="invalid-feedback">Seleccione si usted es el paciente afectado</div>
        </div>
       </div>
       <h6>Información del paciente</h6>
       <hr>
       <div class="row">
                <div class="col-md-3">
                  <div class="was-validated">
                    <div class="form-group">
                      <label>Tipo de Documento *</label>
                      <select
                        id="tpdocumento"
                        class="form-control form-control-sm"
                        required aria-label=""
                        v-model="tpdocumento"
                      >
                       <option value="">SELECCIONE</option>
                        <?php foreach($tpdocumento->getResult() as $tpdocumentos){ ?>
                       <option value="<?= $tpdocumentos->TIP_DOCUMENTO; ?>"> <?= $tpdocumentos->NOM_DOCUMENTO; ?> </option>
                       <?php } ?>
                     </select>
                   <div class="invalid-feedback">Ingrese el tipo de documento</div>
                 </div>
               </div>
             </div>
             <div class="col-md-3">
               <div class="was-validated">
                 <div class="form-group">
                   <label>Documento *</label>
                   <input
                     type="number"
                     id="documento"
                     class="form-control form-control-sm"
                     required aria-label=""
                     v-model="documento"
                   >
                   <div class="invalid-feedback">Ingrese el numero de documento</div>
                 </div>
               </div>
             </div>
             <div class="col-md-4 fexpedicion"  hidden>
                 <div class="form-group">
                   <label>Expedición de su documento </label>
                   <input
                     type="date"
                     id="expedicion"
                     class="form-control form-control-sm"
                   >
                 </div>
             </div>
             <div class="col-md-1 mt-4" id="loading" hidden>
               <div class="spinner-border text-success" role="status">
                 <span class="visually-hidden"></span>
               </div>
             </div>
             <div class="col-md-1 mt-2">
               <button class="btn btn-primary btn-sm mt-4" >Consultar</button>
             </div>
           </div>
          <div class="row mt-2">
         <div class="col-md-3">
           <div class="form-group">
             <label>Primer Nombre *</label>
             <input
               type="text"
               id="pnombre"
               class="form-control form-control-sm"
             >
           </div>
         </div>
         <div class="col-md-3">
           <div class="form-group">
             <label>Segundo Nombre </label>
             <input
               type="text"
               id="snombre"
               class="form-control form-control-sm"
              >
           </div>
         </div>
         <div class="col-md-3">
           <div class="form-group">
             <label>Primer Apellido *</label>
             <input
               type="text"
               id="papellido"
               class="form-control form-control-sm"
              >
           </div>
         </div>
         <div class="col-md-3">
           <div class="form-group">
             <label>Segundo Apellido</label>
             <input
               type="text"
               id="sapellido"
               class="form-control form-control-sm"
             >
           </div>
         </div>
       </div>
       <div class="row mt-2">
          <div class="col-md-6">
            <div class="form-group">
              <label>Fecha de Nacimiento *</label>
              <input
                type="date"
                id="nacimiento"
                class="form-control form-control-sm"
              >
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Edad</label>
              <input
                type="number"
                id="edad"
                class="form-control form-control-sm"
              >
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Sexo *</label>
              <br>
              <div class="form-check form-check-inline">
                   <input
                     class="form-check-input"
                     type="radio"
                     name="inlineRadioOptions"
                     id="sexo"
                     value="M"
                   >
                   <label class="form-check-label" for="inlineRadio1">Masculino</label>
                 </div>
                   <div class="form-check form-check-inline">
                     <input
                       class="form-check-input"
                       type="radio"
                       name="inlineRadioOptions"
                       id="sexo"
                       value="F"
                     >
                     <label class="form-check-label" for="inlineRadio2">Femenino</label>
                   </div>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-3">
                 <div class="was-validated">
                   <div class="form-group">
                     <label>Población Especial *</label>
                     <select
                       id="poblacion"
                       class="form-control"
                       required aria-label=""
                      >
                       <option value="" >SELECCIONE</option>
                       <?php foreach($poblacion->getResult() as $poblaciones) { ?>
                       <option value="<?= $poblaciones->CONSECUTIVO; ?>"> <?= $poblaciones->NOMPOBLACION; ?> </option>
                       <?php } ?>
                     </select>
                   <div class="invalid-feedback">Ingrese el tipo de población</div>
                 </div>
               </div>
             </div>
             <div class="col-md-3">
               <div class="was-validated">
                 <div class="form-group">
                     <label>Grupo Étnico *</label>
                     <select
                       id="etnico"
                       class="form-control"
                       required aria-label=""
                     >
                       <option value="">SELECCIONE</option>
                       <?php foreach($etnico->getResult() as $etnicos) { ?>
                       <option value="<?= $etnicos->CONSECUTIVO; ?>"> <?= $etnicos->NOMBRE; ?> </option>
                       <?php } ?>
                     </select>
                   <div class="invalid-feedback">Ingrese el grupo étnico</div>
                 </div>
               </div>
             </div>
             <div class="col-md-3" id="cont-resguardo">
               <label>Resguardo</label>
               <input
                 type="text"
                 class="form-control"
                 id="resguardo"
               >
             </div>
             <div class="col-md-3" id="cont-comunidad">
               <label>Comunidad</label>
               <input
                 type="text"
                 class="form-control"
                 id="comunidad"
               >
             </div>
           </div>
           <hr>
           <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label>País *</label>
                  <input
                    type="text"
                    id="pais"
                    class="form-control form-control-sm"
                    value="COLOMBIA"
                    readonly
                  >
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>Departamento *</label>
                  <select
                    id="departamento"
                    class="form-control form-control-sm"
                    v-model="departamento"
                  >
                    <option value="">SELECCIONE</option>
                       <?php foreach($departamento->getResult() as $departamentos) { ?>
                       <option value="<?= $departamentos->COD_DEPARTAMENTO; ?>"> <?= $departamentos->NOM_DEPARTAMENTO; ?> </option>
                       <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Municipio *</label>
                  <select
                    id="municipio"
                    class="form-control form-control-sm"
                    v-model="municipio"
                  >
                    <option value="">SELECCIONE</option>
                      <?php foreach($ciudad->getResult() as $ciudades) { ?>
                        <option value="<?= $ciudades->COD_CIUDAD; ?>"> <?= $ciudades->NOM_CIUDAD; ?> </option>
                      <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group" >
                  <label>Zona *</label>
                  <select
                    id="zona"
                    class="form-control form-control-sm"
                    v-model="zona"
                  >
                    <option value="">SELECCIONE</option>
                    <?php foreach($zona->getResult() as $zonas) { ?>
                      <option value="<?= $zonas->COD_ZONA; ?>"> <?= $zonas->NOM_ZONA; ?> </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="was-validated">
                  <div class="form-group" >
                    <label>Dirección *</label>
                    <input
                      type="text"
                      id="direccion"
                      class="form-control form-control-sm"
                      required aria-label=""
                    >
                  <div class="invalid-feedback">Ingrese la direccion de residencia</div>
                 </div>
               </div>
             </div>
           </div>
            <hr>
            <div class="row">
              <div class="col-md-3">
                <div class="was-validated">
                  <div class="form-group">
                    <label>Celular *</label>
                    <input
                      type="number"
                      id="celular"
                      class="form-control form-control-sm"
                      required aria-label=""
                    >
                  <div class="invalid-feedback">Ingrese un numero de contacto</div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Teléfono Fijo </label>
                <input
                  type="number"
                  id="telefono"
                  class="form-control form-control-sm"
                >
              </div>
            </div>
            <div class="col-md-6">
              <div class="was-validated">
                <div class="form-group">
                    <label>Correo Electronico</label>
                    <input
                      type="email"
                      id="correo"
                      class="form-control form-control-sm"
                      required aria-label=""
                    >
                  <div class="invalid-feedback">Ingrese correo donde llegara la respuesta</div>
                </div>
              </div>
             </div>
            </div>
            <h3 class="mt-2">Detalle de la petición</h3>
            <hr>
            <p>Permítanos conocer más sobre  la IPS o área de la EPSI  a la cual quiere formular su PQRD</p>
            <br>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      value="ips"
                    />
                      <label class="form-check-label">
                        IPS
                      </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault"
                      value="eps"
                      />
                        <label class="form-check-label" for="flexRadioDefault2">
                          Pijaos Salud
                        </label>
                    </div>
                </div>
              </div>
              <div class="col-md-9 eps" >
                <div class="form-group">
                  <label>Área  a la que remite la PQRD</label>
                  <select
                    id="area"
                    class="form-control"
                    required aria-label=""
                  >
                    <option value="">SELECCIONE</option>
                    <?php foreach($area->getResult() as $areas) { ?>
                    <option value="<?= $areas->COD_AREA; ?>"> <?= $areas->NOM_AREA; ?> </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-9 ips" >
                <div class="form-group">
                  <label>Prestador de servicio</label>
                  <select
                    id="ips"
                    class="form-control"
                    required aria-label=""
                  >
                    <option value="">SELECCIONE</option>
                    <?php foreach($prestador->getResult() as $prestadores) { ?>
                    <option value="<?= $prestadores->NIT_PRESTADOR; ?>"><?= $prestadores->NOM_PRESTADOR; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="was-validated">
                  <div class="form-group">
                    <label for="validationTextarea" class="form-label">Escriba aqui de manera resumida lo que esta sucediendo</label>
                    <textarea
                      class="form-control"
                      id="descripcion"
                      placeholder=""
                      required
                    ></textarea>
                    <div class="invalid-feedback">
                      Por favor ingrese un mensaje en el área de texto
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Adjuntar soporte</label>
                  <input
                    type="file"
                    class="form-control-file"
                    id="soporte"
                  >
                </div>
              </div>
            </div>
              <p> <span class=""> <strong> AUTORIZACIÓN PREVIA PARA EL TRATAMIENTO DE DATOS PERSONALES Y DATOS PERSONALES SENSIBLES </strong></span>
                Manifiesto de manera clara, expresa, libre, inequívoca y espontánea que le otorgo a PIJAOS SALUD EPSI en su calidad de RESPONSABLE
                del tratamiento de mis datos personales, mi consentimiento previo para recolectar, almacenar, usar, circular, suprimir, reportar y
                en general para tratar los DATOS PERSONALES, DATOS PERSONALES SENSIBLES y demás información susceptible de tratamiento, registrada
                a mi nombre y/o de mi grupo familiar en sus Bases de Datos, con la finalidad de realizar las actividades propias del aseguramiento
                en salud y en los términos previstos en su POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES  disponible en su página web www.pijaossalud.com
                a través del link <a target="_blank" href=" https://www.pijaossalud.com/tratamiento-de-datos-personales/">tratamiento de datos personales</a> todo lo cual conforme
                lo establecido en la Ley Estatutaria 1581 de 2012 y demás normas que la sustituyan, adicionen, reglamenten, complementen o modifiquen. La
                presente autorización la he suministrado de forma voluntaria. Al hacer clic en el botón ENVIAR, usted acepta la remisión de la
                PQRD a Pijaos Salud EPSI. En la opción SEGUIMIENTO DE PQRD podrá verificar el estado de la respuesta.
              </p>
            <div class="was-validated">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value="no"
                  id="terminos"
                  name="terminos"
                  required
                  v-model="terminos"
                  @change="aceptarTerminos"
                >
                <label class="form-check-label" for="flexCheckDefault">
                  Acepto los términos y condiciones
                </label>
              <div class="invalid-feedback">Acepta los términos y condiciones</div>
            </div>
          </div>
            <button
              class="btn btn-primary btn-lg checkterminos mt-5"
              id="enviar"
              disabled
            >
              Enviar
            </button>
            <div class="spinner-border text-primary cargando" role="status" hidden>
            </div>
            <!-- <button class="btn btn-outline-primary btn-lg mt-5" onclick="cargarArchivoDrive();" type="submit">Borrar</button> -->
          </div>
          <div class="modal" tabindex="-1" id="modal-notificacion">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-success text-uppercase">Se ha creado correctamente</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                           x
                         </button>
                    -->
                </div>
                <div class="modal-body">
                  <p class="text-center msjsuccess">

                  </p>
                </div>
                <div class="modal-footer text-capitalize">
                  <i class="fas fa-home"></i><small>Pijaos salud EPS - Indigena</small>
                </div>
              </div>
            </div>
          </div>

  <?php require_once('componentes/scripts.php'); ?>
</body>
</html>