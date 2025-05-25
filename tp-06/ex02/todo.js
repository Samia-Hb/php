const form = document.getElementById('todo-form');
const input = document.getElementById('todo-input');
const list = document.getElementById('todo-list');

form.addEventListener('submit', function (e)
{
    e.preventDefault();

    const taskText = input.value.trim();
    if (taskText === '') return;

    const li = document.createElement('li');
    li.textContent = taskText;

    const doneBtn = document.createElement('button');
    doneBtn.textContent = '✔';
    doneBtn.addEventListener('click', function ()
    {
        li.classList.toggle('completed');
    });

    const deleteBtn = document.createElement('button');
    deleteBtn.textContent = '✖';
    deleteBtn.addEventListener('click', function () {
        list.removeChild(li);
    });

    li.appendChild(doneBtn);
    li.appendChild(deleteBtn);
    list.appendChild(li);

    input.value = '';
});
