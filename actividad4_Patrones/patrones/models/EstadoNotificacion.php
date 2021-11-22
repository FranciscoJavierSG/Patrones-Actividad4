<?php

namespace Notificaciones;

class EstadoNotificacion {

    public static function setEstadoNotificacion($estado) {
        if ($estado <= 1) {
            return 'Inactiva';
        }
        if ($estado >= 2) {
            return 'Activa';
        }
    }
}
