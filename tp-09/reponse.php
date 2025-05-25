<?php
    $prenom = strip_tags($_POST['prenom']);
    $nom = strip_tags($_POST['nom']);
    $email = strip_tags($_POST['email']);
    $message = strip_tags($_POST['message']);

    echo "<h1>Merci pour votre message, $prenom $nom</h1>";
    echo "<p>Nous vous contacterons à l'adresse : <strong>$email</strong></p>";
    echo "<p>Voici le message que vous avez envoyé :</p>";
    echo "<blockquote>$message</blockquote>";
?>
