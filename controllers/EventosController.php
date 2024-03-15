<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Dias;
use MVC\Router;
use Model\Categorias;
use Model\Eventos;
use Model\Horas;
use Model\Ponente;

class EventosController{

    public static function index(Router $router) {
        if(!is_admin()){
            header('Location: /login');
        }

        $pagina_actual = $_GET['page'];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);

        if(!$pagina_actual || $pagina_actual < 1){
            header('Location: /admin/eventos?page=1');
        }

        $registros_por_pagina = 10;
        $total_registros = Eventos::total();
        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total_registros);

        $eventos = Eventos::paginar($registros_por_pagina, $paginacion->offset());

        foreach($eventos as $evento){
            $evento->categoria = Categorias::find($evento->categoria_id);
            $evento->dia = Dias::find($evento->dia_id);
            $evento->hora = Horas::find($evento->hora_id);
            $evento->ponente = Ponente::find($evento->ponente_id);
        }
        
        $router->render('admin/eventos/index', [
            'titulo' => 'Conferencias y Workshops',
            'eventos' => $eventos,
            'paginacion' => $paginacion->paginacion()]);
    }

    public static function crear(Router $router){
        if(!is_admin()){
            header('Location: /login');
        }

        $alertas = [];

        $categorias = Categorias::all('ASC');
        $dias = Dias::all('ASC');
        $horas = Horas::all('ASC');
        $eventos = new Eventos();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /login');
            }
            
            $eventos->sincronizar($_POST);

            $alertas = $eventos->validar();

            if(empty($alertas)){
                $resultado = $eventos->guardar();

                if($resultado){
                    header('Location: /admin/eventos');
                }
            }
        }

        $router->render('admin/eventos/crear', [
            'titulo' => 'Registrar Evento',
            'alertas' => $alertas,
            'categorias' => $categorias,
            'dias' => $dias,
            'horas' => $horas,
            'eventos' => $eventos
        ]);
    }


    public static function editar(Router $router){
        if(!is_admin()){
            header('Location: /login');
        }

        $alertas = [];

        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if(!$id){
            header('Location: /admin/eventos');
        }

        $categorias = Categorias::all('ASC');
        $dias = Dias::all('ASC');
        $horas = Horas::all('ASC');
        $eventos = Eventos::find($id);

        if(!$eventos){
            header('Location: /admin/eventos');
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /login');
            }
            
            $eventos->sincronizar($_POST);

            $alertas = $eventos->validar();

            if(empty($alertas)){
                $resultado = $eventos->guardar();

                if($resultado){
                    header('Location: /admin/eventos');
                }
            }
        }

        $router->render('admin/eventos/Editar', [
            'titulo' => 'Editar Evento',
            'alertas' => $alertas,
            'categorias' => $categorias,
            'dias' => $dias,
            'horas' => $horas,
            'eventos' => $eventos
        ]);
    }


    public static function eliminar(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /login');
            }

            $id = $_POST['id'];

            $eventos = Eventos::find($id);

            if(!isset($eventos)){
                header('Location: /admin/eventos');
            }

            $resultado = $eventos->eliminar();
            if($resultado){
                header('Location: /admin/eventos');
            }
        }
    }
}