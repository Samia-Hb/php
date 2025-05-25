let nombreAleatoire = Math.floor(Math.random() * 10) + 1;
let proposition;
let essais = 0;

do{
    proposition = parseInt(prompt("Devinez le nombre entre 1 et 10 :"));
    essais++;

    if (proposition < nombreAleatoire)
        alert("Trop petit !");
    else if (proposition > nombreAleatoire)
        alert("Trop grand !");
} while (proposition !== nombreAleatoire);

alert(`Bravo ! Vous avez trouvé le nombre en ${essais} tentative(s).`);
