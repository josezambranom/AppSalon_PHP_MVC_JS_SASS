<?php 
namespace Model;

class CitaServicio extends ActiveRecord {
    protected static $tabla = "citas_servicios";
    protected static $columnasDB = ['id', 'citasid', 'serviciosid'];

    public $id, $citasid, $serviciosid;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->citasid = $args['citasid'] ?? '';
        $this->serviciosid = $args['serviciosid'] ?? '';
    }
}

?>