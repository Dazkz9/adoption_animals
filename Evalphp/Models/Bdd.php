<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
class Bdd {

    private PDO $bdd;

    public function __construct(){
         $this->bdd = new PDO("mysql:host=localhost:3308;dbname=adopteani", "root@localhost", "");

    }

    public function getBdd(){
        return $this->bdd;
    }
}
?>