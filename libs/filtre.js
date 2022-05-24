// Pour cacher un élément
function hide(element) {
    element.classList.add('hidden');
}

// Pour montrer un élément
function show(element) {
    element.classList.remove('hidden');
}

// Boutons de filtrage
const buttonsFiltre = document.querySelectorAll('.filter-controls button');


// Eléments à filtrer
const elements = document.querySelectorAll('.filter-list > li')


for (let buttonFiltre of buttonsFiltre) {
    buttonFiltre.addEventListener('click', function (ev) {

        // Critère de filtre
        let critere = ev.target.dataset.filter;
        console.log(critere);

        // Gestion de la classe active
        let activeBtn = document.querySelector('.filter-controls .active')
        activeBtn.classList.remove('active');
        ev.target.classList.add('active');

        // Ne montrer que les éléments filtérs
        for (elt of elements) {
            if ((critere === "*") || (elt.classList.contains(critere))) {
                show(elt);
            }
            else {
                hide(elt);
            }
        }

    });
}