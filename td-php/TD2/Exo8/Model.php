<?php
require_once 'Conf.php';
class Model
{
    private PDO $pdo;
    private static ?Model $instance = null;

    private function __construct()
    {
        $hostname = Conf::getHostname();;
        $databaseName = Conf::getDatabase();;
        $login = Conf::getLogin();;
        $password = Conf::getPassword();;


        $this->pdo = new PDO("mysql:host=$hostname;dbname=$databaseName", $login, $password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getPdo() {
        return Model::getInstance()->pdo;
    }

    private static function getInstance(): Model{
        if (is_null(static::$instance))
            Model::$instance = new Model();
        return Model::$instance;
    }




}