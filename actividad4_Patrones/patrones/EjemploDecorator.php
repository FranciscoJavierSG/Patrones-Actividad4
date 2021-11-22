<?php

namespace Notificaciones;

use Exception;

require_once 'models/VistaNotificacion.class.php';
require_once 'models/Notificacion.class.php';
require_once 'models/DecoradorNotificacion.class.php';

class EjemploDecorator {

    public function __construct() {
    }

    public function generar() {

        try {

            $vistaNotificacion = new VistaNotificacion();

            $decoradorNotificacion = new DecoradorNotificacion($vistaNotificacion);

            $r = $decoradorNotificacion->mostrar();

            $respuesta = array(
                'Estado' => "success",
                'Response' => $r
            );
            return $respuesta;
        } catch (Exception $e) {
            $respuesta = array(
                'Estado' => "Error",
                'Response' => $e->getMessage()
            );
            return $respuesta;
        }
    }
}
