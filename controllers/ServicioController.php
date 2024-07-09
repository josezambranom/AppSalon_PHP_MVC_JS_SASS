<?php 
namespace Controllers;

use MVC\Router;

class ServicioController {
    public static function index(Router $router) {
        $router->render('servicios/index', [

        ]);
    }

    public static function crear(Router $router) {
        $router->render('', [

        ]);

        if($_SERVER['REQUEST_METHOD' === 'POST']) {

        }
    }

    public static function actualizar(Router $router) {
        $router->render('', [

        ]);

        if($_SERVER['REQUEST_METHOD' === 'POST']) {

        }
    }

    public static function eliminar() {

    }
}

?>