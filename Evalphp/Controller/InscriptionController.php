<?php
include '../Models/user.php';
if(isset($_GET['register'])){
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
    $yacine = $_POST['prenom'];
    $nom = $_POST['nom'];
    $user = new user();
    $user->insertUser($mdp,$prenom,$nom);
    header('Location:/');
}else{
    include "../View/inscription.php";
}
?>