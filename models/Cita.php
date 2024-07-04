<?php 
namespace Model;

class Cita extends ActiveRecord {
    // BD
    protected static $tabla = 'citas';
    protected static $columnasDB = ['id', 'fecha', 'hora', 'usuarioid'];
    
    public $id, $fecha, $hora, $usuarioid;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? '';
        $this->hora = $args['hora'] ?? '';
        $this->usuarioid = $args['usuarioid'] ?? '';
    }
}

?>