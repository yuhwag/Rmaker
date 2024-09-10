// expand - collapse navigation
const btnNav = document.querySelector('.exp-col-btn');
const sideNav = document.querySelector('.side-container');

const openCloseNav = () => {
    sideNav.classList.toggle('nav-expanded');
    sideNav.classList.toggle('nav-collapsed');
    btnNav.firstChild.classList.toggle('open');
    btnNav.firstChild.classList.toggle('close');
}
btnNav.addEventListener('click', openCloseNav);

// show - hide navigation
const showHideNav = () => {
    sideNav.classList.toggle('show');
}
const btnShowHideNav = document.querySelectorAll('.dashboard-container .btn-show-hide-nav');
btnShowHideNav[0].addEventListener('click', showHideNav);
btnShowHideNav[1].addEventListener('click', showHideNav);

// document - rename button 
const docInfo = document.querySelectorAll('.documents-container .doc-info');
docInfo.forEach(doc => {
    const docName = doc.querySelector('.doc-name');
    const btnEdit = doc.querySelector('.fa-pen');
    docName.addEventListener('click', (e) => {
        e.preventDefault();
    })
    btnEdit.addEventListener('click', () => {
        docName.focus();   
        document.getSelection().selectAllChildren(docName);
        document.getSelection().collapseToEnd()
    })
})

// document change resume/coverletter
const headtext = document.querySelectorAll('.documents-container .head-text');
headtext.forEach(item => {
    item.addEventListener('click', () => {
        let sectionname = item.className.split(' ')[0];
        let section = document.querySelector(`.${sectionname}-section`);

        document.querySelector('.head-text.active').classList.toggle('active');
        item.classList.toggle('active');

        document.querySelector('.doc-section:not(.d-none)').classList.toggle('d-none');
        section.classList.toggle('d-none');
    });
});


// profile - change color save button when input
const infoInput = document.querySelectorAll('.profile-container .inputs-info input');
const btnSave = document.querySelector('.profile-container .form-btns .btn-save');
const btnCancel = document.querySelector('.profile-container .form-btns .btn-cancel');
let inpValue = [];
// inpValue.push(document.querySelector('.user-avatar .image').style.backgroundImage);
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
        if(index > 0){
            inp.value = inpValue[index];
            btnSave.classList.toggle('input-changed');
        }
    })
})

// profile - change avatar
const avatarInput = document.querySelector('.avatar-input');
const avatarButton = document.querySelector('.avatar-buttons>.change-avatar');
avatarButton.addEventListener('click', () => {
    avatarInput.click();
});

// favorites - like/unlike template
const docLike = document.querySelectorAll('.favorites-container .liked-doc');
docLike.forEach(doc => {
    let btnLike = doc.querySelector('.liked');
    let formLike = doc.querySelector('.form-like');
    btnLike.addEventListener('click', ()=>{
        btnLike.classList.toggle('liked');
        setTimeout(() => {
            formLike.submit();
        }, 800);
    })
})

// setting - dark mode button
const btnDark = document.querySelector('.setting-container .setting-body .btn-mode');
btnDark.addEventListener('click', ()=>{
    btnDark.classList.toggle('on');
    document.querySelector('.dashboard-container').classList.toggle('dark');
})


// li items active
const navLis = document.querySelectorAll('.nav-li');
navLis.forEach(liEl => {
    liEl.addEventListener('click', () => {
        let containername = liEl.className.split(' ')[0];
        let container = document.querySelector(`.${containername}-container`);

        if(btnSave.classList.contains('input-changed')){
            let text = "You have changed your infomations.\nDo you want to save them?";
            if (confirm(text) == true) {
                btnSave.click();
            } else {
                btnCancel.click();
                
                document.querySelector('.li-active').classList.remove('li-active');
                liEl.classList.add('li-active');
        
                document.querySelector('.dashboard-content>.container:not(.d-none)').classList.add('d-none');
                container.classList.remove('d-none');
            }
        }
        else{
            document.querySelector('.li-active').classList.remove('li-active');
            liEl.classList.add('li-active');
    
            document.querySelector('.dashboard-content>.container:not(.d-none)').classList.add('d-none');
            container.classList.remove('d-none');
        }


    })
});

