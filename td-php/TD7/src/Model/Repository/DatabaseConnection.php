<?php
//require_once __DIR__ . '/../Config/Conf.php';
namespace App\Covoiturage\Model\Repository;
use App\Covoiturage\Config\Conf as Conf;
use PDO;

class DatabaseConnection
{
    private PDO $pdo;
    private static ?DatabaseConnection $instance = null;

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
        return DatabaseConnection::getInstance()->pdo;
    }

    private static function getInstance(): DatabaseConnection{
        if (is_null(static::$instance))
            static::$instance = new DatabaseConnection();
        return static::$instance;
    }




}