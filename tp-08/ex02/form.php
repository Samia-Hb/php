<!DOCTYPE html>
<html>
    <head>
        <title>Password Generator</title>
    </head>
    <body>
        <form method="POST">
            <label for="longueur">Enter Your Password Length:</label>    
            <input type="text" name="longueur" required><br>
            <input type="submit" name="submit" value="Generate">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))
        {
            $Longueur = intval($_POST['longueur']);
            $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}<>?/|';
            $longueur_total = strlen($caracteres);
            $Password = '';
            for ($i = 0; $i < $Longueur; $i++)
            {
                $Password .= $caracteres[random_int(0, $longueur_total - 1)];
            }
            echo "<p>Generated Password: <strong>$Password</strong></p>";
        }
        ?>
    </body>
</html>
