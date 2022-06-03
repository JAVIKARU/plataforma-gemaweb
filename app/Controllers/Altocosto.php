<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Altocosto extends BaseController {

    public function __construct() {

    }

    public function index() {
      echo view("gemaweb/altocosto");
    }
}
