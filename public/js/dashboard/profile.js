
// profile - change color save button when input
const infoInput = document.querySelectorAll('.profile-container .inputs-info input');
const btnSave = document.querySelector('.profile-container .form-btns .btn-save');
const btnCancel = document.querySelector('.profile-container .form-btns .btn-cancel');

let inpValue = [];
inpValue.push(document.querySelector('.user-avatar .image').style.backgroundImage);
infoInput.forEach(inp => {
    inpValue.push(inp.value);
    inp.addEventListener('keydown', () => {
        if(!btnSave.classList.contains('input-changed')){
            btnSave.classList.toggle('input-changed');
        }
    })
})
btnCancel.addEventListener('click', () => {
    document.querySelector('.user-avatar .image').style.backgroundImage = inpValue[0];
    infoInput.forEach((inp, index) => {
        inp.value = inpValue[index+1];
        imgInput.value = "";
        btnSave.classList.remove('input-changed');
    })
})

// profile - change avatar
const avatarInput = document.querySelector('.avatar-input');
const avatarButton = document.querySelector('.avatar-buttons>.change-avatar');
const avatarButtonDel = document.querySelector('.avatar-buttons>.delete-avatar');
const imgInput = document.querySelector('.avatar-input');
const imgAvatar = document.querySelector('.user-avatar .image');
avatarButton.addEventListener('click', () => {
    avatarInput.click();
});
//// show avatar
imgInput.addEventListener('change', () => {
    if(!btnSave.classList.contains('input-changed')){
        btnSave.classList.toggle('input-changed');
    }
    if (imgInput.files && imgInput.files[0]) {
        const reader = new FileReader();
        reader.onload = (e) => {
            imgAvatar.style = `background: url(${e.target.result}) center / cover;`;
        }
        reader.readAsDataURL(imgInput.files[0]);
    }
})