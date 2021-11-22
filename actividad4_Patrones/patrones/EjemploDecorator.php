<?php

namespace Notificaciones;

use Exception;

require_once 'models/Notificacion.class.php';
require_once 'models/DecoradorNotificacion.class.php';


class EjemploDecorator
{



    public function __construct()
    {

     
    }

    public function generar()
    {
        
        try {

          
            $notificacion = new Notificacion();

            echo 'alo';
            $decoradorNotificacion = new DecoradorNotificacion($notificacion);
  
            
            $r= $decoradorNotificacion->muestra();
            
        
           
            $respuesta = array('Estado' => "success",
                'Response' => $r);
            return $respuesta;
        } catch (Exception $e) {
            $respuesta = array('Estado' => "Error",
                'Response' => $e->getMessage());
            return $respuesta;
        }
    }

}

