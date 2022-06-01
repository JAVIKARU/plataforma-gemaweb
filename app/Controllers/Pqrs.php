<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Generic;

class Pqrs extends BaseController {

    public function __construct(){
        $this->generic = new Generic();
    }

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

    public function BuscarPqrs() {
        $tpdocumentos = $this->generic->getTiposDocumentos();
        $data = [
            "tpdocumento" => $tpdocumentos
        ];

        echo view("prestadores/pqrs_buscar", $data);
    }
}
