<?php

namespace Notificaciones;

interface Notificacion {
    //esto es una forma
    //function llamarNotificacion($contenido);
    /**
     *
     * @param string $estadoNotificacion
     * @param string $duracion
     * @param string $color
     * @param string $prioridad
     * @param string $titulo
     * @param string $descripcion           
     */
    
    //function llamarNotificacion($estadoNotificacion, $duracion, $color, $prioridad, $titulo, $descripcion);

    function mostrar();
}
