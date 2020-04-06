const sr = ScrollReveal();

sr.reveal('.image-affiche, .image-affiche2', {
    origin: 'top',
    distance: '200px',
    scale: 0.8,
    duration: 3000,
    delay: 500,
    reset: true
});

sr.reveal('.card', {
    origin: 'left',
    distance: '220px',
    duration: 3500,
    reset: true
});

sr.reveal('.choix', {
    duration: 3000,
    delay: 50,
    reset: true
});