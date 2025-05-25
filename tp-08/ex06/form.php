<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$questions = 
[
    [
        "question" => "Quel est le capital de la France ?",
        "options" => ["Paris", "Londres", "Berlin", "Madrid"],
        "answer" => "Paris"
    ],
    [
        "question" => "Combien de continents y a-t-il ?",
        "options" => ["5", "6", "7", "8"],
        "answer" => "7"
    ],
    [
        "question" => "Quel langage est utilisé pour créer des pages web dynamiques côté serveur ?",
        "options" => ["HTML", "CSS", "JavaScript", "PHP"],
        "answer" => "PHP"
    ]
];

$score = 0;
$submitted = ($_SERVER["REQUEST_METHOD"] == "POST");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mini Quiz</title>
</head>
<body>
    <h2>Mini Quiz</h2>
    <form method="POST">
        <?php foreach ($questions as $index => $q): ?>
            <p>
                <strong>Q<?= $index + 1 ?>. <?= $q["question"] ?></strong><br>
                <?php foreach ($q["options"] as $option): ?>
                    <input type="radio" name="answers[<?= $index ?>]" value="<?= $option ?>" required>
                    <?= $option ?><br>
                <?php endforeach; ?>

                <?php
                if ($submitted) {
                    $userAnswer = $_POST['answers'][$index] ?? '';
                    if ($userAnswer === $q["answer"]) {
                        echo "<span style='color:green'>✔ Correct</span><br>";
                        $score++;
                    } else {
                        echo "<span style='color:red'>✘ Incorrect. Bonne réponse : {$q['answer']}</span><br>";
                    }
                }
                ?>
            </p>
        <?php endforeach; ?>

        <?php if (!$submitted): ?>
            <input type="submit" value="Valider">
        <?php else: ?>
            <h3>Votre score : <?= $score ?> / <?= count($questions) ?></h3>
        <?php endif; ?>
    </form>
</body>
</html>
