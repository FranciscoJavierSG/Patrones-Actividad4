<?php

namespace Notificaciones;

require_once 'Notificacion.class.php';

abstract class Decorador extends Notificacion {
    /**
     * 
     * @var Notificacion
     */

    public $componente;

    /**
     *
     * @param Notificacion $componente            
     */


    public function __construct(Notificacion $componente) {
        $this->componente = $componente;
    }

    public function mostrar() {
        return $this->componente->mostrar();
    }
}
