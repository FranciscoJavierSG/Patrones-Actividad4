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
    protected $estadoNotificacion;
    protected $duracion;
    protected $color;
    protected $prioridad;
    protected $titulo;
    protected $descripcion;

    protected $ip;
    protected $sistema_operativo;
    protected $fecha;
    protected $hora;
    //habra que pasarle estas variables  en vola..
    //Si no contenido podria ser un array que tenga todo esto.
    //$estadoNotificacion,$duracion,$color,$prioridad, $titulo, $descripcion, $ip, $sistema_operativo, $fecha, $hora
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
    public function setContenido($contenido)
    {
        $this->infoCliente->clienteFijaContenido($contenido);
    }

    public function mostrarCliente($contenido){
        $this->infoCliente->mostrarCliente($contenido);
    }

}

?>
