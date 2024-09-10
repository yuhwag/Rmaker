//// forms section
// move to previous/next input form page
// const formPages = document.querySelectorAll('.form-page');
// const stepTitles = document.querySelectorAll('.step-title');
// const stepNum = document.querySelector('#step-num');
// const btnPrevNext = document.querySelector('.btn-next-prev');
// const btnPrev = document.querySelector('.btn-prev');
// const btnNext = document.querySelector('.btn-next');

// btnPrev.addEventListener('click', prevInputPage);
// btnNext.addEventListener('click', nextInputPage);

// function removeAllFormActive(){
//     formPages.forEach(page => {
//         page.classList.remove('form-active');
//     })
//     stepTitles.forEach(title => {
//         title.classList.remove('form-active');
//     })
// }
// function prevInputPage() {
//     if(Number(btnPrevNext.dataset.pageIndex)>0){
//         btnPrevNext.dataset.pageIndex = Number(btnPrevNext.dataset.pageIndex) - 1;
//         removeAllFormActive();
//         formPages[btnPrevNext.dataset.pageIndex].classList.add('form-active');
//         stepTitles[btnPrevNext.dataset.pageIndex].classList.add('form-active');
//         stepNum.innerText = `${Number(btnPrevNext.dataset.pageIndex)+2}`;
//     }
// }
// function nextInputPage() {
//     if(Number(btnPrevNext.dataset.pageIndex)<formPages.length-1){
//         btnPrevNext.dataset.pageIndex = Number(btnPrevNext.dataset.pageIndex) + 1;
//         removeAllFormActive();
//         formPages[btnPrevNext.dataset.pageIndex].classList.add('form-active');
//         stepTitles[btnPrevNext.dataset.pageIndex].classList.add('form-active');
//         stepNum.innerText = `${Number(btnPrevNext.dataset.pageIndex)+2}`;
//     }
// }

// check save before leave page
// window.onbeforeunload = function(){
//     return 'Are you sure you want to leave?';
// };

//// preview section
// auto resize A4 page
const container_letter = document.querySelectorAll('.cover-letter');
const templ_review = document.querySelector('.template-preview');
const full_container_letter = document.querySelectorAll('.cover-letter-full-preview');
const full_templ_review = document.querySelector('.template-full-preview');

container_letter.forEach((covLetter, index) => {
    let resizeObserver = new ResizeObserver(() => { 
        let scale_template = templ_review.clientWidth/793;
        let justify_cent = (793 - templ_review.clientWidth)/2;
        let align_cent = (((1122 - (1122*scale_template))/2)*(index+index+1));
        covLetter.style = `transform: translate(-${justify_cent}px, -${align_cent}px) scale(${scale_template})`;
        templ_review.style = `height: ${(templ_review.clientWidth*1.414)*container_letter.length}px`;
    }); 
    resizeObserver.observe(templ_review);
})
full_container_letter.forEach((fcovLetter, index) => {
    let resizeObserver = new ResizeObserver(() => { 
        let scale_template = full_templ_review.clientWidth/793;
        let justify_cent = (793 - full_templ_review.clientWidth)/2;
        let align_cent = (((1122 - (1122*scale_template))/2)*(index+index+1));
        fcovLetter.style = `transform: translate(-${justify_cent}px, -${align_cent}px) scale(${scale_template})`;
        full_templ_review.style = `height: ${(full_templ_review.clientWidth*1.414+20)*full_container_letter.length}px`;
    }); 
    resizeObserver.observe(full_templ_review);
})

// show value of input to the preview A4 page
let valueInputs = {
    "company-name": "Maste Foods",
    "contact-address": "Nguyen Huu Tho, District 7, Ho Chi Minh City.",
    "contact-email": "example123@gmail.com",
    "contact-firstname": "Matthew",
    "contact-lastname": "Jones",
    "contact-phone": "(+84) 45698731",
    "greeting": "Dear",
    "job-title": "Account Administration Assistant",
    "recipient-firstname": "Jenkins",
    "recipient-lastname": "Hawk",
    "recipient-title-name": "Mrs.",
    "body-content": document.querySelectorAll('.body-content')[0].innerHTML,
};
function updateTemplate(inputObj, templateID){
    let templatesHTML = {
        "1719502811stockholm-cover-letter-templates.jpg":  `<div class="preview-letter-content container-fluid" style="height:1121px"><div class="cover_letter-header contact_info"><h3 class="contact-name mb-1" style="font-size: 1.6rem;"><span class="contact-firstname">${inputObj['contact-firstname']}</span> <span class="contact-lastname">${inputObj['contact-lastname']}</span></h3><p class="contact-job job-title" style="color: #7a7a7a; font-weight: 500;">${inputObj['job-title']}</p></div><div class="row cover-letter-body h-100">
                        <div class="col-8 h-100"><p class="my-2"><span class="greeting">${inputObj['greeting']}</span> <span class="recipient-title-name">${inputObj['recipient-title-name']}</span> <span class="recipient-firstname">${inputObj['recipient-firstname']}</span>,</p><div class="mb-3 body-content">${inputObj['body-content']}</div><i>Yours sincerely</i><p class="my-1 contact-name"><strong class="contact-firstname">${inputObj['contact-firstname']}</strong> <strong class="contact-lastname">${inputObj['contact-lastname']}</strong></p></div>
                        <div class="col-4"><div class="recipient_information my-2"><strong>To</strong><p class="my-1 company-name">${inputObj['company-name']}</p><p class="my-1 recipient-name"><span class="recipient-title-name">${inputObj['recipient-title-name']}</span> <span class="recipient-firstname">${inputObj['recipient-firstname']}</span> <span class="recipient-lastname">${inputObj['recipient-lastname']}</span></p></div><div class="contact_information my-4"><strong>From</strong><p class="my-1 contact-name"><span class="contact-firstname">${inputObj['contact-firstname']}</span> <span class="contact-lastname">${inputObj['contact-lastname']}</span></p><p class="my-1 job-title">${inputObj['job-title']}</p><p class="my-1 contact-address">${inputObj['contact-address']}</p><p class="my-1 contact-phone">${inputObj['contact-phone']}</p><p class="my-1"><a href="#" class="contact-email">${inputObj['contact-email']}</a></p></div></div></div></div>`,
        
        "1719502794new-york-cover-letter-templates.jpg":  `<div class="preview-letter-content container-fluid" style="height:1121px"><div class="row cover-letter-body h-100">
                        <div class="col-4 text-end pe-3" style="border-right: 1px solid #797979;"><div class="cover_letter-header contact_info mb-5"><h3 class="contact-name mb-1" style="font-size: 1.6rem;"><span class="contact-firstname">${inputObj['contact-firstname']}</span><br><span class="contact-lastname">${inputObj['contact-lastname']}</span></h3><p class="contact-job job-title" style="color: #7a7a7a; font-weight: 500;">${inputObj['job-title']}</p></div><div class="recipient_information my-2"><strong>To</strong><p class="my-1 recipient-name"><span class="recipient-title-name">${inputObj['recipient-title-name']}</span> <span class="recipient-firstname">${inputObj['recipient-firstname']}</span> <span class="recipient-lastname">${inputObj['recipient-lastname']}</span></p><p class="my-1 company-name">${inputObj['company-name']}</p></div><div class="contact_information my-4"><strong>From</strong><p class="my-1 contact-name"><span class="contact-firstname">${inputObj['contact-firstname']}</span> <span class="contact-lastname">${inputObj['contact-lastname']}</span></p><p class="my-1 job-title">${inputObj['job-title']}</p><p class="my-1 contact-address">${inputObj['contact-address']}</p><p class="my-1 contact-phone">${inputObj['contact-phone']}</p><p class="my-1"><a href="#" class="contact-email">${inputObj['contact-email']}</a></p></div></div>
                        <div class="col-8 h-100 ps-3"><div class="p-5 m-3"></div><p class="my-2"><span class="greeting">${inputObj['greeting']}</span> <span class="recipient-title-name">${inputObj['recipient-title-name']}</span> <span class="recipient-firstname">${inputObj['recipient-firstname']}</span>,</p><div class="mb-3 body-content">${inputObj['body-content']}</div><i>Yours sincerely</i><p class="my-1 contact-name"><strong class="contact-firstname">${inputObj['contact-firstname']}</strong> <strong class="contact-lastname">${inputObj['contact-lastname']}</strong></p></div></div></div>`,
        
        "1719502775berlin-cover-letter-templates.jpg":  `<div class="preview-letter-content container-fluid" style="height: 1000px;"><div class="cover_letter-header contact_info"><h3 class="contact-name mb-1" style="font-size: 2.2rem;"><span class="contact-firstname">${inputObj['contact-firstname']}</span><br><span class="contact-lastname">${inputObj['contact-lastname']}</span></h3><p class="contact-job job-title" style="color: #7a7a7a; font-weight: 500;">${inputObj['job-title']}</p></div><div class="row cover-letter-body h-100" style="border-top: 1px solid #797979;">
                        <div class="col-4 pt-2" style="border-right: 1px solid #797979;"><div class="recipient_information my-2"><strong>To</strong><p class="my-1 recipient-name"><span class="recipient-title-name">${inputObj['recipient-title-name']}</span> <span class="recipient-firstname">${inputObj['recipient-firstname']}</span> <span class="recipient-lastname">${inputObj['recipient-lastname']}</span></p><p class="my-1 company-name">${inputObj['company-name']}</p></div><div class="contact_information my-4"><strong>From</strong><p class="my-1 contact-name"><span class="contact-firstname">${inputObj['contact-firstname']}</span> <span class="contact-lastname">${inputObj['contact-lastname']}</span></p><p class="my-1 job-title">${inputObj['job-title']}</p><p class="my-1 contact-address">${inputObj['contact-address']}</p><p class="my-1 contact-phone">${inputObj['contact-phone']}</p><p class="my-1"><a href="#" class="contact-email">${inputObj['contact-email']}</a></p></div></div>
                        <div class="col-8 pt-2 ps-3 h-100"><p class="my-2"><span class="greeting">${inputObj['greeting']}</span> <span class="recipient-title-name">${inputObj['recipient-title-name']}</span> <span class="recipient-firstname">${inputObj['recipient-firstname']}</span>,</p><div class="mb-3 body-content">${inputObj['body-content']}</div><i>Yours sincerely</i><p class="my-1 contact-name"><strong class="contact-firstname">${inputObj['contact-firstname']}</strong> <strong class="contact-lastname">${inputObj['contact-lastname']}</strong></p></div></div></div>`,
        
        "1719502393template-1.png":  `<div class="preview-letter-content container-fluid p-0" style="height:1121px"><div class="row cover-letter-body h-100 m-0">
                        <div class="col-4 p-0" style="background: #373d48; color: #fff;"><div class="cover_letter-header contact_info p-4 pb-2"><h2 class="contact-name mb-1" style="font-size: 1.6rem;"><span class="contact-firstname">${inputObj['contact-firstname']}</span> <span class="contact-lastname">${inputObj['contact-lastname']}</span></h2><p class="contact-job job-title" style="color: #afafaf; font-weight: 500;">${inputObj['job-title']}</p></div><div class="mb-2 px-4 py-3" style="background: #252930;"><h5 class="m-0 p-0">Personal Info</h5></div><div class="contact_information my-3 px-4"><strong>Phone</strong><p class="mb-3 contact-phone">${inputObj['contact-phone']}</p><strong>Email</strong><p class="mb-3"><a href="#" class="contact-email">${inputObj['contact-email']}</a></p><strong>Address</strong><p class="mb-3 contact-address">${inputObj['contact-address']}</p></div></div>
                        <div class="col-8 h-100 p-4"><div class="recipient_information my-2 mb-4"><p class="my-1 recipient-name"><strong class="recipient-firstname">${inputObj['recipient-firstname']}</strong> <strong class="recipient-lastname">${inputObj['recipient-lastname']}</strong></p><p class="my-1 company-name">${inputObj['company-name']}</p></div><p class="my-2"><span class="greeting">${inputObj['greeting']}</span> <span class="recipient-title-name">${inputObj['recipient-title-name']}</span><span class="recipient-firstname">${inputObj['recipient-firstname']}</span>,</p><div class="mb-3 body-content">${inputObj['body-content']}</div><i>Kind regards</i><p class="my-1 contact-name"><strong class="contact-firstname">${inputObj['contact-firstname']}</strong> <strong class="contact-lastname">${inputObj['contact-lastname']}</strong></p></div></div></div>`,

        "1719502408template-2.png":  `<div class="preview-letter-content container-fluid h-auto"><div class="cover_letter-header contact_info"><h3 class="contact-name mb-1" style="font-size: 1.6rem;"><spanclass="contact-firstname">${inputObj['contact-firstname']}</span> <spanclass="contact-lastname">${inputObj['contact-lastname']}</span></h3><p class="contact-job job-title" style="color: #7a7a7a; font-weight: 500;">${inputObj['job-title']}</p></div><div class="row cover-letter-body h-100">
                        <div class="col-4"><div class="my-2" style="border-bottom: 1px solid #8f8f8f;"><h5><i class="fa fa-user me-2"></i> Personal Info</h5></div><div class="contact_information my-4"><strong>Phone</strong><p class="mb-3 contact-phone">${inputObj['contact-phone']}</p><strong>Email</strong><p class="mb-3"><a href="#"class="contact-email">${inputObj['contact-email']}</a></p><strong>Address</strong><p class="mb-3 contact-address">${inputObj['contact-address']}</p></div></div>
                        <div class="col-8 h-100"><div class="recipient_information my-2 mb-4"><p class="my-1 recipient-name"><strong class="recipient-firstname">${inputObj['recipient-firstname']}</strong> <strong class="recipient-lastname">${inputObj['recipient-lastname']}</strong></p><p class="my-1 company-name">${inputObj['company-name']}</p></div><p class="my-2"><span class="greeting">${inputObj['greeting']}</span> <spanclass="recipient-title-name">${inputObj['recipient-title-name']}</span><span class="recipient-firstname">${inputObj['recipient-firstname']}</span>,</p><div class="mb-3 body-content">${inputObj['body-content']}</div><i>Kind regards</i><p class="my-1 contact-name"><strong class="contact-firstname">${inputObj['contact-firstname']}</strong> <strong class="contact-lastname">${inputObj['contact-lastname']}</strong></p></div></div></div>`,

        "1719502423template-3.png":  `<div class="preview-letter-content container-fluid"><div class="cover_letter-header contact_info"><h3 class="contact-name mb-1" style="font-size: 1.6rem;"><span class="contact-firstname">${inputObj['contact-firstname']}</span> <span class="contact-lastname">${inputObj['contact-lastname']}</span></h3><p class="contact-job job-title" style="color: #7a7a7a; font-weight: 500;">${inputObj['job-title']}</p></div><div class="row cover-letter-body h-100">
                        <div class="col-8 h-100"><div class="recipient_information my-2 mb-4"><p class="my-1 recipient-name"><strong class="recipient-firstname">${inputObj['recipient-firstname']}</strong> <strong class="recipient-lastname">${inputObj['recipient-lastname']}</strong></p><p class="my-1 company-name">${inputObj['company-name']}</p></div><p class="my-2"><span class="greeting">${inputObj['greeting']}</span> <span class="recipient-title-name">${inputObj['recipient-title-name']}</span> <span class="recipient-firstname">${inputObj['recipient-firstname']}</span>,</p><div class="mb-3 body-content">${inputObj['body-content']}</div><i>Kind regards</i><p class="my-1 contact-name"><strong class="contact-firstname">${inputObj['contact-firstname']}</strong> <strong class="contact-lastname">${inputObj['contact-lastname']}</strong></p></div>
                        <div class="col-4"><div class="my-2" style="border-bottom: 1px solid #8f8f8f;"><h5><i class="fa fa-user me-2"></i> Personal Info</h5></div><div class="contact_information my-4"><strong>Phone</strong><p class="mb-3 contact-phone">${inputObj['contact-phone']}</p><strong>Email</strong><p class="mb-3"><a href="#" class="contact-email">${inputObj['contact-email']}</a></p><strong>Address</strong><p class="mb-3 contact-address">${inputObj['contact-address']}</p></div></div></div></div>`,
        
        "1719502440template-4.png":  `<div class="preview-letter-content container-fluid p-0" style="height:925px">
                        <div class="row m-0 p-0"><div class="col p-5 pb-3" style="background: #373d48; color: #fff; height: fit-content;"><div class="cover_letter-header contact_info"><h3 class="contact-name mb-1" style="font-size: 1.6rem;"><span class="contact-firstname">${inputObj['contact-firstname']}</span> <span class="contact-lastname">${inputObj['contact-lastname']}</span></h3><p class="contact-job job-title" style="color: #afafaf; font-weight: 500;">${inputObj['job-title']}</p></div><div class="contact_information"><p class="mb-1 p-0"><strong>Phone:</strong> <span class="contact-phone">${inputObj['contact-phone']}</span></p><p class="mb-1 p-0"><strong>Email:</strong> <span class=""><a href="#" class="contact-email">${inputObj['contact-email']}</a></span></p><p class="mb-1 p-0"><strong>Address:</strong> <span class="contact-address">${inputObj['contact-address']}</span></p></div></div></div>
                        <div class="row m-0 p-0 h-100"><div class="col h-100 p-5 pt-3"><div class="recipient_information mb-4"><p class="my-1 recipient-name"><strong class="recipient-firstname">${inputObj['recipient-firstname']}</strong> <strong class="recipient-lastname">${inputObj['recipient-lastname']}</strong></p><p class="my-1 company-name">${inputObj['company-name']}</p></div><p class="my-2"><span class="greeting">${inputObj['greeting']}</span> <span class="recipient-title-name">${inputObj['recipient-title-name']}</span><span class="recipient-firstname">${inputObj['recipient-firstname']}</span>,</p><div class="mb-3 body-content">${inputObj['body-content']}</div><i>Kind regards</i><p class="my-1 contact-name"><strong class="contact-firstname">${inputObj['contact-firstname']}</strong> <strong class="contact-lastname">${inputObj['contact-lastname']}</strong></p></div></div></div>`,

        "1719502457template-5.png":  `<div class="preview-letter-content container-fluid"><div class="cover_letter-header contact_info"><h3 class="contact-name mb-1" style="font-size: 1.6rem;"><span class="contact-firstname">${inputObj['contact-firstname']}</span> <span class="contact-lastname">${inputObj['contact-lastname']}</span></h3><p class="contact-job job-title" style="color: #7a7a7a; font-weight: 500;">${inputObj['job-title']}</p></div><div class="row cover-letter-body h-100">
                        <div class="col-4"><div class="my-2" style="border-bottom: 1px solid #8f8f8f;"><h5>Personal Info</h5></div><div class="contact_information my-4"><strong>Phone</strong><p class="mb-3 contact-phone">${inputObj['contact-phone']}</p><strong>Email</strong><p class="mb-3"><a href="#"class="contact-email">${inputObj['contact-email']}</a></p><strong>Address</strong><p class="mb-3 contact-address">${inputObj['contact-address']}</p></div></div>
                        <div class="col-8 h-100"><div class="recipient_information my-2 mb-4"><p class="my-1 recipient-name"><strong class="recipient-firstname">${inputObj['recipient-firstname']}</strong> <strong class="recipient-lastname">${inputObj['recipient-lastname']}</strong></p><p class="my-1 company-name">${inputObj['company-name']}</p></div><p class="my-2"><span class="greeting">${inputObj['greeting']}</span> <spanclass="recipient-title-name">${inputObj['recipient-title-name']}</span><span class="recipient-firstname">${inputObj['recipient-firstname']}</span>,</p><div class="mb-3 body-content">${inputObj['body-content']}</div><i>Kind regards</i><p class="my-1 contact-name"><strong class="contact-firstname">${inputObj['contact-firstname']}</strong> <strong class="contact-lastname">${inputObj['contact-lastname']}</strong></p></div></div></div>`,

    };
    container_letter[0].innerHTML = templatesHTML[templateID];
    full_container_letter[0].innerHTML = templatesHTML[templateID];
}
function uppercaseFirstLetter(str) {
    str = str.split(" ");
    for (var i=0; i<str.length; i++) {
        str[i] = str[i].charAt(0).toUpperCase() + str[i].substr(1);
    }
    return str.join(" ");
}
const inputFields = document.querySelectorAll('input');
inputFields.forEach((input, index) => { 
    if(input.value != ''){
        valueInputs[`${input.id}`] = input.value;
        valueInputs[`body-content`] = document.querySelector('#doc-body').value;
        updateTemplate(valueInputs, document.querySelector('.template-choosed').id);
        // if(input.id = 'doc-body'){
            setTimeout(() => {
                document.querySelector('#editor-container').firstChild.innerHTML = document.querySelector('#doc-body').value;
            }, 100);
        // }
    }
})
inputFields.forEach((input, index) => { // show input/information of cover letter
    if(index === 0) {
        return;
    }
    const valInputFields = document.querySelectorAll(`.${input.id}`);
    if(input.id != ''){
        input.onkeyup = ()=>{
            if(input.id.includes("name") || input.id.includes("job-title")){
                input.value = uppercaseFirstLetter(input.value);
            }
            valInputFields.forEach((valIn) => {
                valIn.innerHTML = input.value;
            })
            valueInputs[`${input.id}`] = input.value;
            updateTemplate(valueInputs, document.querySelector('.template-choosed').id);
        }
    }
})
const editorCont = document.querySelector('#editor-container');
const bodyContent = document.querySelectorAll('.body-content');
const exampleBody = bodyContent[0].innerHTML;
editorCont.onkeyup = ()=>{ // show body of cover letter
    valueInputs[`body-content`] = editorCont.firstChild.innerHTML;
    document.querySelector('#doc-body').value = editorCont.firstChild.innerHTML;
    updateTemplate(valueInputs, document.querySelector('.template-choosed').id);
}

// Add new page when the content overflows the page
// function checkOverflow() {
//     const pages = document.querySelectorAll('.page');
//     const templ_preview = document.querySelector('.template-preview');
//     pages.forEach((page, index) => {
//         const content = page.querySelector('.body-content');
//         if (content.scrollHeight > page.clientHeight) {
//             if (index === pages.length - 1) {
//                 // Create a new page
//                 const newPage = document.createElement('div');
//                 newPage.className = 'cover-letter page';
//                 newPage.innerHTML =`<div class="preview-letter-content container-fluid p-0">
//                                         <div class="row cover-letter-body">
//                                             <div class="col-8">
//                                                 <div class="body-content">This is new page</div>
//                                             </div>
//                                             <div class="col-4"></div>
//                                         </div>
//                                     </div>`;
//                 let scale_template = templ_review.clientWidth/793;
//                 let justify_cent = (793 - templ_review.clientWidth)/2;
//                 let align_cent = (((1122 - (1122*scale_template))/2)*(index+index+1));
//                 newPage.style = `transform: translate(-${justify_cent}px, -${align_cent}px) scale(${scale_template})`;
//                 templ_review.style = `height: ${(templ_review.clientWidth*1.414+20)*container_letter.length}px`;
//                 templ_review.appendChild(newPage);
//             }
//         }
//     });
// }
// window.addEventListener('load', checkOverflow);

//// Full preview section
// open/close full preview mode
const fullPreview = document.querySelector('.full-preview-container').classList;
document.querySelector('.btn-full-preview-container').addEventListener('click', ()=>{
    fullPreview.toggle('form-active');
    document.querySelector('.template-choosed').scrollIntoView({ behavior: "smooth"});
});
document.querySelector('.btn-close-full-preview').addEventListener('click', ()=>{
    fullPreview.toggle('form-active');
});
document.querySelector('.btn-preview').addEventListener('click', ()=>{
    fullPreview.toggle('form-active');
});

// open/close choose templates
const chTemplContainer = document.querySelector('.letter-templates-container');
document.querySelector('.btn-templates').addEventListener('click', ()=>{ //open/close
    chTemplContainer.classList.toggle('form-active');
    scrollToChoosedTemp();
});
document.querySelector('.btn-close-temps').addEventListener('click', ()=>{ //close
    chTemplContainer.classList.toggle('form-active');
});

// choose templates
const templates = document.querySelectorAll('.templates');
function resetTemplateChoose(){
    templates.forEach((temp, index) => {
        temp.classList.remove('template-choosed');
    })
}
templates.forEach((temp, index) => {
    temp.addEventListener('click', () => {
        resetTemplateChoose();
        temp.classList.add('template-choosed');
        updateTemplate(valueInputs, temp.id);
        document.getElementById('img_template').value = temp.id;
        if(window.innerWidth<768){
            chTemplContainer.scroll({
                left: 142*index,
                behavior: "smooth",
            })
        }
    })
})

// responsive choose template section
const letterTemplate = document.querySelector('.letter-templates');
let resizeChooseTemplate = new ResizeObserver(() => { 
    if(window.innerWidth<768){
        let marSize = (chTemplContainer.clientWidth - 142)/2;
        letterTemplate.style = `margin: 0 ${marSize}px`;
    } else{
        letterTemplate.style = '';
    }
}); 
resizeChooseTemplate.observe(chTemplContainer);

// auto scroll to choosed template
function scrollToChoosedTemp(){
    setTimeout(()=>{
        templates.forEach((temp, index) => {
            if(window.innerWidth<768 && temp.classList.contains('template-choosed')){
                chTemplContainer.scroll({
                    left: 142*index,
                    behavior: "smooth",
                })
            }
        })
    },100);
}

// Convert and download template to PDF
function convertToPDF() {
    const letterDownload = document.getElementById(`cover-letter-content`).firstChild;
    var opt = {
        filename:     `${valueInputs['contact-firstname']}${valueInputs['contact-lastname'].split(" ").join("")}-CoverLetter.pdf`,
        jsPDF:        { format: 'a4' }
    };
    html2pdf().set(opt).from(letterDownload).save();

    // var element = document.getElementById('cover-letter-content').firstChild;
    // var opt = {
    //     margin:       1,
    //     filename:     `${valueInputs['contact-firstname']}${valueInputs['contact-lastname'].split(" ").join("")}-CoverLetter.pdf`,
    //     image:        { type: 'jpeg', quality: 0.98 },
    //     html2canvas:  { scale: 2 },
    //     jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
    // };

    // // New Promise-based usage:
    // html2pdf().set(opt).from(element).save();

    // // Old monolithic-style usage:
    // html2pdf(element, opt);
} 

//// Pre-written
// random give hint for add pre-written
const hints = [
    "Explore our pre-written templates for a quicker and more efficient writing experience.",
    "Effortlessly draft your document with our pre-written sections. We've got your back!",
    "Explore our library of pre-written text to help you get started effortlessly.",
    "Save time and boost your productivity with our pre-written text options.",
    "Choose from our pre-written text library to kickstart your writing.",
    "Effortlessly create content using our pre-written sections for added convenience.",
    "Enhance your message with pre-written text from our carefully crafted library."
]
document.querySelector('.hint-text').innerText = hints[Math.floor(Math.random() * (hints.length))];
// show pre-written options
const toggleOptions = document.querySelector('.btn-add-pre-write');
const closeOptions = document.querySelector('.close-pre-written');
const optionsCtn = document.querySelector('.pre-written-section');
toggleOptions.addEventListener('click', () => {optionsCtn.classList.toggle('form-active')});
closeOptions.addEventListener('click', () => {optionsCtn.classList.remove('form-active')});

// add pre-written text in body part
let opPrewritten = {
    'op-experienced': "<p>As an accomplished professional in the field of <strong>[Your Current Occupation]</strong> with <strong>[X years]</strong> of hands-on experience, I was captivated by your job posting for the <strong>[Job Title]</strong> position at <strong>[New Company]</strong>. The moment I read the description, I recognized that my unique skill set and qualifications perfectly align with your company's needs. I am eager to contribute immediately and exceed your expectations in this role.</p><p>During my tenure at my previous role as a <strong>[Current Occupation]</strong>, I honed my expertise in <strong>[Professional Skill 1]</strong>, <strong>[Professional Skill 2]</strong>, and <strong>[Professional Skill 3]</strong>. Throughout this journey, I consistently stood out, thanks to my innate strengths in <strong>[Personal Strength 1]</strong> and <strong>[Personal Strength 2]</strong>. My educational background includes a degree in <strong>[Your Studies]</strong> from <strong>[University]</strong>, which has not only deepened my knowledge but also cultivated a strong foundation for becoming a <strong>[Personal Strength 3]</strong> professional.</p><p>I am determined to leverage these skills as a <strong>[Job Title]</strong> while also eagerly embracing opportunities for growth and expansion within the realm of <strong>[Professional Field]</strong>.</p><p>Please contact me to schedule a meeting or request further information and references from my past employers.</p><p>Thank you for considering my application. I look forward to the opportunity to contribute my expertise to <strong>[New Company]</strong> and help drive its continued success.</p>",
    'op-re-graduate': "<p>I am writing in response to your job advertisement for the <strong>[Job Title]</strong> position. Recently, I graduated with a degree in <strong>[Your Studies]</strong> from <strong>[University]</strong>, and I am enthusiastic about launching my career in <strong>[Professional Field]</strong>. I am seeking an entry-level position that will allow me to apply the skills and knowledge I acquired during my studies and contribute to <strong>[New Company]</strong>'s mission.</p><p>As a student, I had the privilege of gaining exposure to various aspects of <strong>[Professional Field]</strong>, working collaboratively within interdisciplinary teams on challenging projects. My involvement in <strong>[Extracurricular Activity]</strong> allowed me to develop expertise in <strong>[Professional Skill 1]</strong> and <strong>[Professional Skill 2]</strong>, while also enhancing my <strong>[Professional Skill 3]</strong> capabilities. These experiences further fueled my passion and enthusiasm for <strong>[Professional Field]</strong>, and I am eager to apply what I've learned.</p><p>My inherently <strong>[Personal Strength 3]</strong> nature, coupled with my dedication and eagerness to learn, make me well-suited for the <strong>[Job Title]</strong> position at <strong>[New Company]</strong>. I am excited about the prospect of contributing to your organization's mission, especially <strong>[New Company's Mission]</strong>.</p><p>Please feel free to contact me via phone or email to schedule an interview. I'm excited about the chance to discuss how my skills align with <strong>[New Company]</strong>'s goals and potentially join your team to contribute to its success.</p>",
    'op-student': "<p>I am writing to express my strong interest in the<strong> [Job Title]</strong> position at <strong>[New Company]</strong>. As a student majoring in <strong>[Your Studies]</strong> at<strong> [University]</strong>, I am eager to apply my passion for <strong>[Professional Skill 1]</strong> and my growing expertise in<strong> [Professional Skill 2]</strong> and <strong>[Professional Skill 3]</strong> to contribute to your team.</p><p>During my studies, I actively participated in extracurricular activities, such as <strong>[Extracurricular Activity 1]</strong> and <strong>[Extracurricular Activity 2]</strong>, where I demonstrated my <strong>[Personal Strength 1]</strong> and <strong>[Personal Strength 2]</strong> mindset. My academic record reflects my commitment to excellence, including courses and projects that have developed my <strong>[Personal Strength 3]</strong>.</p><p>I am excited about the opportunity to join <strong>[New Company]</strong> and align with its values, including <strong>[Company Value 1]</strong> and <strong>[Company Value 2]</strong>. I am a dedicated and diligent student, eager to learn from talented colleagues and make a meaningful impact.</p><p>Please feel free to contact me via phone or email to arrange a convenient meeting time. If you require further information or recommendations from my professors, don't hesitate to reach out.</p><p>Thank you for considering my application. I look forward to the possibility of contributing to <strong>[New Company]</strong>'s success.</p>",
    'op-internship': "<p>I am writing to express my strong interest in the <strong>[Internship Position]</strong> at <strong>[New Company]</strong>. Upon discovering the job posting, I was thrilled to find that my academic achievements align perfectly with the requirements. I am currently seeking a challenging internship that allows me to apply my knowledge gained through my studies at <strong>[University]</strong> in <strong>[Studies Program]</strong>. This opportunity particularly appeals to me due to its alignment with my passion for <strong>[Professional Field]</strong> and its promise of both challenges and rewards.</p><p>As a student, I have honed my skills in <strong>[Professional Skill 1]</strong>, <strong>[Professional Skill 2]</strong>, and <strong>[Professional Skill 3]</strong>, which directly relate to the internship's requirements. While I may lack professional experience, I compensate with a strong <strong>[Personal Strength 1]</strong>, <strong>[Personal Strength 2]</strong>, and <strong>[Personal Strength 3]</strong> professional mindset.</p><p>I am eager to bring my fresh perspective and enthusiasm for learning to contribute to<strong> [New Company]</strong>'s objectives. I deeply admire your organization's values, including <strong>[Company Value 1]</strong> and <strong>[Company Value 2]</strong>, and I am genuinely passionate about your mission to <strong>[New Company Mission]</strong>.</p><p>I'd appreciate the chance to interview with you. Please contact me to schedule a meeting at your earliest convenience. Feel free to reach out for questions or more information</p><p>Thank you for considering my application.</p>",
    'op-career-change': "<p>I am writing to express my keen interest in the <strong>[Job Title]</strong> position at <strong>[New Company]</strong>. With <strong>[X years]</strong> of experience as a <strong>[Current Occupation]</strong>, I am excited to make a career transition into <strong>[Job Title]</strong>. I am confident that the skills and knowledge acquired in my previous career will seamlessly translate into this new role, enabling me to contribute effectively from day one.</p><p>While my past roles were centered around <strong>[Professional Field]</strong>, I have gained significant experience relevant to <strong>[Job Title]</strong>, including proficiency in <strong>[Professional Skill 1]</strong>, <strong>[Professional Skill 2]</strong>, and <strong>[Professional Skill 3]</strong>. My innate<strong> [Personal Strength 1]</strong> and <strong>[Personal Strength 2]</strong> disposition has consistently enabled me to excel in team environments, surpassing expectations at my previous job. My distinctive <strong>[Personal Strength 3]</strong> approach played a pivotal role in achieving <strong>[Achievement 1]</strong> and <strong>[Achievement 2]</strong>.</p><p>I believe my comprehensive background in <strong>[Professional Field]</strong> brings a unique perspective to your team. I am a quick learner, eager to transition seamlessly into the role of <strong>[Job Title]</strong>. I welcome the opportunity for a personal interview to showcase my suitability for this new career path. Please reach out to arrange a convenient meeting time. If you have any inquiries or require references from my past employers, do not hesitate to contact me.</p><p>Thank you for your time and consideration.</p>"
}
const optionsCL = document.querySelectorAll('.options-cl');
const optCheck = document.querySelectorAll('.option-check');
optionsCL.forEach((opt, index) => {
    opt.addEventListener('click', ()=>{
        if(editorCont.firstChild.innerHTML != opPrewritten[`${opt.id}`]){
            editorCont.firstChild.innerHTML = opPrewritten[`${opt.id}`];
            valueInputs['body-content'] = opPrewritten[`${opt.id}`];
            updateTemplate(valueInputs, document.querySelector('.template-choosed').id);
            resetIcons();
            optCheck[index].classList.replace('fa-plus-circle','fa-check-circle');
        } else {
            editorCont.firstChild.innerHTML = '<p><br></p>';
            valueInputs['body-content'] = exampleBody;
            updateTemplate(valueInputs, document.querySelector('.template-choosed').id);
            resetIcons();
        }
    })
})
function resetIcons() {
    optCheck.forEach((optC) => {
        optC.className = "option-check fa fa-plus-circle";
    })
}


// save document
// const btnSave = document.querySelector('.forms-section .btn-save>p');
// const saveForm = document.querySelector('.forms-section');
// btnSave.addEventListener('click', () => {
//     saveForm.submit();
// })