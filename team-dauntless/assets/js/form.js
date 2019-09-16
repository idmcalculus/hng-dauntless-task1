const showSignIn = ()=>{
    cards.classList.remove('flip');
    front.style.pointerEvents = 'all';
    back.style.pointerEvents = 'none';
}
const showSignUp = ()=>{
    cards.classList.add('flip');
    back.style.pointerEvents = 'all';
    front.style.pointerEvents = 'none';
    back.style.display = 'block';
}

const cards = document.querySelector('.form-cards');
const back = document.querySelector('#back');
const front = document.querySelector('#front');
let signInBtn = document.querySelector('.sign-in');
let signUpBtn = document.querySelector('.sign-up');

signInBtn.addEventListener('click', showSignIn);
signUpBtn.addEventListener('click', showSignUp);

