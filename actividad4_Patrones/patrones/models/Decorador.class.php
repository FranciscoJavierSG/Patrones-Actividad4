<?php
/*
HAY QUE DESCOMENTARLO AL MOMENTO DE IMPLEMENTARLO
*/
namespace Notificaciones;

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

    public function mostrar()
    {
        return $this->componente->mostrar();
    }
}
?>
