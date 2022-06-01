<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pqrs extends BaseController {

    public function __construct(){

    }

    public function index() {
        echo view('prestadores/pqrs');
    }

    public function BuscarPqrs() {
        echo view("prestadores/pqrs_buscar");
    }
}
