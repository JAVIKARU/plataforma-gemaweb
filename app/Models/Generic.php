<?php

namespace App\Models;

use CodeIgniter\Model;

class Generic extends Model {

    //CONSULTA ENCARGADA DE RETORNAR LOS TIPOS DE DOCUMENTOS
    public function getTiposDocumentos() {
        $db = \Config\Database::connect();
        $tpdocumentos = $db->query("SELECT * FROM TIPOS_DOCUMENTOS WHERE EST_DOCUMENTO = 0");

        return  $tpdocumentos;
    }
    //CONSULTA ENCARGADA DE RETORNAR EL GRUO DE POBLACION
    public function grupoPoblacion() {
      $db = \Config\Database::connect();
      $grupoPoblacion = $db->query("SELECT * FROM POBLACIONESPECIAL_PQRSF ORDER BY NOMPOBLACION ASC");

      return $grupoPoblacion;
    }
    //CONSULTA ENCARGADA DE RETORNAR LOS GRUPOS ETNICOS
    public function grupoEtnico() {
      $db = \Config\Database::connect();
      $grupoEtnico = $db->query("SELECT * FROM GRUPOETNICO_PQRSF ORDER BY NOMBRE ASC");

      return $grupoEtnico;
    }
    //CONSULTA ENCARGADA DE RETORNAR TODOS LOS DEPARTAMENTOS
    public function departamentos() {
      $db = \Config\Database::connect();
      $departamentos = $db->query("SELECT * FROM DEPARTAMENTOS ORDER BY NOM_DEPARTAMENTO ASC");

      return $departamentos;
    }
    //CONSULTA ENCARGADA DE RETORNAR TODAS LAS CIUDADES
    public function ciudades() {
      $db = \Config\Database::connect();
      $ciudades = $db->query("SELECT * FROM CIUDADES ORDER BY NOM_CIUDAD ASC");

      return $ciudades;
    }
     //CONSULTA ENCARGADA DE RETORNAR LAS AREAS DE LA EMPRESA
      public function areas() {
      $db = \Config\Database::connect();
      $areas = $db->query("SELECT * FROM AREAS_EMPRESA WHERE EST_AREA = 'A'");

      return $areas;
    }
    //CONSULTA ENCARGADA DE RETORNAR TODOS LOS PRESTADORES IPS
    public function prestadores() {
      $db = \Config\Database::connect();
      $prestadores = $db->query("SELECT * FROM PRESTADORES ORDER BY NOM_PRESTADOR ASC");

      return $prestadores;
    }

    // CONSULTA ENCARGADA DE RETORNAR TODOS LAS ZONAS
    public function zonas() {
      $db = \Config\Database::connect();
      $zonas = $db->query("SELECT * FROM ZONAS");

      return  $zonas;
    }
    //CONSULTA ENCARGADA DE RETORNAR TODOS LOS TIPOS DE SEXO
    public function getTiposSexos() {
        $db = \Config\Database::connect();
        $sexos = $db->query("SELECT * FROM SEXOS");

        return  $sexos;
    }
    //CONSULTA ENCARGADA DE RETORNAR TODOS LOS DIAGNOSTICOS
    public function getDiagnosticos() {
      $db = \Config\Database::connect();
      $diagnosticos = $db->query("SELECT * FROM DIAGNOSTICOS WHERE EST_DIAGNOSTICO = 0");

      return  $diagnosticos;
    }
    //CONSULTA ENCARGADA DE RETORNAR TODOS LOS PROCEDIMIENTOS
    public function getProcedimientos() {
        $db = \Config\Database::connect();
        $procedimientos = $db->query("SELECT * FROM PROCEDIMIENTOS");

        return  $procedimientos;
      }
}
