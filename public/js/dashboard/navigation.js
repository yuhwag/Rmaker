// expand - collapse navigation
const btnNav = document.querySelector('.exp-col-btn');
const sideNav = document.querySelector('.side-container');

if(sessionStorage.getItem('nav') && sessionStorage.getItem('btnNav')){
    sideNav.className = sessionStorage.getItem('nav');
    btnNav.firstChild.className = sessionStorage.getItem('btnNav');
}

const openCloseNav = () => {
    sideNav.classList.toggle('nav-expanded');
    sideNav.classList.toggle('nav-collapsed');
    btnNav.firstChild.classList.toggle('open');
    btnNav.firstChild.classList.toggle('close');


    sessionStorage.setItem("nav", sideNav.className);
    sessionStorage.setItem("btnNav", btnNav.firstChild.className);
}
btnNav.addEventListener('click', openCloseNav);

// show - hide navigation
const showHideNav = () => {
    sideNav.classList.toggle('show');
}
const btnShowHideNav = document.querySelectorAll('.dashboard-container .btn-show-hide-nav');
btnShowHideNav[0].addEventListener('click', showHideNav);
btnShowHideNav[1].addEventListener('click', showHideNav);


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

