// play video
const playVd = document.querySelector('.vd-img');
const introVd = document.getElementById('intro-video');

playVd.addEventListener('click', playPauseVideo);
function playPauseVideo() {
    introVd.play();
    playVd.classList.toggle('d-none');
}

// open - close video
const openVD = document.querySelector('.btn-watchVd');
const closeVD = document.querySelector('.close-vd');
const video = document.querySelector('.video');
openVD.addEventListener('click', ()=>{
    video.classList.toggle('d-none');
})
closeVD.addEventListener('click', ()=>{
    // playVd.classList.toggle('d-none');
    video.classList.toggle('d-none');
    introVd.pause();
})

// reason section
let rea = document.querySelectorAll('.reason');
let reaImg = document.querySelectorAll('.reas-img');
let removeActiveAll = () => {
    rea.forEach((rItem) => {
            rItem.classList.remove('w-active');
    });
    reaImg.forEach((rimg) => {
            rimg.classList.remove('w-pic-active');
    });
}

let interval;
let activeInterval = (index) => {
    clearInterval(interval);
    let i = index;
    if(i>4){i=0}
    interval = setInterval(() => {
        removeActiveAll();
        rea[i].classList.toggle('w-active');
        reaImg[i].classList.toggle('w-pic-active');
        i += 1;
        if(i>4){
            i=0;
        }
    }, 10000);
}
activeInterval(1);

rea.forEach((r, index) => {
    r.addEventListener('click', ()=>{
        removeActiveAll();
        r.classList.toggle('w-active');
        reaImg[index].classList.toggle('w-pic-active');
        activeInterval(index+1);
    });
});

// how section
let howSection = ()=>{
    let slidedots = document.querySelector('.how-section .slide-dots');
    let dots = slidedots.querySelectorAll('.dot');
    let chooseddot = slidedots.querySelector('.dot-choosed');
    let steps = document.querySelectorAll('.how-main-content .row');

    let i = 0;
    setInterval(()=>{
        if(i>4){i=0}
        if(i===0){
            chooseddot.style = ``;
        }
        else {
            chooseddot.style = `width: 40px; left: ${(i*30)-30}px`;
        }
        document.querySelector('.show-step').classList.remove('show-step');
        steps[i].classList.add('show-step');
        i++;
    },10000);


    dots.forEach((dot,index) => {
        dot.addEventListener('click', ()=>{
            if(index === 0){
                chooseddot.style = ``;
            }
            else{
                chooseddot.style = `width: 40px; left: ${dot.offsetLeft-40}px`;
            }
            document.querySelector('.show-step').classList.remove('show-step');
            steps[index].classList.add('show-step');
            i = index;
        });
    });
}
howSection();