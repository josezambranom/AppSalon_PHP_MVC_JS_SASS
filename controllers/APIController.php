<?php 

namespace Controllers;

use Model\Cita;
use Model\Servicio;

class APIController {
    public static function index() {
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar(){
        
        // Almacena la cita y devuelve el ID
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id'];

        // Almacena la Cita y el Servicio
        $idServicios = explode(",", $_POST['servicios']);
        $resultado = [
            "servicios" => $idServicios
        ];

        foreach($idServicios as $idServicio) {
            $args = [
                'citaid' => 
            ];
        }

        echo json_encode($resultado);
    }
}

?>