<?php
define('MYSQL_HOST','mysql:host=localhost');     
define('MYSQL_USER','root');
define('MYSQL_PASSWORD','');
define('MYSQL_DB_NAME','dbname=rede_social');
define('SET_NAMES','SET NAMES UTF8');

class ConexaoDB
{
    //Instancia única - Padrão de Projetos Singleton 
    public static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO(
                MYSQL_HOST.";".MYSQL_DB_NAME,
                MYSQL_USER,
                MYSQL_PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
            
            self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS,PDO::NULL_EMPTY_STRING);
        }

        return self::$instance;
    }
}