<?php
    session_start();

    $valid_username = "admin";
    $valid_password = "secret";

    if (isset($_GET['logout']))
    {
        session_destroy();
        header("Location: auth.php");
        exit();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === $valid_username && $password === $valid_password)
        {
            $_SESSION['username'] = $username;
            header("Location: auth.php");
            exit();
        } else {
            $error = "Identifiants incorrects.";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Authentification System</title>
</head>
<body>
<?php if (isset($_SESSION['username'])): ?>
    <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2>
    <a href="auth.php?logout=1">Se déconnecter</a>

<?php else: ?>
    <h2>Connexion</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST">
        <label>Nom d'utilisateur:</label>
        <input type="text" name="username" required><br>

        <label>Mot de passe:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
<?php endif; ?>

</body>
</html>
