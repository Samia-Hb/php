const div = document.createElement('div');
div.className = 'my-div';

const p = document.createElement('p');
p.textContent = "Ceci est un paragraphe";

div.appendChild(p);

document.body.appendChild(div);

p.textContent = "Le texte a été modifié";

p.style.backgroundColor = 'lightblue';
p.style.textAlign = 'center';

div.addEventListener('click', function ()
{
    p.textContent = "Un clic a été détecté";
});
