<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Livre d'or simple (Guestbook)</title>
</head>
<body>
    <h2>Laissez un message</h2>
    <form method="POST">
        Nom : <input type="text" name="name" required><br>
        Message : <br><textarea name="message" rows="4" cols="50" required></textarea><br>
        <input type="submit" name="submit" value="Envoyer">
    </form>

    <?php
    $filename = __DIR__ . "/guestbook.txt";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);
        $date = date("Y-m-d H:i:s");

        $entry = "[$date] $name: $message\n";
        if (file_put_contents($filename, $entry, FILE_APPEND) !== false) {
            echo "<p style='color:green'>Message enregistré avec succès.</p>";
        } else {
            echo "<p style='color:red'>Erreur : le fichier n'a pas pu être écrit.</p>";
        }
    }
    echo "<h2>Messages précédents :</h2>";
    if (file_exists($filename)) {
        $lines = file($filename);
        foreach ($lines as $line) {
            echo nl2br(htmlspecialchars($line));
        }
    } else {
        echo "<p>Aucun message pour l'instant.</p>";
    }
    ?>
</body>
</html>

