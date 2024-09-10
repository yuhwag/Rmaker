const members = document.querySelectorAll('.members');
const btnPrevMem = document.querySelectorAll('.btn-prev-mem');
const btnNextMem = document.querySelectorAll('.btn-next-mem');

btnNextMem.forEach((btnN, index)=>{
    btnN.addEventListener('click', ()=>{
        members[index].classList.remove('active');
        members[index].classList.remove('in-l2r');
        members[index].classList.remove('in-r2l');
        if(index+1 >= members.length){
            members[0].classList.add('active');
            members[0].classList.add('in-r2l');
        } else{
            members[index+1].classList.add('active');
            members[index+1].classList.add('in-r2l');
        }
    });
})
btnPrevMem.forEach((btnP, index)=>{
    btnP.addEventListener('click', ()=>{
        members[index].classList.remove('active');
        members[index].classList.remove('in-l2r');
        members[index].classList.remove('in-r2l');
        if(index-1 < 0){
            members[members.length-1].classList.add('active');
            members[members.length-1].classList.add('in-l2r');
        } else{
            members[index-1].classList.add('active');
            members[index-1].classList.add('in-l2r');
        }
    });
})