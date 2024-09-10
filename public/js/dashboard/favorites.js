
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
