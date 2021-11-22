<?php

namespace Notificaciones;

class TipoPrioridad {

    public static function setTipoPrioridad($prioridad) {
        if ($prioridad <= 1) {
            return 'Baja';
        }
        if ($prioridad == 2) {
            return 'Media';
        }
        if ($prioridad >= 3) {
            return 'Alta';
        }
    }
}
