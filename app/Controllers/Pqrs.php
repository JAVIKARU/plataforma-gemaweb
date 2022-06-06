<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Generic;
use App\Models\Pqrsf;
use App\Controllers\Googledrive;
use App\Controllers\Email;
class Pqrs extends BaseController {

    public function __construct(){
      //CARGAR LOS MODELOS A LA CLASE PRINCIPAL PARA REUTILIZAR EL CODIGO
      $this->generic = new Generic();
      $this->pqrsf = new Pqrsf;
      //CARGAR LOS CONTROLADORES A LA CLASE PRINCIPAL PARA HACER USO DE ELLO
      $this->googledrive = new Googledrive();
      //CARGAR EL CONTROLADOR PARA EL ENVIO DE CORREO ELECTRONICO
      $this->email = new Email();
    }

    //METODO ENCARGADO DE MOSTRAR LA VISTA PRINCIPAL DE PQRS
    public function index() {
      $tpdocumentos = $this->generic->getTiposDocumentos();
      $poblaciones = $this->generic->grupoPoblacion();
      $etnicos = $this->generic->grupoEtnico();
      $departamentos = $this->generic->departamentos();
      $ciudades = $this->generic->ciudades();
      $zonas = $this->generic->zonas();
      $areas = $this->generic->areas();
      $prestadores = $this->generic->prestadores();
      $data = [
        "tpdocumento" => $tpdocumentos,
        "poblacion" => $poblaciones,
        "etnico" => $etnicos,
        "departamento" => $departamentos,
        "ciudad" => $ciudades,
        "zona" => $zonas,
        "area" => $areas,
        "prestador" => $prestadores
      ];

       echo view('prestadores/pqrs', $data);
    }

    //METODO ENCARGADO DE MOSTRAR LAS VISTAS DE BUSQUEDA PQRS
    public function viewBuscarPqrs() {
      $tpdocumentos = $this->generic->getTiposDocumentos();
      $data = [
        "tpdocumento" => $tpdocumentos
      ];

      echo view("prestadores/pqrs_buscar", $data);
    }

    //METODO ENCARGADO DE BUSCAR EL AFILIADO
    public function buscarAfiliado() {
      $tpdocumento = $this->request->getPost("tpdocumento");
      $documento = $this->request->getPost("documento");
      $afiliado = $this->pqrsf->buscarAfiliado($tpdocumento, $documento);

      echo json_encode(["afiliado" =>$afiliado]);
    }
    //METODO ENCARGADO DE CREAR LA PQRS
    public function crearPqrs() {
      $archivo = "NO ADJUNTADO";
      $consecutivo  = $this->generic->ultimoConsecutivo()[0]->CONSECUTIVO + 1;
      $pqrs = $this->request->getPost("pqrs");
      $paciente_rad = $this->request->getPost("paciente_rad");
      $tpdocumento = $this->request->getPost("tpdocumento");
      $documento = $this->request->getPost("documento");
      $expedicion = $this->request->getPost("expedicion");
      $pnombre = $this->request->getPost("pnombre");
      $snombre = $this->request->getPost("snombre");
      $papellido = $this->request->getPost("papellido");
      $sapellido = $this->request->getPost("sapellido");
      $nacimiento = $this->request->getPost("nacimiento");
      $edad = $this->request->getPost("edad");
      $sexo = $this->request->getPost("sexo");
      $poblacion = $this->request->getPost("poblacion");
      $etnico = $this->request->getPost("etnico");
      $resguardo = $this->request->getPost("resguardo");
      $comunidad = $this->request->getPost("comunidad");
      $pais = $this->request->getPost("pais");
      $departamento = $this->request->getPost("departamento");
      $municipio = $this->request->getPost("municipio");
      $zona = $this->request->getPost("zona");
      $direccion = $this->request->getPost("direccion");
      $celular = $this->request->getPost("celular");
      $telefono = $this->request->getPost("telefono");
      $correo = $this->request->getPost("correo");
      $area = $this->request->getPost("area");
      $ips = $this->request->getPost("ips");
      $descripcion = $this->request->getPost("descripcion");
      $datos = [
        "consecutivo" =>$consecutivo,
        "pqrs" => $pqrs,
        "paciente_rad" => $paciente_rad,
        "tpdocumento" => $tpdocumento,
        "documento" => $documento,
        "expedicion" => $expedicion,
        "pnombre" => $pnombre,
        "snombre" => $snombre,
        "papellido" => $papellido,
        "sapellido" => $sapellido,
        "nacimiento" => $nacimiento,
        "edad" => $edad,
        "sexo" => $sexo,
        "poblacion" => $poblacion,
        "etnico" => $etnico,
        "resguardo" => $resguardo,
        "comunidad" => $comunidad,
        "pais" => $pais,
        "departamento" => $departamento,
        "municipio" => $municipio,
        "zona" => $zona,
        "direccion" => $direccion,
        "celular" => $celular,
        "telefono" => $telefono,
        "correo" => $correo,
        "area" => $area,
        "ips" => $ips,
        "descripcion" => $descripcion,
        "archivo" => $archivo
      ];
      $this->pqrsf->crearPqrs($datos);
      $this->generic->actualizarConsecutivo("QUE", $consecutivo);
      $this->pqrsf->crearNovedades($datos);

      //DATOS PARA EL ENVIO DE CORREO ELECTRONICO
      $asunto = "Radicacion de PQRS Pagina Web";
      $correointerno = "siau.tolima@pijaossalud.com.co";
      //$correointerno = "jerson.galvez@pijaossalud.com.co";
      $mensaje = '<div class="container-border" style=" border: 2px solid #2332CE;width: 700px !important;margin-left: 400px;padding: 10px;border-radius: 20px;z-index: 10;">
       <div class="container-fluid color-blue" style="border-radius: 10px;background-color: #2332CE !important;"><br><br><br><br></div><br><br>
       <div class="container center" style="margin-left: 40px;">
       <img src="https://saludmadreymujer.com/archivos/img/logo.png" width="90px" height="90px" style="margin-left: 250px ;">
       <br>
       <br>
       <p>¿Cómo vas?</p>
       <p>Te contamos que recibimos una solicitud de PQRSF '.$pqrs.'</p>
       <p>Expuesta para la EPSI o/y IPS con los siguientes datos.</p>
       </div>
       <div class="container" style="margin-left: 40px;">
       <h4>PQRS EXPUESTA POR EL USUARIO<span> '.$pnombre.' '.$snombre.' '.$papellido . ' '.$sapellido.'</span> </h4>
       <h5>NUMERO DE RADICADO: '.$consecutivo.'</h5>
       <h5>TIPO DE DOCUMENTO: '.$tpdocumento.'</h5>
       <h5>NUMERO DE DOCUMENTO: '.$documento.'</h5>
       <h5>NUMERO TELEFONICO: '.$telefono.' '.$celular.'</h5>
       <h5>CORREO ELECTRONICO: '.$correo.' </h5>
       </div>
       <div class="container" style=" padding-left: 40px;" width="200px;" >
       <h3>MENSAJE</h3>
       <P> '.$descripcion.'</P>
       </div>
       <div class="container">
       <img src="https://saludmadreymujer.com/archivos/img/pqrs.png" width="400px;">
       </div>
       <div class="container-fluid color-blue" style="border-radius: 10px;">
       <br><br><br><br>
       </div>
       </div>
      ';
      $this->email->enviarEmail($correo, $correointerno, $asunto, $mensaje);

      echo json_encode([
        "consecutivo" => $consecutivo,
        "archivo" => $archivo
      ]);
    }
    //METODO ENCARGADO DE LA BUSQUEDA DA LA PQRSF
    public function buscarPrsf() {
      $tpdocumento = $this->request->getPost("tpdocumento");
      $documento = $this->request->getPost("documento");
      $radicado = $this->request->getPost("radicado");
      $pqrs = $this->pqrsf->buscarPrsf($tpdocumento, $documento, $radicado)->getResult();
      if(count($pqrs) > 0){
        echo json_encode([
         'pqrs' => $pqrs
        ]);
      }
      else {
        echo "error";
      }
    }
}
