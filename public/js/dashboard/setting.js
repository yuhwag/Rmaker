
// setting - dark mode button
const btnDark = document.querySelector('.setting-container .setting-body .btn-mode');
btnDark.addEventListener('click', ()=>{
    btnDark.classList.toggle('on');
    document.querySelector('.dashboard-container').classList.toggle('dark');
    document.getElementById('setting-dark').submit();
})
