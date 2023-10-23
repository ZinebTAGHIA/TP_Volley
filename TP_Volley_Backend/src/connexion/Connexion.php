<?php

class Connexion
{
    private $connexion;

    public function __construct()
    {
        $host = 'localhost:3307';
        $dbname = 'school';
        $login = 'root';
        $password = '';
        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
            $this->connexion->query("SET NAMES UTF8");
        } catch (Exception $e) {
            die('Erreur : ' . $e . getMessage());
        }
    }

    /**
     * @return PDO
     */
    public function getConnexion()
    {
        return $this->connexion;
    }
}