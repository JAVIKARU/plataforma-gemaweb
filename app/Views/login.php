<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gemaweb / Login</title>
	<link rel="stylesheet" href="<?=  base_url(); ?>/css/argon-dashboard.min.css">
</head>
</head>
<body class="bg-default">
<div class="main-content">
    <div class="header bg-gradient-success py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-4">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <img src="https://saludmadreymujer.com/archivos/img/logo.png" class="img-fluid" width="80px;">
              <h1 class="text-white mt-2">GEMAWEB EPSI</h1>
              <p class="text-lead text-white text-capitalize">plataforma gemaweb Pijaos salud EPSI</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="container mt--7">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-4">
              <div class="text-muted text-center mt-2 mb-3 text-uppercase">
                <h4> Iniciar sesión</h4>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4 font-weight-bold">
                <small>Inicia sesión con tus credenciales de usuario</small>
              </div>
              <form role="form">
                <div class="form-group mb-2">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Usuario" type="email" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password" />
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Recordar</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-default my-4">Ingresar</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-6">
              <a  href="<?= base_url(); ?>/recuperarcontrasena" class="light">
                <small>Olvido su contraseña?</small>
              </a>
            </div>
            <div class="col-6 text-right">
              <a
                href="mailto:jerson.galvez@pijaossalud.com.co?Subject=Solicitar Usuario Para la Plataforma Gemaweb."
                target="_blank"
                class="text-light"
              >
                <small>
                  Solicitar usuario
                </small>
              </a>
            </div>
            <br><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="<?= base_url();?>/js/argon-dashboard.min.js"></script>
</body>
</html>