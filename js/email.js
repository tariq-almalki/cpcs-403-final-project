const div = document.getElementById('email-div');
const button = document.getElementById('show-button');

button.addEventListener('click', () => {
    const decodedValue = atob(div.dataset.email);
    div.textContent = decodedValue;
    div.style.filter = 'none';
});
