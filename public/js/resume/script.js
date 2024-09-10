console.log('hello');
//// inputs
// title
const formHeaders = document.querySelectorAll('.form-page > .form-header');
formHeaders.forEach(fh => {
    const title = fh.querySelector('.title');
    const btnEdit = fh.querySelector('.fa-pencil-square-o');
    title.addEventListener('click', (e) => {
        e.preventDefault();
    })
    btnEdit.addEventListener('click', () => {
        title.focus();   
        document.getSelection().selectAllChildren(title);
        document.getSelection().collapseToEnd()
    })
})

// list skill
// const listSkill = document.querySelectorAll('.list-skill > li');
// listSkill.forEach(lk => {
//     const skillTag = lk.querySelector('.skill-tag');
//     const btnEdit = lk.querySelector('.fa-pencil-square-o');
//     skillTag.addEventListener('click', (e) => {
//         e.preventDefault();
//     })
//     btnEdit.addEventListener('click', () => {
//         skillTag.focus();   
//         document.getSelection().selectAllChildren(skillTag);
//         document.getSelection().collapseToEnd()
//     })
// })


//// preview section
// auto resize A4 page
const container_resume = document.querySelectorAll('.resume');
const templ_review = document.querySelector('.template-preview');
const full_container_resume = document.querySelectorAll('.resume-full-preview');
const full_templ_review = document.querySelector('.template-full-preview');

container_resume.forEach((resume, index) => {
    let resizeObserver = new ResizeObserver(() => { 
        let scale_template = templ_review.clientWidth/793;
        let justify_cent = (793 - templ_review.clientWidth)/2;
        let align_cent = (((1122 - (1122*scale_template))/2)*(index+index+1));
        resume.style = `transform: translate(-${justify_cent}px, -${align_cent}px) scale(${scale_template})`;
        templ_review.style = `height: ${(templ_review.clientWidth*1.414)*container_resume.length}px`;
    }); 
    resizeObserver.observe(templ_review);
})
full_container_resume.forEach((fresume, index) => {
    let resizeObserver = new ResizeObserver(() => { 
        let scale_template = full_templ_review.clientWidth/793;
        let justify_cent = (793 - full_templ_review.clientWidth)/2;
        let align_cent = (((1122 - (1122*scale_template))/2)*(index+index+1));
        fresume.style = `transform: translate(-${justify_cent}px, -${align_cent}px) scale(${scale_template})`;
        full_templ_review.style = `height: ${(full_templ_review.clientWidth*1.414+20)*full_container_resume.length}px`;
    }); 
    resizeObserver.observe(full_templ_review);
})

// show profile photo of the user
const imgInput = document.querySelector('#profile-photo');
const imgEl = document.querySelector('.preview-photo');
const imgResumeEl = document.querySelector('.preview-resume-photo');
imgInput.addEventListener('change', () => {
    if (imgInput.files && imgInput.files[0]) {
        const reader = new FileReader();
        reader.onload = (e) => {
            imgEl.src = e.target.result;
            imgResumeEl.style = `background: url(${e.target.result}) center / cover;`;
        }
        reader.readAsDataURL(imgInput.files[0]);
    }
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
    "body-content": "",
};
function updateTemplate(inputObj, templateID){
    let templatesHTML = {
        "1719507715template-cv-1.jpg":  ` <div class="preview-resume-content container-fluid p-0" style="height:1121px"><div class="row resume-body h-100 m-0"><div class="col-4 p-0" style="background: #373d48; color: #fff;"><div class="photo-container d-flex justify-content-center align-items-center"><div class="preview-resume-photo" style="background: url() center / cover;"></div>
<style>.preview-resume-photo{width: 160px;height: 160px;margin: 40px 0 20px 0;border-radius: 50%;}</style></div><div class="side-informations ps-5"><div class="info-section mb-3"><div class="mb-2 py-2" style="border-bottom: 2px solid #fff;">
<h4 class="section-title m-0 p-0">Contact</h4></div><div class="contact-information my-3 pe-4"><strong>Phone</strong><p class="mb-3 contact-phone">(+84) 45698731</p><strong>Email</strong><p class="mb-3 contact-email">example123@gmail.com</p><strong>Address</strong><p class="mb-3 contact-address">District 7, HCM City.</p></div></div>
<div class="info-section mb-3"><div class="mb-2 py-2" style="border-bottom: 2px solid #fff;"><h4 class="section-title m-0 p-0">Education</h4></div><div class="edu-information my-3 pe-4"><ul class="list-edu-info" style="list-style: none; padding: 0;"><li><p class=" m-0 edu-year">2008</p><strong class="job-position">Enter Your Degree</strong><p class="uni-name">University/College</p></li><li><p class=" m-0 edu-year">2008</p><strong class="job-position">Enter Your Degree</strong><p class="uni-name">University/College</p></li></ul></div></div><div class="info-section mb-3"><div class="mb-2 py-2" style="border-bottom: 2px solid #fff;"><h4 class="section-title m-0 p-0">Expertise</h4></div><div class="expertise-information my-3 pe-4">
<ul class="list-expertises-info" style="padding-left: 20px;"><li>UI/UX</li><li>Visual Design</li><li>Wireframes</li><li>Storyboards</li><li>User Flows</li><li>Process Flows</li></ul></div></div><div class="info-section mb-3"><div class="mb-2 py-2" style="border-bottom: 2px solid #fff;"><h4 class="section-title m-0 p-0">Language</h4>
</div>
<div class="lang-information my-3 pe-4"><p class="mb-1"><strong>English</strong></p><p class="mb-1"><strong>Spanish</strong></p></div></div></div></div><div class="col-8 h-100 p-4"><div class="resume-header pt-4 pb-2">
<h1 class="contact-name mb-1" style="font-size: 2.3rem; color: #373d48;"><span class="contact-firstname" style="font-weight: 700;">Matthew</span> <span class="contact-lastname">Jones</span></h1>
<p class="contact-job job-title mb-2" style="color: #373d48; font-size: 1.2rem; font-weight: 400; letter-spacing: 2px">Account Administration Assistant</p>
<p class="intro-summary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, vel odio. Cupiditate blanditiis ratione ipsam expedita quisquam nam. Quasi dicta hic nisi esse autem accusamus suscipit. Nam numquam tempora eum!</p>
</div>
<div class="res-body" style="color: #373d48;"><div class="info-section mb-3"><div class="mb-2 py-2" style="border-bottom: 2px solid #373d48;"><h4 class="section-title m-0 p-0">Experience</h4>
</div>
<div class="exp-information my-3 pe-4">
<ul class="list-exp-info" style="list-style-type: circle;padding-left: 20px;">
<li>
<div class="exp-description position-relative">
<strong class=" m-0"><span class="exp-start-year">2019</span> - <span class="exp-stop-year">2022</span></strong>
<p class="mb-0"><span class="exp-company-name">Company Name</span> | <span class="company-address">123 Anywhere St., Any City</span></p>
<strong class="job-position mb-0" style="font-size: 1.1rem;">Job position here</strong>
<p class="position-description mb-4 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet sit molestias consectetur deleniti quisquam, eum, necessitatibus hic distinctio eaque debitis quam incidunt nihil quod dolore facilis optio ipsa. Necessitatibus.</p><div class="process-line position-absolute" style="background-color:#373d48; width:2px; height: calc(100% - 5px); top: 15px; left: -15px;"></div></div></li><li><div class="exp-description position-relative">
<strong class=" m-0"><span class="exp-start-year">2017</span> - <span class="exp-stop-year">2019</span></strong>
<p class="mb-0"><span class="exp-company-name">Company Name</span> | <span class="company-address">123 Anywhere St., Any City</span></p>
<strong class="job-position mb-0" style="font-size: 1.1rem;">Job position here</strong>
<p class="position-description mb-4 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet sit molestias consectetur deleniti quisquam, eum, necessitatibus hic distinctio eaque debitis quam incidunt nihil quod dolore facilis optio ipsa. Necessitatibus.</p>
<div class="process-line position-absolute" style="background-color:#373d48; width:2px; height: calc(100% - 5px); top: 15px; left: -15px;"></div></div></li><li><div class="exp-description position-relative">
<strong class=" m-0"><span class="exp-start-year">2015</span> - <span class="exp-stop-year">2017</span></strong>
<p class="mb-0"><span class="exp-company-name">Company Name</span> | <span class="company-address">123 Anywhere St., Any City</span></p>
<strong class="job-position mb-0" style="font-size: 1.1rem;">Job position here</strong>
<p class="position-description mb-4 d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet sit molestias consectetur deleniti quisquam, eum, necessitatibus hic distinctio eaque debitis quam incidunt nihil quod dolore facilis optio ipsa. Necessitatibus.</p>
<div class="process-line position-absolute" style="background-color:#373d48; width:2px; height: calc(100% - 5px); top: 15px; left: -15px;"></div></div></li></ul></div></div>
<div class="info-section mb-3">
<div class="mb-2 py-2" style="border-bottom: 2px solid #373d48;">
<h4 class="section-title m-0 p-0">Reference</h4>
</div>
<div class="reference-information my-3">
<ul class="list-ref-info d-flex flex-wrap justify-content-between" style="list-style: none; padding: 0;">
<li>
<div class="ref-detail pe-2" style="width: 225px;">
<p class="m-0 contact-name"><strong class="contact-firstname">Name</strong> <strong class="contact-lastname">Surname</strong></p>
<p class="m-0"><span class="ref-position">Job position</span>, <span class="ref-company-name">Company Name</span></p>
<p class="ref-contact m-0"><strong>Phone:</strong> <span class="ref-contact-phone">123456789</span></p>
<p class="ref-contact m-0"><strong>Email:</strong> <span class="ref-contact-email">hello@gmail.com</span></p></div></li><li>
<div class="ref-detail pe-2" style="width: 225px;">
<p class="m-0 contact-name"><strong class="contact-firstname">Name</strong> <strong class="contact-lastname">Surname</strong></p>
<p class="m-0"><span class="ref-position">Job position</span>, <span class="ref-company-name">Company Name</span></p>
<p class="ref-contact m-0"><strong>Phone:</strong> <span class="ref-contact-phone">123456789</span></p><p class="ref-contact m-0"><strong>Email:</strong> <span class="ref-contact-email">hello@gmail.com</span></p></div></li></ul></div></div></div></div></div></div> `,
        
        "template-2":  ``,
        
        "template-3":  ``,
        
        "template-4":  ``,

        "template-5":  ``,

        "template-6":  ``,
        
        "template-7":  ``,

        "template-8":  ``,

    };

    if(templatesHTML[templateID] != ""){
        container_resume[0].innerHTML = templatesHTML[templateID];
        full_container_resume[0].innerHTML = templatesHTML[templateID];
    }
    else {
        container_resume[0].innerHTML = "Sorry! This template is not available!";
        full_container_resume[0].innerHTML = "Sorry! This template is not available!";
    }
}

function uppercaseFirstLetter(str) {
    str = str.split(" ");
    for (var i=0; i<str.length; i++) {
        str[i] = str[i].charAt(0).toUpperCase() + str[i].substr(1);
    }
    return str.join(" ");
}
const inputFields = document.querySelectorAll('input');
inputFields.forEach((input, index) => { // show input/information of resume
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
// const editorSummaryCont = document.querySelector('#editor-summary-container');
// const bodyContent = document.querySelectorAll('.body-content');
// const exampleBody = bodyContent[0].innerHTML;
// editorCont.onkeyup = ()=>{ // show body of resume
//     valueInputs[`body-content`] = editorCont.firstChild.innerHTML;
//     updateTemplate(valueInputs, document.querySelector('.template-choosed').id);
// }

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
//                 newPage.innerHTML =`<div class="preview-resume-content container-fluid p-0">
//                                         <div class="row resume-body">
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
//                 templ_review.style = `height: ${(templ_review.clientWidth*1.414+20)*container_resume.length}px`;
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
const chTemplContainer = document.querySelector('.resume-templates-container');
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
        if(window.innerWidth<768){
            chTemplContainer.scroll({
                left: 142*index,
                behavior: "smooth",
            })
        }
    })
})

// responsive choose template section
const resumeTemplate = document.querySelector('.resume-templates');
let resizeChooseTemplate = new ResizeObserver(() => { 
    if(window.innerWidth<768){
        let marSize = (chTemplContainer.clientWidth - 142)/2;
        resumeTemplate.style = `margin: 0 ${marSize}px`;
    } else{
        resumeTemplate.style = '';
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
    const resumeDownload = document.getElementById(`resume-content`).firstChild;
    var opt = {
        filename:     `${valueInputs['contact-firstname']}${valueInputs['contact-lastname'].split(" ").join("")}-Resume.pdf`,
        jsPDF:        { format: 'a4' }
    };
    html2pdf().set(opt).from(resumeDownload).save();
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
// const toggleOptions = document.querySelector('.btn-add-pre-write');
// const closeOptions = document.querySelector('.close-pre-written');
// const optionsCtn = document.querySelector('.pre-written-section');
// toggleOptions.addEventListener('click', () => {optionsCtn.classList.toggle('form-active')});
// closeOptions.addEventListener('click', () => {optionsCtn.classList.remove('form-active')});

//// add pre-written text in body part
// let opPrewritten = {
//     'op-experienced': "<p>As an accomplished professional in the field of <strong>[Your Current Occupation]</strong> with <strong>[X years]</strong> of hands-on experience, I was captivated by your job posting for the <strong>[Job Title]</strong> position at <strong>[New Company]</strong>. The moment I read the description, I recognized that my unique skill set and qualifications perfectly align with your company's needs. I am eager to contribute immediately and exceed your expectations in this role.</p><p>During my tenure at my previous role as a <strong>[Current Occupation]</strong>, I honed my expertise in <strong>[Professional Skill 1]</strong>, <strong>[Professional Skill 2]</strong>, and <strong>[Professional Skill 3]</strong>. Throughout this journey, I consistently stood out, thanks to my innate strengths in <strong>[Personal Strength 1]</strong> and <strong>[Personal Strength 2]</strong>. My educational background includes a degree in <strong>[Your Studies]</strong> from <strong>[University]</strong>, which has not only deepened my knowledge but also cultivated a strong foundation for becoming a <strong>[Personal Strength 3]</strong> professional.</p><p>I am determined to leverage these skills as a <strong>[Job Title]</strong> while also eagerly embracing opportunities for growth and expansion within the realm of <strong>[Professional Field]</strong>.</p><p>Please contact me to schedule a meeting or request further information and references from my past employers.</p><p>Thank you for considering my application. I look forward to the opportunity to contribute my expertise to <strong>[New Company]</strong> and help drive its continued success.</p>",
//     'op-re-graduate': "<p>I am writing in response to your job advertisement for the <strong>[Job Title]</strong> position. Recently, I graduated with a degree in <strong>[Your Studies]</strong> from <strong>[University]</strong>, and I am enthusiastic about launching my career in <strong>[Professional Field]</strong>. I am seeking an entry-level position that will allow me to apply the skills and knowledge I acquired during my studies and contribute to <strong>[New Company]</strong>'s mission.</p><p>As a student, I had the privilege of gaining exposure to various aspects of <strong>[Professional Field]</strong>, working collaboratively within interdisciplinary teams on challenging projects. My involvement in <strong>[Extracurricular Activity]</strong> allowed me to develop expertise in <strong>[Professional Skill 1]</strong> and <strong>[Professional Skill 2]</strong>, while also enhancing my <strong>[Professional Skill 3]</strong> capabilities. These experiences further fueled my passion and enthusiasm for <strong>[Professional Field]</strong>, and I am eager to apply what I've learned.</p><p>My inherently <strong>[Personal Strength 3]</strong> nature, coupled with my dedication and eagerness to learn, make me well-suited for the <strong>[Job Title]</strong> position at <strong>[New Company]</strong>. I am excited about the prospect of contributing to your organization's mission, especially <strong>[New Company's Mission]</strong>.</p><p>Please feel free to contact me via phone or email to schedule an interview. I'm excited about the chance to discuss how my skills align with <strong>[New Company]</strong>'s goals and potentially join your team to contribute to its success.</p>",
//     'op-student': "<p>I am writing to express my strong interest in the<strong> [Job Title]</strong> position at <strong>[New Company]</strong>. As a student majoring in <strong>[Your Studies]</strong> at<strong> [University]</strong>, I am eager to apply my passion for <strong>[Professional Skill 1]</strong> and my growing expertise in<strong> [Professional Skill 2]</strong> and <strong>[Professional Skill 3]</strong> to contribute to your team.</p><p>During my studies, I actively participated in extracurricular activities, such as <strong>[Extracurricular Activity 1]</strong> and <strong>[Extracurricular Activity 2]</strong>, where I demonstrated my <strong>[Personal Strength 1]</strong> and <strong>[Personal Strength 2]</strong> mindset. My academic record reflects my commitment to excellence, including courses and projects that have developed my <strong>[Personal Strength 3]</strong>.</p><p>I am excited about the opportunity to join <strong>[New Company]</strong> and align with its values, including <strong>[Company Value 1]</strong> and <strong>[Company Value 2]</strong>. I am a dedicated and diligent student, eager to learn from talented colleagues and make a meaningful impact.</p><p>Please feel free to contact me via phone or email to arrange a convenient meeting time. If you require further information or recommendations from my professors, don't hesitate to reach out.</p><p>Thank you for considering my application. I look forward to the possibility of contributing to <strong>[New Company]</strong>'s success.</p>",
//     'op-internship': "<p>I am writing to express my strong interest in the <strong>[Internship Position]</strong> at <strong>[New Company]</strong>. Upon discovering the job posting, I was thrilled to find that my academic achievements align perfectly with the requirements. I am currently seeking a challenging internship that allows me to apply my knowledge gained through my studies at <strong>[University]</strong> in <strong>[Studies Program]</strong>. This opportunity particularly appeals to me due to its alignment with my passion for <strong>[Professional Field]</strong> and its promise of both challenges and rewards.</p><p>As a student, I have honed my skills in <strong>[Professional Skill 1]</strong>, <strong>[Professional Skill 2]</strong>, and <strong>[Professional Skill 3]</strong>, which directly relate to the internship's requirements. While I may lack professional experience, I compensate with a strong <strong>[Personal Strength 1]</strong>, <strong>[Personal Strength 2]</strong>, and <strong>[Personal Strength 3]</strong> professional mindset.</p><p>I am eager to bring my fresh perspective and enthusiasm for learning to contribute to<strong> [New Company]</strong>'s objectives. I deeply admire your organization's values, including <strong>[Company Value 1]</strong> and <strong>[Company Value 2]</strong>, and I am genuinely passionate about your mission to <strong>[New Company Mission]</strong>.</p><p>I'd appreciate the chance to interview with you. Please contact me to schedule a meeting at your earliest convenience. Feel free to reach out for questions or more information</p><p>Thank you for considering my application.</p>",
//     'op-career-change': "<p>I am writing to express my keen interest in the <strong>[Job Title]</strong> position at <strong>[New Company]</strong>. With <strong>[X years]</strong> of experience as a <strong>[Current Occupation]</strong>, I am excited to make a career transition into <strong>[Job Title]</strong>. I am confident that the skills and knowledge acquired in my previous career will seamlessly translate into this new role, enabling me to contribute effectively from day one.</p><p>While my past roles were centered around <strong>[Professional Field]</strong>, I have gained significant experience relevant to <strong>[Job Title]</strong>, including proficiency in <strong>[Professional Skill 1]</strong>, <strong>[Professional Skill 2]</strong>, and <strong>[Professional Skill 3]</strong>. My innate<strong> [Personal Strength 1]</strong> and <strong>[Personal Strength 2]</strong> disposition has consistently enabled me to excel in team environments, surpassing expectations at my previous job. My distinctive <strong>[Personal Strength 3]</strong> approach played a pivotal role in achieving <strong>[Achievement 1]</strong> and <strong>[Achievement 2]</strong>.</p><p>I believe my comprehensive background in <strong>[Professional Field]</strong> brings a unique perspective to your team. I am a quick learner, eager to transition seamlessly into the role of <strong>[Job Title]</strong>. I welcome the opportunity for a personal interview to showcase my suitability for this new career path. Please reach out to arrange a convenient meeting time. If you have any inquiries or require references from my past employers, do not hesitate to contact me.</p><p>Thank you for your time and consideration.</p>"
// }
// const optionsCL = document.querySelectorAll('.options-cl');
// const optCheck = document.querySelectorAll('.option-check');
// optionsCL.forEach((opt, index) => {
//     opt.addEventListener('click', ()=>{
//         if(editorCont.firstChild.innerHTML != opPrewritten[`${opt.id}`]){
//             editorCont.firstChild.innerHTML = opPrewritten[`${opt.id}`];
//             valueInputs['body-content'] = opPrewritten[`${opt.id}`];
//             updateTemplate(valueInputs, document.querySelector('.template-choosed').id);
//             resetIcons();
//             optCheck[index].classList.replace('fa-plus-circle','fa-check-circle');
//         } else {
//             editorCont.firstChild.innerHTML = '<p><br></p>';
//             valueInputs['body-content'] = exampleBody;
//             updateTemplate(valueInputs, document.querySelector('.template-choosed').id);
//             resetIcons();
//         }
//     })
// })
// function resetIcons() {
//     optCheck.forEach((optC) => {
//         optC.className = "option-check fa fa-plus-circle";
//     })
// }
