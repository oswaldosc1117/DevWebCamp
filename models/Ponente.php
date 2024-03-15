<?php

namespace Model;

class Ponente extends ActiveRecord{
    protected static $tabla = 'ponentes';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'ciudad', 'pais', 'imagen', 'tags', 'redes'];

    public $id;
    public $nombre;
    public $apellido;
    public $ciudad;
    public $pais;
    public $imagen;
    public $tags;
    public $redes;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->ciudad = $args['ciudad'] ?? '';
        $this->pais = $args['pais'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->tags = $args['tags'] ?? '';
        $this->redes = $args['redes'] ?? '';
    }

    public function validar() {
        if(!$this->nombre && !$this->apellido && !$this->ciudad && !$this->pais && !$this->imagen && !$this->tags){
            self::$alertas['error'][] = 'Es Obligatorio llenar el Formulario';
        } else{
            if(!$this->nombre) {
                self::$alertas['error'][] = 'El Nombre es Obligatorio';
            }
            elseif(!$this->apellido) {
                self::$alertas['error'][] = 'El Apellido es Obligatorio';
            }
            elseif(!$this->ciudad) {
                self::$alertas['error'][] = 'El Campo Ciudad es Obligatorio';
            }
            elseif(!$this->pais) {
                self::$alertas['error'][] = 'El Campo País es Obligatorio';
            }
            elseif(!$this->imagen) {
                self::$alertas['error'][] = 'La imagen es obligatoria';
            }
            elseif(!$this->tags) {
                self::$alertas['error'][] = 'El Campo áreas es obligatorio';
            }
        }
    
        return self::$alertas;
    }
}