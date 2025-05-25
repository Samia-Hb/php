<?php
session_start();
if (!isset($_SESSION['CONNECT']) || $_SESSION['CONNECT'] !== 'OK') {
    header("Location: login.php?erreur=2");
    exit();
}
?>

<h1>Hello <?= htmlspecialchars($_SESSION['login']) ?></h1>
<a href="validation.php?afaire=deconnexion">Déconnexion</a>
