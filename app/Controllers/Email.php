<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Email extends BaseController {

    public function __construct() {
      $this->email = \Config\Services::email();
    }

    public function enviarEmail(){
        $config['protocol'] = 'smtp';
        $config['SMTPHost'] = 'smtp.gmail.com';
        $config['SMTPUser'] = 'glotechtion@gmail.com';
        $config['SMTPPass'] = 'glotechtion2021';
        $config['SMTPPort'] = 465;
        $config['SMTPCrypto'] = 'tls';
        $config['mailType'] = 'html';
        $config['wordWrap'] = true;
        $config['charset']  = 'utf-8';

        $this->email->initialize($config);
        $this->email->setFrom('glotechtion@gmail.com', 'Sistemas');
        $this->email->setTo('jerson.galvez@pijaossalud.com.co');
        $this->email->setSubject('jerson.galvez@pijaossalud.com.co');
        $this->email->setMessage('Testing the email class.');

        $this->email->send();
    }
}
