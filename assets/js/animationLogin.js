const signInBtn = document.querySelector('#sign-in-btn');
const signUpBtn = document.querySelector('#sign-up-btn');

const container = document.querySelector('.container');

signInBtn.addEventListener('click', () => {

  container.classList.remove('sign-up--mode');
});

signUpBtn.addEventListener('click', () => {

  container.classList.add('sign-up--mode');
});

