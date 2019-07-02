<?php

namespace PPI\Util;

use PDO;

class Conexao {

    private static $instancia;

    private function __construct() {
        
    }

    public static function getInstancia() {
        if (!isset(self::$instancia)) {
            self::$instancia = new PDO(
                    "mysql:host=localhost;dbname=ppi;", "root", "123321", [
                PDO::MYSQL_ATTR_INIT_COMMAND =>
                'set names utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
                    ]
            );
        }
        return self::$instancia;
    }

}
