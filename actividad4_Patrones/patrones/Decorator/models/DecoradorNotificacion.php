<?php
namespace Decorator;


require_once 'Decorador.class.php';
require_once 'Notificacion.class.php';

class ModeloDecorador extends Decorador
{

    /**
     *
     * @param Notificacion $componente            
     */
    public function __construct(Notificacion $componente)
    {
        parent::__construct($componente);
    }

    public function muestraLogo()
    {
        return 'Logo de la marca';
    }

    public function muestra()
    {
    
        return  array('Muestra' =>  parent::muestra(),
        'MuestraLogo' => $this->muestraLogo());
    }
}

?>

