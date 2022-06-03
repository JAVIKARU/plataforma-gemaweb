<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Altocosto extends BaseController {

    public function __construct() {

    }

    public function index() {
      echo view("gemaweb/altocosto");
    }

    public function leerArchivo()
    {
      $console = 'Hola';
      echo "<script>console.log('Console: " . $console . "' );</script>";
    }

    public function ValidarEstructura()
    {
      $console = 'Hola';
      echo "<script>console.log('Console: " . $console . "' );</script>";
    }    
    
}
