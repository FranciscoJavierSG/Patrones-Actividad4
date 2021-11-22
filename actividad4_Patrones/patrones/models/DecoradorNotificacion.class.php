<?php

namespace Notificaciones;

require_once 'Decorador.class.php';
require_once 'Notificacion.class.php';

class DecoradorNotificacion extends Decorador {

    /**
     *
     * @param Notificacion $componente            
     */

    public function __construct(Notificacion $componente) {
        parent::__construct($componente);
    }

    public function muestraLogo() {
        return 'Logo de la marca';
    }

    public function mostrar() {
        return  array(
            'Muestra' =>  parent::mostrar(),
            'MuestraLogo' => $this->muestraLogo()
        );
    }
}
