const button = document.getElementById('button');

button.addEventListener('click',function() {
    this.textContent = "Sent...";
    this.classList.add('Sent');
});