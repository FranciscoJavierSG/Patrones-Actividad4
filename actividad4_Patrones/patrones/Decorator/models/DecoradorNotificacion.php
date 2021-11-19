<?php
namespace Decorator;


require_once 'Decorador.class.php';
require_once 'Notificacion.class.php';

class ModeloDecorador extends Decorador
{

    /**
     *
     * @param Decorador $componente            
     */
    public function __construct(Decorador $componente)
    {
        parent::__construct($componente);
    }

    public function muestraInfosTecnicas()
    {
       return 'Informaci�n tecnica del modelo';
    }

    public function muestra()
    {
    
        return  array('MuestraDecorador' =>  parent::muestra(),
        'MuestraInfosTecnicas' => $this->muestraInfosTecnicas());
    }
}

?>
