const switchThemebtn = document.querySelector('.changeTheme');
let toggleTheme = 0;

switchThemebtn.addEventListener('click', () => {
    if(toggleTheme === 0) {
        document.documentElement.style.setProperty('--ecriture', 'rgb(255, 255, 255)');
        document.documentElement.style.setProperty('--background', '#333');
        document.querySelector('.activeDesactiveTheme').innerText = `(Activé)`;
        toggleTheme++;
    }
    else {
        document.documentElement.style.setProperty('--ecriture', '#333');
        document.documentElement.style.setProperty('--background', 'rgb(255, 255, 255)');
        document.querySelector('.activeDesactiveTheme').innerText = `(Desactivé)`;
        toggleTheme--;
    }
})