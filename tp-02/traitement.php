<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$filiere = $_POST['filiere'];
$sujet = $_POST['sujet'];
$description = $_POST['description'];

echo "<h1>Merci pour votre inscription, $nom !</h1>";
echo "<p>Votre projet \"$sujet\" en $filiere a bien été reçu.</p>";
?>
