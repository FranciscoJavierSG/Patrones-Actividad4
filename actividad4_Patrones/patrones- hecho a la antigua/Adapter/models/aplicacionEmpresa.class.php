<?php
namespace Adapter;

require_once 'Notificacion.class.php';

class aplicacionEmpresa implements Notificacion
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
     * @param string $estadoNotificacion
     * @param string $duracion
     * @param string $color
     * @param string $prioridad
     * @param string $titulo
     * @param string $descripcion            
     */
    public function llamarNotificacion($estadoNotificacion, $duracion, $color, $prioridad, $titulo, $descripcion)
    {
        $this->estadoNotificacion = $estadoNotificacion;
        $this->duracion = $duracion;
        $this->contenido = $contenido;
        $this->color = $color;
        $this->prioridad = $prioridad;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
    }

    public function mostrar(){
        return array('Estado notificacion' => $this->estadoNotificacion,
                    'Duracion' => $this->duracion,
                    'Contenido' => $this->color,
                    'Prioridad' => $this->prioridad,
                    'Titulo' =>$this->titulo,
                    'Descripcion' => $this->descripcion
                );
    }
}

?>
