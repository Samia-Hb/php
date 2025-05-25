<?php
$conn = new mysqli('localhost', 'root', '', 'TP10');
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $date = $_POST['date'];
    $conn->query("UPDATE exercice SET titre='$titre', auteur='$auteur', date_creation='$date' WHERE id=$id");
    header("Location: index.php");
    exit();
}

$result = $conn->query("SELECT * FROM exercice WHERE id=$id");
$ex = $result->fetch_assoc();
?>

<form method="post">
    Titre: <input type="text" name="titre" value="<?= $ex['titre'] ?>"><br>
    Auteur: <input type="text" name="auteur" value="<?= $ex['auteur'] ?>"><br>
    Date: <input type="date" name="date" value="<?= $ex['date_creation'] ?>"><br>
    <input type="submit" value="Modifier">
</form>
