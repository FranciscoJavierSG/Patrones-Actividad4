<?php
namespace Adapter;

require_once 'notificacion.class.php';
require_once 'informacionCliente.class.php';

class aplicacionFuera implements Notificacion
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
    public function llamarNotificacion($estadoNotificacion, $duracion,$color, $prioridad, $titulo, $descripcion,$ip,$sistema_operativo,$fecha,$hora)
    {
        $this->infoCliente->clienteFijaContenido($estadoNotificacion, $duracion,$color, $prioridad, $titulo, $descripcion,$ip,$sistema_operativo,$fecha,$hora);
    }

    public function mostrar(){
        $this->infoCliente->mostrarCliente();
    }

}

?>
