const sr = ScrollReveal();

sr.reveal('.card-img', {
    origin: 'left',
    duration: 3000,
    reset: true
});

sr.reveal('.card-body', {
    origin: 'right',
    distance: '500px',
    duration: 3500,
    reset: true
});

sr.reveal('.synop', {
    origin: 'left',
    distance: '100px',
    duration: 2500,
    reset: true
});

sr.reveal('.texte-synop', {
    origin: 'bottom',
    distance: '100px',
    delay: 800,
    reset: true
});

sr.reveal('.acteur', {
    interval: 300,
    delay: 500
}, 2000);

sr.reveal('.img-real', {
    duration: 3000,
   scale: 0.5,
   reset: true, 
   mobile: false  
});

sr.reveal('.text-real', {
    origin:'bottom',
    distance: '200px',
    duration: 1000,
    delay: 700,
    reset: true,
    mobile: false 
});

sr.reveal('.bande-annonce', {
    origin:'right',
    duration: 2000,
    distance: '300px',
    reset: true,
    mobile: false 
})