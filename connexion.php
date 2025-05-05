<?php
require_once 'config.php';

class Connexion {
    private static $instance = null;
    private $connexion;

    private function __construct() {
        try {
            $this->connexion = new PDO("mysql:host=" . HOST . ";dbname=" . BASE, USER, PASS);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Connexion();
        }
        return self::$instance;
    }

    public function getConnexion() {
        return $this->connexion;
    }
}
?>
