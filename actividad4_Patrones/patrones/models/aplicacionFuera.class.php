<?php
namespace Notificaciones;

require_once 'Notificacion.class.php';
require_once 'informacionCliente.class.php';

require_once 'TipoPrioridad.php';
require_once 'EstadoNotificacion.php';

class aplicacionFuera extends Notificacion
{
    /**
     * 
     * @var informacionCliente
     */
    protected $infoCliente;
    
    public function __construct()
    {
        $this->infoCliente = new informacionCliente();
    }
//Toy trabajandole bien a esto aun 
    /**
     *
     * @param string $contenido            
     */
    //definir contenido
    public function llamarNotificacion($estadoNotificacion, $duracion,$color, $prioridad, $titulo, $descripcion)
    {
        $this->infoCliente->clienteFijaContenido($estadoNotificacion, $duracion, $color, $prioridad, $titulo, $descripcion);
    }

    public function mostrar(){
        return $this->infoCliente->mostrarCliente();
    }

}
