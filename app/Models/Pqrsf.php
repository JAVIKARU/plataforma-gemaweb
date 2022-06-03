<?php

namespace App\Models;

use CodeIgniter\Model;

class Pqrsf extends Model {

    //METODO ENCARGADO DE BUSCAR LOS AFILIADOS
    public function buscarAfiliado($tpdocumento, $documento) {
      $db= \Config\Database::connect();
      $builder = $db->table("AFILIADOSSUB a");
      $builder->select("a.PRI_APELLIDO, a.SEG_APELLIDO, a.PRI_NOMBRE, a.NOM_NOMBRE, a.FEC_NACIMIENTO, SEXO, c.COD_CIUDAD, d.COD_DEPARTAMENTO");
      $builder->join("DEPARTAMENTOS d","a.NUM_DEPARTAMENTO = d.COD_DEPARTAMENTO");
      $builder->join("CIUDADES c", "a.NUM_CIUDAD = c.COD_CIUDAD");
      $builder->where("a.TIP_DOCUMENTO_BEN", $tpdocumento);
      $builder->where("a.NUM_DOCUMENTO_BEN", $documento);
      $builder->where("a.EST_AFILIADO", 1);
      $builder->limit(1);
      $query = $builder->get();

      return $query->getResult();
    }

    //METODO ENCARGADO DE CREAR LA PQRS
    public function crearPqrs($data) {
      $db= \Config\Database::connect();
      $builder = $db->table('QUEJAS');
      $datos = [
        "COD_AREA_REF" => $data["pqrs"],
        "CONSECUTIVO" => $data["consecutivo"],
        "TP_DOC_AFI" => $data["tpdocumento"],
        "NM_DOC_AFI" => $data["documento"],
        "DETALLE" => $data["descripcion"],
        "PRI_NOMBRE" => $data["pnombre"],
        "SEG_NOMBRE" => $data["snombre"],
        "PRI_APELLIDO" => $data["papellido"],
        "SEG_APELLIDO"=> $data["sapellido"],
        "COD_CIUDAD" => $data["municipio"],
        "COD_DEPTO" => $data["departamento"],
        "TELEFONO" => $data["telefono"],
        "DIRECCION" => $data["direccion"],
        "URL_DOCUMENTOS" => $data["archivo"],
        "COD_POBLACIONESPECIAL" => $data["poblacion"],
        "COD_GRUPOETNICO" => $data["etnico"],
        "CELULAR1" => $data["celular"],
        "CORREOEMAIL" => $data["correo"],
        "COD_IPS_QUEJA" => $data["ips"],
        //"COD_AREA_QUEJA" => $data["area"],
        //"COD_QUEJA_DE" => $data["cod_area"],
        "FEC_RAD_QUEJA" => date("Y-d-m"),
        "FECHA_REGISTRO" => date("Y-d-m"),
        "COD_ESTADO" => "05",
        "COD_CLA" => "01",
        "NUM_FORMULARIO" => $data["consecutivo"],
        "COD_PACIENTE_RAD" => $data["paciente_rad"],
        "FECHA_NACIMIENTO" => $data["nacimiento"],
        "EDAD" => $data["edad"],
        "SEXO" => $data["sexo"],
      ];
      $builder->insert($datos);
    }

    //METODO ENCARGADO DE CREAR LAS NOVEDADES DE LOS DATOS ACTUALIZADOS
    // DEL USUARIO
    public function crearNovedades($data) {
      $db= \Config\Database::connect();
      $builder = $db->table('NOVEDADES_PQRS');
      $datos = [
        "TP_DOCUMENTO" => $data["tpdocumento"],
        "DOCUMENTO" => $data["documento"],
        "FEC_EXPEDICION" => date("Y-m-d", strtotime($data["expedicion"])),
        "PRI_NOMBRE" => $data["pnombre"],
        "SEG_NOMBRE" => $data["snombre"],
        "PRI_APELLIDO" => $data["papellido"],
        "SEG_APELLIDO"=> $data["sapellido"],
        "FECHA_NACIMIENTO"=> date("Y-m-d", strtotime($data["nacimiento"])),
        "EDAD"=> $data["edad"],
        "SEXO"=> $data["sexo"],
        "POBLACION_ESPECIAL" => $data["poblacion"],
        "GRUPO_ETNICO" => $data["etnico"],
        "RESGUARDO" => $data["resguardo"],
        "COMUNIDAD" => $data["comunidad"],
        "PAIS" => $data["pais"],
        "DEPARTAMENTO" => $data["departamento"],
        "MUNICIPIO" => $data["municipio"],
        "ZONA" => $data["zona"],
        "DIRECCION" => $data["direccion"],
        "CELULAR" => $data["celular"],
        "TELEFONO" => $data["telefono"],
        "CORREO" => $data["correo"],
        "ESTADO" => "1"
      ];
      $builder->insert($datos);
    }
}
