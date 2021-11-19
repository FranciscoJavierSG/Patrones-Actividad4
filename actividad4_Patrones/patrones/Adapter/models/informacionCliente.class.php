<?php
namespace Adapter;



class informacionCliente
{
    /**
     * 
     * @var string
     */
    protected $estadoNotificacion;
    protected $duracion;
    protected $color;
    protected $prioridad;
    protected $titulo;
    protected $descripcion;

    /**
     *
     * @param string 
     * 
     * 
     * 
     * @param string $ip
     * @param string $sistema_operativo
     * @param string $fecha
     * @param string $hora      
     */
    protected $ip;
    protected $sistema_operativo;
    protected $fecha;
    protected $hora;
    public function clienteFijaContenido($estadoNotificacion,$duracion,$color,$prioridad, $titulo, $descripcion, $ip, $sistema_operativo, $fecha, $hora)
    {
        $this->estadoNotificacion = $estadoNotificacion;
        $this->duracion =$duracion;
        $this->color = $color;
        $this->prioridad =$prioridad;
        $this->titulo =$titulo;
        $this->descripcion =$descripcion;
        $this->ip =$ip;
        $this->sistema_operativo =$sistema_operativo;
        $this->fecha =$fecha;
        $this->hora =$hora;
    }

    public function mostrarCliente()
    {
        return array(
            'Datos cliente' => "CLIENTE",
            'IP de cliente' =>  $this->ip,
            'Sistema operativo' =>  $this->sistema_operativo,
            'Fecha' =>  $this->contenido,
            'Hora' => $this->hora,
            'Notificacion' => "Datos de notificacion",
            'Estado de notificacion' => $this->estadoNotificacion,
            'Duracion' => $this->duracion,
            'Color' => $this->color,
            'Prioridad'=> $this->prioridad,
            'Titulo' => $this->titulo,
            'Descripcion' => $this->descripcion
        
        );
        
    }

}

?>
