<?php
$erreur = $_GET['erreur'] ?? '';
$message = '';

if ($erreur == 1) $message = "Veuillez saisir un login et un mot de passe.";
elseif ($erreur == 2) $message = "Erreur de login/mot de passe.";
elseif ($erreur == 3) $message = "Vous avez été déconnecté du service.";
?>

<h2>Connexion</h2>
<?php if ($message): ?>
    <p style="color:red;"><?= $message ?></p>
<?php endif; ?>
<form action="validation.php" method="post">
    Login: <input type="text" name="login"><br>
    Mot de passe: <input type="password" name="pass"><br>
    <input type="submit" value="Valider">
</form>
