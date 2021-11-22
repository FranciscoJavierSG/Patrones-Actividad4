<?php
namespace Adapter;



class informacionCliente
{
    //protected $contenido;
    //public function clienteFijaContenido($contenido){
    //  $this->contenido = $contenido;
    //}
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

    
    public function clienteFijaContenido($estadoNotificacion,$duracion,$color,$prioridad, $titulo, $descripcion)
    {
        $this->estadoNotificacion = $estadoNotificacion;
        $this->duracion =$duracion;
        $this->color = $color;
        $this->prioridad =$prioridad;
        $this->titulo =$titulo;
        $this->descripcion =$descripcion;
    }

    public function mostrarCliente()
    {
        return array(
            'Datos cliente' => "CLIENTE",
            'IP de cliente' =>  "168.192.168.0.1",
            'Sistema operativo' =>  "Windows 10",
            'Fecha' =>  "21/11/2021",
            'Hora' => "18:00",
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
