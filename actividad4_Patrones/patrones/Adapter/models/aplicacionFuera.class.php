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
    public function setContenido($contenido)
    {
        $this->infoCliente->clienteFijaContenido($contenido);
    }

    public function mostrarCliente(){}

}

?>
