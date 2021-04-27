<?php 

namespace Model;

class Propiedad extends ActiveRecord{
    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedor_id'];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedor_id;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedor_id = $args['vendedor_id'] ?? '';
    }

    public function validar(){
        if(!$this->titulo){
            self::$errores[] = "Debes añadir un título";
        }

        if(!$this->precio){
            self::$errores[] = "Debes añadir un precio";
        }

        if(!$this->descripcion){
            self::$errores[] = "Debes añadir una descripcion";
        }

        if(strlen($this->descripcion) < 50){
            self::$errores[] = "La descripción debe tener al menos 50 caracteres";
        }

        if(!$this->habitaciones){
            self::$errores[] = "Debes añadir número de habitaciones";
        }

        if(!$this->wc){
            self::$errores[] = "Debes añadir número de baños";
        }

        if(!$this->estacionamiento){
            self::$errores[] = "Debes añadir número de estacionamiento";
        }

        if(!$this->vendedor_id){
            self::$errores[] = "Debes añadir un vendedor";
        }

        if(!$this->imagen){
            self::$errores[] = 'La imagen de la propiedad es obligatoria';
        }

        return self::$errores;
    }
}