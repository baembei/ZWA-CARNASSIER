// function togglePassword() {
//     let passwordInput = document.getElementById("password");
//     let passwordIcon = document.querySelector(".toggle-password");
//
//     if (passwordInput.type === "password") {
//         passwordInput.type = "text";
//         passwordIcon.src = "references/hide.png";
//     } else {
//         passwordInput.type = "password";
//         passwordIcon.src = "references/view.png";
//     }
// }



document.getElementById('togglePassword').addEventListener('click', function() {
    const password = document.getElementById('password');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    this.innerText = type === 'password' ? 'Show Password' : 'Hide Password';
});


document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const hint = document.getElementById('password-hint');
    const minLength = password.length >= 8;
    const hasNumber = /\d/.test(password);
    const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);

    hint.innerHTML = `
        <p>Password must contain:</p>
        <ul>
            <li>${minLength ? '✔️' : '❌'} At least 8 characters</li>
            <li>${hasNumber ? '✔️' : '❌'} At least 1 number</li>
            <li>${hasSpecialChar ? '✔️' : '❌'} At least 1 special character</li>
        </ul>
    `;
});


document.querySelector('form').addEventListener('submit', function(e) {
    const firstName = document.getElementById('first-name').value.trim();
    const lastName = document.getElementById('last-name').value.trim();
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirm-password').value.trim();

    const nameError = document.getElementById('name-error');
    const lastNameError = document.getElementById('last-name-error');
    const passwordError = document.getElementById('password-error');
    const passwordMatchError = document.getElementById('password-match-error');

    let isValid = true;

    if (firstName === '' || !/^[a-zA-Z]+$/.test(firstName)) {
        e.preventDefault();
        nameError.textContent = 'Please enter a valid First Name (letters only).';
        nameError.style.display = 'block';
        isValid = false;
    } else {
        nameError.style.display = 'none';
    }

    if (lastName === '' || !/^[a-zA-Z]+$/.test(lastName)) {
        e.preventDefault();
        lastNameError.textContent = 'Please enter a valid Last Name (letters only).';
        lastNameError.style.display = 'block';
        isValid = false;
    } else {
        lastNameError.style.display = 'none';
    }


    document.getElementById('confirm-password').addEventListener('input', function() {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm-password').value;
        const errorMessage = document.getElementById('password-error');

        if (password !== confirmPassword) {
            errorMessage.style.display = 'block';
        } else {
            errorMessage.style.display = 'none';
        }
    });

    const passwordRegex = /^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;
    if (!passwordRegex.test(password)) {
        e.preventDefault();
        passwordError.textContent = 'Password must be at least 8 characters long, contain one uppercase letter and one special character.';
        passwordError.style.display = 'block';
        isValid = false;
    } else {
        passwordError.style.display = 'none';
    }




    if (password !== confirmPassword) {
        e.preventDefault();
        passwordMatchError.textContent = 'Passwords do not match!';
        passwordMatchError.style.display = 'block';
        isValid = false;
    } else {
        passwordMatchError.style.display = 'none';
    }
    if (isValid) {
        nameError.style.display = 'none';
        lastNameError.style.display = 'none';
        passwordError.style.display = 'none';
        passwordMatchError.style.display = 'none';
    }


});





