<?php
namespace Decorator;

require_once 'Notificacion.class.php';

abstract class Decorador implements Notificacion
{
    /**
     * 
     * @var Notificacion
     */
    public $componente;
    
    /**
     *
     * @param Notificacion $componente            
     */
    public function __construct(Notificacion $componente)
    {
        $this->componente = $componente;
    }

    public function muestra()
    {
        return $this->componente->muestra();
    }
}
?>
