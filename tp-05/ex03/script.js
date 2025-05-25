const QUESTIONS = [
    ["Quelle est la capitale de la France ?", "Paris"],
    ["2 + 2 = ?", "4"],
    ["Quelle est la couleur du ciel ?", "Bleu"],
    ["Combien de jours dans une semaine ?", "7"],
    ["Langage utilisé pour le web côté client ?", "JavaScript"]
    ];

function lancerQuiz()
{
    let score = 0;

    for (let i = 0; i < QUESTIONS.length; i++)
    {
        let reponse = prompt(QUESTIONS[i][0]);

        if (reponse.toLowerCase().trim() === QUESTIONS[i][1].toLowerCase()) {
            alert("Réponse juste !");
            score++;
        } else
            alert("Réponse fausse.");
    }

    alert(`Vous avez répondu correctement à ${score} question(s) sur ${QUESTIONS.length}.`);
}