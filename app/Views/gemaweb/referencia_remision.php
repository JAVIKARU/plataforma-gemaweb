<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemaweb - Remision</title>
    <?php require_once("componentes/head.php"); ?>
</head>
<body>
<?php require_once("componentes/menu.php"); ?>
    <?php require_once("componentes/menu_superior.php"); ?>
    <?php require_once("componentes/noestadisticas.php"); ?>
    <div class="container-fluid mt--7">
          <div class="row">
            <div class="col">
              <div class="card shadow border-0">
                <div class="container-fluid">
                  <h3 class="mt-4 mb-3">Cargue de Remisión</h3>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Tipo de documento</label>
                        <select class="form-control form-control-sm" id="tpdocumento">
                           <option value="">SELECCIONE</option>
                           <?php foreach($tpdocumento->getResult() as $tpdocumentos) { ?>
                           <option value="<?= $tpdocumentos->TIP_DOCUMENTO; ?>"> <?= $tpdocumentos->NOM_DOCUMENTO; ?> </option>
                            <?php } ?>
                        </select>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                          Ingrese el tipo de documento
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Documento</label>
                        <input type="number" class="form-control form-control-sm" id="documento" min="0">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>Fecha</label>
                        <input type="date" class="form-control form-control-sm" id="fecha" value="<?php echo date("Y-m-d") ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>Regimen</label>
                        <input type="text" class="form-control form-control-sm" id="regimen" readonly>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                     <div class="col-md-3">
                       <div class="form-group">
                          <label>Primer apellido</label>
                          <input type="text" class="form-control form-control-sm" id="papellido">
                       </div>
                     </div>
                     <div class="col-md-3">
                       <div class="form-group">
                          <label>Segundo apellido</label>
                          <input type="text" class="form-control form-control-sm" id="sapellido">
                       </div>
                     </div>
                     <div class="col-md-3">
                       <div class="form-group">
                          <label>Primer Nombre</label>
                          <input type="text" class="form-control form-control-sm" id="pnombre">
                       </div>
                     </div>
                     <div class="col-md-3">
                       <div class="form-group">
                          <label>Segundo Nombre</label>
                          <input type="text" class="form-control form-control-sm" id="snombre">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-3">
                       <div class="form-group">
                         <label>Fecha nacimiento</label>
                         <input type="date" class="form-control form-control-sm" id="nacimiento">
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                         <label>Edad</label>
                         <input type="number" class="form-control form-control-sm" id="edad">
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                         <label>Sexo</label>
                         <select class="form-control form-control-sm" id="sexo">
                           <option value="">SELECCIONE</option>
                           <?php foreach($sexo->getResult() as $sexos) { ?>
                           <option value="<?= $sexos->COD_SEXO; ?>"> <?= $sexos->NOM_SEXO; ?> </option>
                           <?php } ?>
                         </select>
                       </div>
                     </div>
                     <div class="col-md-3">
                       <div class="form-group">
                         <label>Direccion</label>
                         <input type="text" class="form-control form-control-sm" id="direccion">
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                         <label>Telefono</label>
                         <input type="number" class="form-control form-control-sm" id="telefono">
                       </div>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Nombre de la Persona Encargada</label>
                         <input type="text" class="form-control form-control-sm" id="encargado">
                       </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <label>Tipo de tramite</label>
                         <select class="form-control form-control-sm" id="tp_tramite">
                           <option value="">SELECCIONE</option>
                           <option value="">Referencia</option>
                           <option value="">Contrareferencia</option>
                         </select>
                       </div>
                     </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label>Causa que Genera la Atención</label>
                          <select class="form-control form-control-sm" id="causa_atencion">
                              <option value="">SELECCIONE</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2 mt-4">
                         <a type="button"  data-toggle="modal" class="mt-2" data-target="#diagnosticos">Diagnosticos <small class="text-danger">click</small></a>
                      </div>
                      <div class="col-md-2 mt-4">
                         <a type="button"  data-toggle="modal" class="mt-2" data-target="#procedimientos">Procedimientos <small class="text-info">click</small></a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Observaciones</label>
                          <textarea rows="2" class="form-control" id="observaciones"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Soportes</label>
                          <input type="file" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Soporte SAP</label>
                          <input type="file" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary">Guardar</button>
                    <br>
                    <br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- MODAL DIAGNOSTICOS-->
        <div
          class="modal fade"
          id="diagnosticos"
          data-backdrop="static"
          data-keyboard="false"
          tabindex="-1"
          aria-labelledby="diagnosticosLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="diagnosticosLabel">DIAGNOSTICOS DEL PACIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="table-responsive">
                    <table class="table table-hover" id="table_diagnosticos">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Diagnostico</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($diagnostico->getResult() as $diagnosticos){ ?>
                        <tr>
                          <td> <?= $diagnosticos->COD_DIAGNOSTICO; ?> </td>
                          <td> <?= $diagnosticos->NOM_DIAGNSOTICO; ?> </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
              </div>
            </div>
          </div>
       </div>
        <!-- MODAL PROCEDIMIENTOS-->
        <div
          class="modal fade"
          id="procedimientos"
          data-backdrop="static"
          data-keyboard="false"
          tabindex="-1"
          aria-labelledby="procedimientosLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="procedimientosLabel">PROCEDIMIENTOS DEL PACIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="table-responsive">
                    <table class="table table-hover" id="table_procedimientos">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Procedimientos</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php foreach($procedimiento->getResult() as $procedimientos){ ?>
                        <tr>
                          <td><?= $procedimientos->CODIGO; ?></td>
                          <td><?= $procedimientos->DESCRIPCION; ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
              </div>
            </div>
          </div>
       </div>
    <?php require_once("componentes/footer.php"); ?>
    <?php require_once("componentes/scripts.php"); ?>
    <script src="<?php echo base_url(); ?>/scripts/contrareferencia.js"></script>
</body>
</html>