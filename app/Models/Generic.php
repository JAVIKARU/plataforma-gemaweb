<?php

namespace App\Models;

use CodeIgniter\Model;

class Generic extends Model {

    public function getTiposDocumentos() {
        $db = \Config\Database::connect();
        $datos = $db->query("SELECT * FROM TIPOS_DOCUMENTOS WHERE EST_DOCUMENTO = 0");

        return  $datos;
    }

    public function getTiposSexos() {
        $db = \Config\Database::connect();
        $datos = $db->query("SELECT * FROM SEXOS");

        return  $datos;
    }

    public function getDiagnosticos() {
      $db = \Config\Database::connect();
      $datos = $db->query("SELECT * FROM DIAGNOSTICOS WHERE EST_DIAGNOSTICO = 0");

      return  $datos;
    }

    public function getProcedimientos() {
        $db = \Config\Database::connect();
        $datos = $db->query("SELECT * FROM PROCEDIMIENTOS");

        return  $datos;
      }
}
