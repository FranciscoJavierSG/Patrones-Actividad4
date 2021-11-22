<?php

namespace Notificaciones;

require_once 'Notificacion.class.php';

class VistaNotificacion implements Notificacion {

    public function mostrar() {
        return 'Muestra de la notificación';
    }
}
