<?php

namespace Controllers;

use Model\Eventos;
use Model\Registros;
use Model\Usuario;
use MVC\Router;

class dashboardController{

    public static function index(Router $router) {

        // Obtener ultimos registros
        $registros = Registros::get(5);
        foreach($registros as $registro){
            $registro->usuario = Usuario::find($registro->usuario_id);
        }

        // Calcular los ingresos
        $presenciales = Registros::total('paquete_id', 1);
        $virtuales = Registros::total('paquete_id', 2);

        $ingresos = ($presenciales * 187.95) + ($virtuales * 46.05);

        // Ordernar eventos por la cantidad de lugares disponibles
        $menos_disponibles = Eventos::ordenarLimite('disponibles', 'ASC', 5);
        $mas_disponibles = Eventos::ordenarLimite('disponibles', 'DESC', 5);
        
        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel de Administración',
            'registros' => $registros,
            'ingresos' => $ingresos,
            'menos_disponibles' => $menos_disponibles,
            'mas_disponibles' => $mas_disponibles
        ]);
    }
}