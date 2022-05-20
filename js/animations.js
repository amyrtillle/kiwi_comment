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
