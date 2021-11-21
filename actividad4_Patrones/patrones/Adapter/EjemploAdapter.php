<?php

namespace Adapter;

use Exception;
//Hay que manosear esto aun

require_once 'models/DocumentoHtml.class.php';
require_once 'models/DocumentoPdf.class.php';

class EjemploAdapter
{
    public $opcion;
    public $texto;


    public function __construct($opcion,$texto)
    {

        $this->opcion = $opcion;
        $this->estadoNotificacion = $estadoNotificacion;
        $this->duracion = $duracion;
        $this->prioridad = $prioridad;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;

        $this->ip = $ip;
        $this->sistema_operativo = $sistema_operativo;
        $this->fecha = $fecha;
        $this->hora = $hora;
       
    }

    public function generar()
    {
        try {

            switch ($this->opcion) {
                case 1:
                    $notificacion = new aplicacionEmpresa();
                    $notificacion->llamarNotificacion($this->estadoNotificacion,$this->duracion,$this->prioridad,$this->titulo,
                        $this->descripcion);
                    
                    break;
                case 2:
                    $notificacion = new aplicacionFuera();
                    $notificacion->llamarNotificacion($this->estadoNotificacion,$this->duracion,$this->prioridad,$this->titulo,
                        $this->descripcion,$this->ip,$this->sistema_operativo,$this->fecha, $this->hora);
                    break;
                default:
                    throw new \Exception("Opción ".$this->opcion." desconocida --Opciones disponibles:: opc 1: Documentohtml -opc 2: DocumentoPdf ");

            }

            

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
