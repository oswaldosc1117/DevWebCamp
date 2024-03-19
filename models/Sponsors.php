<?php

namespace Model;

class Sponsors extends ActiveRecord{
    protected static $tabla = 'sponsors';
    protected static $columnasDB = ['id', 'url', 'imagen'];

    public $id;
    public $url;
    public $imagen;
}