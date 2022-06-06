<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Email extends BaseController {

    public function __construct() {
      $this->email = \Config\Services::email();
    }

    public function enviarEmail($correousuario, $correointerno, $asunto, $mensaje){

        $config['protocol'] = 'smtp';
        $config['SMTPHost'] = 'smtp.gmail.com';
        $config['SMTPUser'] = 'glotechtion@gmail.com';
        $config['SMTPPass'] = 'glotechtion2021';
        $config['SMTPPort'] = 465;
        $config['SMTPCrypto'] = 'ssl';
        $config['mailType'] = 'html';
        $config['wordWrap'] = true;
        $config['charset']  = 'utf-8';

        $this->email->initialize($config);
        $this->email->setFrom('glotechtion@gmail.com', 'Radicacion de PQRSF');
        $this->email->setTo(''.$correousuario.', '.$correointerno.'');
        $this->email->setSubject($asunto);
        $this->email->setMessage($mensaje);

        $this->email->send();
    }
}
