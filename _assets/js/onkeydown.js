document.addEventListener('contextmenu', event => {
    event.preventDefault();
});

document.querySelectorAll('.disabled').forEach(element => {
    element.style.pointerEvents = 'none';
});

document.onkeydown = function(e) {
        if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
            alert('hayooooo mau ngapain :p');
        }
        return false;
};