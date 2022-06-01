<?php

namespace App\Controllers;
use App\Models\Generic;
use App\Controllers\BaseController;

class Contrareferencia extends BaseController {

    public function __construct() {
      $this->generic = new Generic();
    }

    public function index(){
     $tpdocumentos = $this->generic->getTiposDocumentos();
     $sexos = $this->generic->getTiposSexos();
     $diagnosticos = $this->generic->getDiagnosticos();
     $procedimientos = $this->generic->getProcedimientos();
     $data = [
       "tpdocumento" => $tpdocumentos,
       "sexo" => $sexos,
       "diagnostico" => $diagnosticos,
       "procedimiento" => $procedimientos
     ];
     echo view("gemaweb/referencia_remision", $data);
    }

    public function buscarPaciente() {
     
    }
}
