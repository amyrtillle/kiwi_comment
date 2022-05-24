function sweet(){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 1800,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Vous avez acheté ce pack'
    })
}

function success(){
    Swal.fire(
        'Compte créé',
        'Votre compte a bien été créé !',
        'success'
    )
}


function errmdp(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Mots de passes différents.',
    })
}

function errmail(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Adresse email incorrecte.',
    })
}

function maillength() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Adresse email trop longue.',
    })
}

function pseudlength() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Pseudonyme trop long.',
    })
}

function duplicate() {
    Swal.fire({
        icon: 'error',
        title: 'Attention',
        text: 'Compte deja existant',
    })
}

function successcontact(){
    Swal.fire(
        'Envoyé',
        'Votre message a bien été envoyé!',
        'success'
    )
}

function errtel() {
    Swal.fire({
        icon: 'error',
        title: 'Attention',
        text: 'N° de téléphone erroné',
    })
}

function prenomlength(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Prénom trop long.',
    })
}

function duplicatemess(){
    Swal.fire({
        icon: 'error',
        title: 'Attention',
        text: 'Vous avez déjà envoyé ce message',
    })
}

function tuto(){
    Swal.fire(
        'Tuto ajouté',
        'Votre tuto a bien été ajouté !',
        'success'
    )
}

function mdpchanged(){
    Swal.fire(
        'Mot de passe modifié',
        'Votre mot de passe a bien été changé !',
        'success'
    )
}

function wrongmdp(){
    Swal.fire({
        icon: 'error',
        title: 'Attention',
        text: 'Mots de passes différents',
    })
}

function successpp(){
    Swal.fire(
        'Photo de profil modifiée',
        'Votre photo de profil a bien été changée !',
        'success'
    )
}

function errorpp(){
    Swal.fire({
        icon: 'error',
        title: 'Attention',
        text: 'Une erreur est survenue, votre nouvelle photo de profil est la même que la précédente',
    })
}


