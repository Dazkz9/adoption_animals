<?php require "head.php" ?>
<form action='../Controller/InscriptionController.php?register' id="register" method="post">
    <div class="container">
        <div class="col">
            <label for="firstName">Prénom : </label>
            <input type="text" id="prenom" name="prenom" class="form-control">
        </div>
        <div class="col">
            <label for="lastName">Nom : </label>
            <input type="text" id="nom" name="nom" class="form-control">
        </div>
        <div class="col">
            <label for="password">Mot de Passe :</label>
            <input type="password" id="mdp" name="mdp" class="form-control">
        </div>
    </div>
        
    </div>
    <div class="d-flex flex-row">
    <button class="btn btn-primary my-4">Vous inscrire</button>
    </div>
        
</form>

<div class="text-center">
    <small class="mt-4">Vous avez déjà un compte? <a href="../Controller/ConnexionController.php">Venez ici !</a></small>
</div>
<?php require "foot.php" ?>