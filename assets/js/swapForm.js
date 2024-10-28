function swapForm() {
    const signInForm = document.querySelector('.sign-in-form');
    const resetPasswordForm = document.querySelector('.reset-password-form');

    // Toggle display of both forms
    if (signInForm.style.display === 'none') {
        signInForm.style.display = 'flex';
        resetPasswordForm.style.display = 'none';
    } else {
        signInForm.style.display = 'none';
        resetPasswordForm.style.display = 'flex';
    }
}



   