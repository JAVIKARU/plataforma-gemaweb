<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Google_Client;
use Google_Service_Exception;
// require_once("./public/api-google/vendor/autoload.php");
class Googledrive extends BaseController {

    //FUNCION CONSTRUCTORA ENCARGADA DE CARGAR ANTES DE CARGAR TODOS LOS CONTROLLADORES
    public function __construct(){
        putenv('GOOGLE_APPLICATION_CREDENTIALS=./public/json/soportespqrs-b184d062e113.json');
        $this->client = new Google_Client();
    }
     //METODO ENCARGADO DE SUBIR AL GOOGLE DRIVE LOS SOPORTES
     public function subirArchivoDrive($archivo, $tipo, $nombre) {
      $this->client->useApplicationDefaultCredentials();
      $this->client->setScopes(['https://www.googleapis.com/auth/drive.file', 'https://www.googleapis.com/auth/drive.appdata']);
      try {
          $service = new \Google_Service_Drive($this->client);
          $file_path =  $archivo;
          $file = new \Google_Service_Drive_DriveFile();
          $file->setName($nombre);
          // $file->setParents(array("1xztn-H9PeuYaorKvEeJI9vaqY_z6uww_"));
          $file->setParents(array("18rX2wv0KZ-IE8Buf53CGuluM_zNOb2b5"));
          //$file->setDescription("archivo cargado");
          $file->setMimeType($tipo);
          $result = $service->files->create(
            $file,
            array(
              'data' => file_get_contents($file_path),
              'mimeType' => $tipo,
              'uploadType' =>  "media"
            )
          );
          return $result->id ;
        }
        catch(Google_Service_Exception $gs) {
          $mensaje = json_decode($gs->getMessage());
          echo $mensaje->error->message();
        }
        catch(Exception $e){
          echo $e->getMessage();
        }
  }

     //METODO ENCARGADO DE CREAR CARPETA EN EL DRIVE
     public function crearCarpetaDrive() {
       $service = new \Google_Service_Drive($this->client);
       $file = new \Google_Service_Drive_DriveFile();
       $this->client->useApplicationDefaultCredentials();
       $this->client->setScopes(['https://www.googleapis.com/auth/drive.file', 'https://www.googleapis.com/auth/drive.appdata']);
       $file->setName("nombre_folder");
       $file->setParents(array("1xztn-H9PeuYaorKvEeJI9vaqY_z6uww_"));
       $file->setMimeType('application/vnd.google-apps.folder');

       $folder = $service->files->create(
         $file
       );

       return $folder->id;
    }
}
