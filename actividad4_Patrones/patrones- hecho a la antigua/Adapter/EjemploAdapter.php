<?php

namespace Adapter;

use Exception;
//Hay que manosear esto aun

require_once 'models/aplicacionFuera.class.php';
require_once 'models/aplicacionEmpresa.class.php';

class EjemploAdapter
{
    public $opcion;
    public $estadoNotificacion;
    public $duracion;
    public $prioridad;
    public $titulo;
    public $descripcion;
   
    


    public function __construct($opcion,$estadoNotificacion, $duracion,$prioridad,$titulo,$descripcion)
    {

        $this->opcion = $opcion;
        $this->estadoNotificacion = $estadoNotificacion;
        $this->duracion = $duracion;
        $this->prioridad = $prioridad;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;

        
       
    }

    public function generar()
    {
      
        try {

            switch ($this->opcion) {
                case 1:                
                    $notificacion = new aplicacionEmpresa();

                    break;
                case 2:
                    $notificacion = new aplicacionFuera();
                    break;
                default:
                    throw new \Exception("Opción ".$this->opcion." desconocida --Opciones disponibles:: opc 1: Documentohtml -opc 2: DocumentoPdf ");

            }

            
            //esto ta armando dramas
            $notificacion->llamarNotificacion($this->estadoNotificacion,$this->duracion,$this->prioridad,$this->titulo,$this->descripcion);
            
            $r=$notificacion->mostrar();

           
          
            $respuesta = array('Estado' => "success",
                'Response' => $r);
            return $respuesta;
        } catch (Exception $e) {
            $respuesta = array('Estado' => "Error",
                'Response' => $e->getMessage());
            return $respuesta;
        }
    }

}
