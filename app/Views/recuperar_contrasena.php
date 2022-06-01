<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemaweb / Recuperar Contraseña</title>
    <link rel="stylesheet" href="<?=  base_url(); ?>/css/argon-dashboard.min.css">
    <style>
        .img-fondo {
            background-image: url('./img/fondo.png');
        }
    </style>
</head>
<body>
  <div class="container img-fondo">
    <div class="row mt-5">
      <div class="col-md-3">
        </div>
        <div class="col-md-7">
          <div class="text-center">
            <img src="https://saludmadreymujer.com/archivos/img/logo.png" width="80px;" class="img-fluid">
            </div>
          <h1 class="mt-5 text-center display-5 text-capitalize">CAMBIO DE CONTRASEÑA</h1>
            <div class="card mt-5">
              <div class="card-body">
                  <h5 class="card-title text-uppercase text-center">Solicitud de Recuperacion de Contraseña</h5>
               <div id="correo">
                 <div class="form-group">
                   <label>Correo Electronico</label>
                   <input type="text" class="form-control">
                 </div>
               </div>
                <p>
                  En la bandeja de entrada llegara un codigo de verificacion  el cual el cual deberas
                  poner a continuacion.
                </p>
                <div class="form-group">
                  <button class="btn btn-primary btn-sm"> <i class="fas fa-home"></i> Enviar codigo</button>
                </div>
                <div class="form-group">
                  <label>Codigo de Verificación</label>
                  <input type="number" class="form-control" >
                </div>
                <div class="contrasenas" >
                  <div class="form-group">
                    <label>Nueva Contraseña</label>
                    <input type="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Repite la Contraseña</label>
                    <input type="password" class="form-control">
                  </div>
                  <button class="btn btn-primary btn-sm ">Cambiar contraseña</button>
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>