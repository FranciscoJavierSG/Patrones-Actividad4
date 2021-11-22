<?php

namespace Notificaciones;

require_once 'Notificacion.class.php';

class VistaNotificacion extends Notificacion {

    public function mostrar() {
        return 'Muestra la notificación';
    }
}
