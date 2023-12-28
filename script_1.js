let text = document.getElementById('text');
let CROWD = document.getElementById('Bg1');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    text.style.marginTop = value + 'px';
});

