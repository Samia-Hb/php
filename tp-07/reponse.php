<?php
    $prenom = strip_tags($_POST['prenom']);
    $nom = strip_tags($_POST['nom']);
    $email = strip_tags($_POST['email']);
    $mdp = strip_tags($_POST['mdp']);

    echo "<h1>Bonjour $prenom $nom</h1>";
    echo "<p>Votre email est : $email</p>";
    echo "<p>Votre mot de passe est : $mdp</p>";
?>
