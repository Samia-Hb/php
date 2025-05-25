<!DOCTYPE html>
<html>
    <head>
        <title> Formulaire de contact simple </title>
    </head>
    <body>
        <form method="POST">
            <label>Nom      :</label>
            <input type="text" name="Nom" required > </br>
            <label>Email    :</label>
            <input type="text" name="Email" required> </br>
            <label >Message :</label>
            <input type="text" name="Message" required> </br>
            <input type="submit" name="Submit" value="Submit">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $Nom = $_POST['Nom'];
                $Email = $_POST['Email'];
                $Message = $_POST['Message'];
            }
            if (isset($_POST['Submit']))
            {
                echo "Name : "  . $Nom    . "\n";
                echo "Email :"  . $Email  . "\n";
                echo "Message :". $Message. "\n"; 
            }
        ?>
    </body>

</html>