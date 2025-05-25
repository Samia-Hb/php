<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription PFE</title>
    <script>
        window.onload = () => {
            const params = new URLSearchParams(window.location.search);
            const prof = params.get("prof");
            if (prof)
                document.getElementById("professeur").value = prof.charAt(0).toUpperCase() + prof.slice(1);
        };
    </script>
</head>
<body>

<h1>Inscription au PFE encadré par : <span id="nomProf"></span></h1>

<form action="../tp-02/traitement.php" method="post">
    <label>Nom :</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Email :</label><br>
    <input type="email" name="email" required><br><br>

    <label>Nom du professeur encadrant :</label><br>
    <input type="text" name="professeur" id="professeur" readonly><br><br>

    <label>Titre du PFE :</label><br>
    <input type="text" name="titre" required><br><br>

    <button type="submit">Envoyer</button>
</form>

</body>
</html>
