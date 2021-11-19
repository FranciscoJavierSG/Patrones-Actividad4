<?php
namespace Decorator;

require_once 'Notificacion.class.php';

abstract class Decorador implements Notificacion
{
    /**
     * 
     * @var Decorador
     */
    public $componente;
    
    /**
     *
     * @param Decorador $componente            
     */
    public function __construct(Decorador $componente)
    {
        $this->componente = $componente;
    }

    public function muestra()
    {
        return $this->componente->muestra();
    }
}
?>
