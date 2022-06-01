<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemaweb - Inicio</title>
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
                    <div class="row">
                        <h3 class="mt-4 mb-3">Usuarios</h3>
                        <div class="table-responsive">
                          <table class="table table-stripped table-table-hover">
                            <thead>
                              <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1110542802</td>
                                <td>JERSON REINEL GALVEZ ENSUNCHO</td>
                                <td>AUXILIAR DE DESARROLLO</td>
                                <td>JGALVEZ</td>
                                <td>ACTIVO</td>
                                <td>
                                  <li class="nav-item dropdown active">
                                    <a
                                      class="nav-link pr-0"
                                      href="#"
                                      role="button"
                                      data-toggle="dropdown"
                                      aria-haspopup="true"
                                      aria-expanded="false"
                                    >
                                    <div class="media align-items-center">
                                      <div class="media-body  d-none d-lg-block">
                                        <i  class=" text-danger fas fa-ellipsis-v mx-2 fa-1x"></i>
                                      </div>
                                    </div>
                                    </a>
                                      <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                        <a class="nav-link" href="#">
                                          Dar Acceso
                                        </a>
                                        <a class="nav-link" href="#">
                                          Editar
                                        </a>
                                      </div>
                                  </li>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <br>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- MODAL  DIAGNOSTICOS-->
        <!-- Button trigger modal -->

    <?php require_once("componentes/footer.php"); ?>
    <?php require_once("componentes/scripts.php"); ?>
</body>
</html>