<?php
$conn = new mysqli('localhost', 'root', '', 'TP10');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date = $_POST['date'];
    $conn->query("INSERT INTO exercice (titre, auteur, date_creation) VALUES ('$titre', '$auteur', '$date')");
}

$result = $conn->query("SELECT * FROM exercice");
?>

<h2>Ajouter un exercice</h2>
<form method="post">
    Titre: <input type="text" name="titre"><br>
    Auteur: <input type="text" name="auteur"><br>
    Date: <input type="date" name="date"><br>
    <input type="submit" value="Ajouter">
</form>

<h2>Liste des exercices</h2>
<table border="1">
    <tr><th>ID</th><th>Titre</th><th>Auteur</th><th>Date</th><th>Actions</th></tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['titre'] ?></td>
        <td><?= $row['auteur'] ?></td>
        <td><?= $row['date_creation'] ?></td>
        <td>
            <a href="modifier.php?id=<?= $row['id'] ?>">Modifier</a>
            <a href="supprimer.php?id=<?= $row['id'] ?>" onclick="return confirm('Supprimer ?')">Supprimer</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
