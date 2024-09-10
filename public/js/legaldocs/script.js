const tabs = document.querySelectorAll('.menu-tabs');
const tos_page = document.querySelector('.tos-content');
const tos_tab = document.querySelector('.menu-tab-tos');
const pp_page = document.querySelector('.privacy-content');
const pp_tab = document.querySelector('.menu-tab-pp');
const tabActiveBg = document.querySelector('.tab-active-bg');

tos_tab.addEventListener('click', ()=>{
    pp_tab.classList.remove('tab-active');
    tos_tab.classList.add('tab-active');
    tabActiveBg.classList.remove('tab-1');
    tabActiveBg.classList.add('tab-0');
    tos_page.classList.remove('d-none');
    pp_page.classList.add('d-none');
})
pp_tab.addEventListener('click', ()=>{
    pp_tab.classList.add('tab-active');
    tos_tab.classList.remove('tab-active');
    tabActiveBg.classList.add('tab-1');
    tabActiveBg.classList.remove('tab-0');
    tos_page.classList.add('d-none');
    pp_page.classList.remove('d-none');    
})
