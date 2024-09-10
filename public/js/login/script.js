const showHidePassword = document.querySelectorAll('.showHidePass');
const passLog = document.getElementById('passwordLogin');
const passReg = document.getElementById('passwordRegister');
showHidePassword[0].addEventListener('click', ()=>{
    showHidePassword[0].classList.toggle('fa-eye');
    showHidePassword[0].classList.toggle('fa-eye-slash');
    if(showHidePassword[0].classList.contains('fa-eye-slash')){
        passLog.type = 'text';
    } else {
        passLog.type = 'password';
    }
});
showHidePassword[1].addEventListener('click', ()=>{
    showHidePassword[1].classList.toggle('fa-eye');
    showHidePassword[1].classList.toggle('fa-eye-slash');
    if(showHidePassword[1].classList.contains('fa-eye-slash')){
        passReg.type = 'text';
    } else {
        passReg.type = 'password';
    }
});

const btnLogReg = document.querySelector('.btn-logReg');
const LogRegPage = document.querySelector('.logRegPage');
const welPageTitle = document.querySelector('.welcome-page-title');
btnLogReg.addEventListener('click', ()=>{
    LogRegPage.classList.toggle('register-page');
    if(LogRegPage.classList.contains('register-page')){
        welPageTitle.innerHTML= "<h2>Welcome to Rmaker!</h2>" +
                                "<p class='text-center' style='font-size: 1.2rem;'><i>Enter your personal details and let's make your own Resume with us.</i></p>";
        btnLogReg.innerHTML= "<i class='fa fa-long-arrow-left' aria-hidden='true'></i> Sign In";
    } else {
        welPageTitle.innerHTML= "<h2>Welcome Back!</h2>" +
                                "<p class='text-center' style='font-size: 1.2rem;'><i>To keep with us please sign in with your personal info.</i></p>";
        btnLogReg.innerHTML= "Sign Up <i class='fa fa-long-arrow-right' aria-hidden='true'></i>";
    }
});

const phoneInputField = document.querySelector('#phoneRegister');
const phoneInputLabel = document.querySelector('.plhPhone');
const phoneInput = window.intlTelInput(phoneInputField, {
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

phoneInputField.addEventListener("focus", () => {
    phoneInputLabel.classList.add("focused");
    const selectedFlag = document.querySelector('.iti__selected-flag');
    let titSplited = selectedFlag.title.split(" ");
    let phoneCode = titSplited[titSplited.length-1];
    if (phoneInputField.value === "" || phoneInputField.value.charAt(phoneInputField.value.length-2) === ")") {
        phoneInputField.value = `(${phoneCode}) `;
    }
});

phoneInputField.addEventListener("blur", () => {
    if (phoneInputField.value === "" || phoneInputField.value.charAt(phoneInputField.value.length-2) === ")") {
        phoneInputLabel.classList.remove("focused");
    }
});

// responsive
const btnOpenLogReg = document.querySelector('.btn-openLogReg');
const loginForm = document.querySelector('.login-form');
btnOpenLogReg.addEventListener("click", () => {
    loginForm.classList.toggle('showRegister-lg');
    if(loginForm.classList.contains('showRegister-lg')) {
        btnOpenLogReg.style = "top: 42px; right: -109px; border-radius: 0 50px 50px 0;";
        btnOpenLogReg.innerHTML = "<i class='fa fa-long-arrow-left' aria-hidden='true'></i> Sign In";
    } else {
        btnOpenLogReg.style = "top: 42px; right: 0; border-radius: 50px 0 0 50px;";
        btnOpenLogReg.innerHTML = "Sign Up <i class='fa fa-long-arrow-right' aria-hidden='true'></i>";
    }
})