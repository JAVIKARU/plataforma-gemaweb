<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemaweb - Alto costo</title>
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
       <h2 class="p-3" id="tituloEnfermedad">Enfermedad de Alto Costo</h2>
      <div class="row">
       <div class="col-md-5">
           <div class="text-center mt-5">
             <img src="https://saludmadreymujer.com/archivos/img/logo.png" class="img-fluid" width="90px;">
           </div>
           <div class="form-group">
               <label>Enfermedad</label>
               <!-- <input type="text" class="form-control" value="Cancer" readonly /> -->
               <select Class="form-control" aria-label="Default select example" name="mallaEnfermdedad" id="mallaEnfermdedad" >
                <option selected>Seleccione...</option>
                 <option value="Artritis">Artritis</option>
                 <option value="Cancer">Cancer</option>
                 <option value="ERC">ERC</option>
                 <option value="Hemofilia">Hemofilia</option>
                 <option value="VIH">VIH</option>
               </select>
           </div>
           <div class="form-group">
               <label>Archivo</label>
               <input
                 type="file"
                 class="form-control"
                 id="archivo"
                 name="archivo"
                 accept=".txt"
                />
           </div>
           <div class="form-group">
              <button 
                class="btn btn-default btn-md"
                id="btn-Estructura"
                >Estructura
              </button>
               <button class="btn btn-outline-danger btn-md" disabled>Validar</button>
           </div>
       </div>
       <div class="col-md-6 offset-md-1">
           <div class="text-center">
               <img src="https://saludmadreymujer.com/archivos/img/cancer.png" class="mt-3 p-3 img-fluid">
           </div>
       </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-12">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a
              class="nav-link active"
              id="nav-home-tab"
              data-toggle="tab"
              href="#nav-home"
              role="tab"
              aria-controls="nav-home"
              aria-selected="true"
            >
              Contenido del Archivo
            </a>
            <a
              class="nav-link"
              id="nav-profile-tab"
              data-toggle="tab"
              href="#nav-profile"
              role="tab"
              aria-controls="nav-profile"
              aria-selected="false"
            >
              Errores de Estructura
            </a>
            <a
              class="nav-link"
              id="nav-contact-tab"
              data-toggle="tab"
              href="#nav-contact"
              role="tab"
              aria-controls="nav-contact"
              aria-selected="false"
            >
              Anexos
            </a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="nav-home" role="tabpanel"
            aria-labelledby="nav-home-tab"
          >
            <br>
           <pre id="contenido-archivo" class="scroll-contenido"></pre>
          </div>
          <div
            class="tab-pane fade"
            id="nav-profile"
            role="tabpanel"
            aria-labelledby="nav-profile-tab"
          >
            <br>
            ... ERRORES DE ESTRUCTURA
          </div>
          <div
            class="tab-pane fade"
            id="nav-contact"
            role="tabpanel"
            aria-labelledby="nav-contact-tab"
          >
            <br>
            <ol>
              <li id="resulucionText"> Resolucion 
                
              </li>
              <li id="instructivoText"> Instructivo 
               
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div> 
              </div>
            </div>
          </div>
        </div>
    <?php require_once("componentes/footer.php"); ?>
    <?php require_once("componentes/scripts.php"); ?>
    <script src="<?php echo base_url(); ?>/scripts/altoCosto.js"></script>
</body>
</html>