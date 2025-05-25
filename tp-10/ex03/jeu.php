<?php
require('Guerrier.php');
$conn = new mysqli('localhost', 'root', '', 'TP10');

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $conn->query("INSERT INTO guerriers (nom) VALUES ('$nom')");
}

if (isset($_GET['frappe']) && isset($_GET['cible'])) {
    $cible = $_GET['cible'];
    $conn->query("UPDATE guerriers SET degats = degats + 5 WHERE nom = '$cible'");
    $conn->query("DELETE FROM guerriers WHERE degats >= 100");
}

$guerriers = $conn->query("SELECT * FROM guerriers");
?>

<h2>Créer un guerrier</h2>
<form method="post">
    Nom : <input type="text" name="nom" required>
    <input type="submit" value="Créer">
</form>

<h2>Liste des guerriers</h2>
<ul>
<?php while($g = $guerriers->fetch_assoc()): ?>
    <li>
        <?= $g['nom'] ?> (<?= $g['degats'] ?> dégâts)
        <a href="jeu.php?frappe=1&cible=<?= $g['nom'] ?>">Frapper</a>
    </li>
<?php endwhile; ?>
</ul>
