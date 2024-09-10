const footer_col_title = document.querySelectorAll('.footer__col-title');
const col_links = document.querySelectorAll('.col-links');
const removeAllColHeigth100 = () => {
    col_links.forEach((item)=>{
        item.classList.remove('h-100');
    })
}
footer_col_title.forEach((item, index)=>{
    item.addEventListener('click', () => {
        if(!col_links[index].classList.contains('h-100')){
            removeAllColHeigth100();
            col_links[index].classList.add('h-100');
        } else{
            removeAllColHeigth100();
        }
    })
})