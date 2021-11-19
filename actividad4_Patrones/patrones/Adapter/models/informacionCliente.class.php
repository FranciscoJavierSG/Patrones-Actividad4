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
            'IP de cliente' =>  "PDF",
            'Sistema operativo' =>  "Inicio",
            'Fecha' =>  $this->contenido,
            'Hora'
        
        );
        
    }

    public function pdfRefresca()
    {
      
                return array(
                    'Muestra contenido documento' =>  "PDF",
                    'Estado' =>  "Muestra",
                    'contenido' =>  $this->contenido,
                
                );
    }

    public function pdfTerminaMuestra()
    {
      
        return array(
            'Muestra contenido documento' =>  "PDF",
            'contenido' =>  $this->contenido,
        
        );
    }

    public function pdfEnviaImpresora()
    {
    
        return array(
            'impresion contenido documento' =>  "PDF",
            'contenido' =>  $this->contenido,
        
        );
    }
}

?>
