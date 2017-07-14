<?php

/**
 * Description of Conection
 *
 * @author Dimitri Miranda
 */
class Connection {

    protected static $db;

    public static function getConnection() {
        if (!self::$db) {
            new Connection();
        }
        return self::$db;
    }

    private function __construct() {

        try {
            $hostname = "DIMITRI\SQLEXPRESS";
            $dbname = "crud_estudo";
            $username = "root";
            $pw = "123456";

            self::$db = new PDO("sqlsrv:Server=$hostname;Database=$dbname", "$username", "$pw");
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //self::$db->exec('SET NAMES utf8');
            
        } catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
            exit;
        }
    }

}
