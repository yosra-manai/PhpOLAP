<?php

class Database {

    // Nom de la base de données
    private static $dbName = 'SagemDW';
    // Hote de la base de données
    private static $dbHost = 'localhost';
    // Nom utilisateur d'accès de la base de données
    private static $dbUsername = 'user-PC\user';
    // Mot de passe accès base de données
    private static $dbUserPassword = '';
    private static $cont = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect() {
        // One connection through whole application
        if (null == self::$cont) {
            try {
                self::$cont = new PDO("sqlsrv:Server=" . self::$dbHost . ";" . "Database=" . self::$dbName);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }

    /**
     * Fermeture de la connection à la base de données
     *
     */
    public static function disconnect() {
        self::$cont = null;
    }

    public static function getDatabase() {
        return self::$cont;
    }

}
?>

