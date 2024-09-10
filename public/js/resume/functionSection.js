//// history employments
const addEmploymentContainer = document.querySelector('.add-employment-container');
const employmentForm = document.querySelector('.employment-inputs-form');
// Function to add a new employment-info-form
function addNewEmploymentForm() {
    const newLi = document.createElement('li');
    newLi.classList.add('li-form', 'li-form', 'position-relative', 'mb-3');
    newLi.innerHTML = `
        <div class="employment-info-form info-form form rounded h-auto">
            <div class="employment-form-header inputs-form-header p-3 d-flex justify-content-between align-items-center">
                <div class="employment-info d-flex flex-column justify-content-center" style="font-size: .85rem;">
                    <strong class="m-0"><span class="his-position">Position</span> at <span class="his-company">Company</span></strong>
                    <p class="m-0 employment-time-title" style="color: #626262;"><span class="start-year"></span> - <span class="end-year"></span></p>
                </div>
                <div class="expand-collapse-form" style="font-size: 1.2rem;">
                    <i class="fa fa-angle-up"></i>
                </div>
            </div>
            <div class="employment-form-input p-3">
                <div class="row mb-4 position-relative d-flex">
                    <div class="col-6 pe-2 position-relative">
                        <input type="text" class="form-control" id="employment-job-title" placeholder="ex: Developer">
                        <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 25px);">Job Title</span>
                    </div>
                    <div class="col-6 ps-2 position-relative">
                        <input type="text" class="form-control" id="employer-company" placeholder="ex: Maste Foods">
                        <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 22px);">Employer</span>
                    </div>
                </div>
                <div class="row mb-4 position-relative d-flex">
                    <div class="col-6 pe-2 position-relative">
                        <input type="text" class="form-control input-date-picker start-date" id="employment-start-date" placeholder="MM / YYYY">
                        <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 25px);">Start Date</span>
                        <div class="start-calendar calendar-picker mt-1"></div>
                    </div>
                    <div class="col-6 ps-2 position-relative">
                        <input type="text" class="form-control input-date-picker end-date" id="employment-end-date" placeholder="MM / YYYY">
                        <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 22px);">End Date</span>
                        <div class="end-calendar calendar-picker mt-1"></div>
                    </div>
                </div>
                <div class="mb-4 position-relative">
                    <input type="text" class="form-control" id="worked-city" placeholder="ex: New York">
                    <span class="input-placeholder">City</span>
                </div>
                <div class="editor-textarea editor-employment-container"></div>
                <p class="subtitle-tip mt-2 mb-0" style="color: #a0a0a0; font-size:.9rem">Recruiter tip: Use bullet point to note your achievements.</p>
            </div>
        </div>
        <div class="draggable-form-wrap position-absolute">
            <i class="fa fa-sort draggable-form"></i>
        </div>
        <div class="remove-form-wrap position-absolute">
            <i class="fa fa-trash-o remove-form"></i>
        </div>
    `;
    employmentForm.appendChild(newLi);
    setFunctionsEmploymentInput(newLi);
}

function setFunctionsEmploymentInput(liElement){
    function setExpandEmploymentInput(liEle) {
        const infoForm = liEle.querySelector('.employment-info-form');
        infoForm.querySelector('.employment-form-header').addEventListener('click', ()=>{
            infoForm.classList.toggle('h-auto');
            infoForm.querySelector('.fa-angle-up').classList.toggle('rotate-down');
        })
    }
    function setRemoveEmploymentInput(liEle) {
        liEle.querySelector('.remove-form').addEventListener('click', ()=>{
            if (employmentForm.hasChildNodes()) {
                employmentForm.removeChild(liEle);
            }
        })
    }
    function setToggleCalendarInput(liEle) {
        const startDatePicker = liEle.querySelector('.start-date');
        const startCalendar = liEle.querySelector('.start-calendar');
        const endDatePicker = liEle.querySelector('.end-date');
        const endCalendar = liEle.querySelector('.end-calendar');

        const date = new Date();
        let currentYear = date.getFullYear();
        let pickedStartMonth = 1;
        let pickedStartYear = currentYear;
        let months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        function inputFocusedIn_StartDate() {
            let innerCalendar = `
                <div class="month-picker-wrap">
                    <div class="picker_year mb-2"><span class="btn-prev-next-year prev-year"><span class="fa fa-angle-left"></span></span><strong class="year-number" data-year="${pickedStartYear}">${pickedStartYear}</strong><span class="btn-prev-next-year next-year"><span class="fa fa-angle-right"></span></span></div>
                    <div class="picker_month">`;
            for (var i=0; i<12; i++) {
                if(pickedStartMonth == (i+1)){
                    innerCalendar += `<div class="month-title month-picked" data-month="${i+1}">${months[i]}</div>`;
                } else {
                    innerCalendar += `<div class="month-title" data-month="${i+1}">${months[i]}</div>`;
                }
            }
            innerCalendar += `</div></div>`;
            startCalendar.innerHTML = innerCalendar;

            startCalendar.querySelectorAll('.month-title').forEach((month, index)=>{
                month.addEventListener('click', ()=>{
                    pickedStartMonth = month.dataset.month;
                })
            })
            startCalendar.querySelector('.prev-year').addEventListener('click', ()=>{
                pickedStartYear -= 1;
            })
            startCalendar.querySelector('.next-year').addEventListener('click', ()=>{
                pickedStartYear += 1;
            })
        }
        startDatePicker.addEventListener("focusin", inputFocusedIn_StartDate);
        document.addEventListener('click', function(event) {
            const mouseInside = startDatePicker.contains(event.target) || startCalendar.contains(event.target);
            if (!mouseInside) {
                startCalendar.innerHTML = ``;
            } else {
                startDatePicker.focus();
                startDatePicker.value = `${months[pickedStartMonth-1]}, ${pickedStartYear}`;
                liEle.querySelector('.start-year').innerText = startDatePicker.value;
                startCalendar.querySelector('.year-number').innerHTML = pickedStartYear;
                startCalendar.querySelector('.year-number').dataset.year = pickedStartYear;
            }
        });

        let pickedEndMonth = 1;
        let pickedEndYear = currentYear;
        function inputFocusedIn_EndDate() {
            let innerCalendar = `
                <div class="month-picker-wrap">
                    <div class="picker_year mb-2"><span class="btn-prev-next-year prev-year"><span class="fa fa-angle-left"></span></span><strong class="year-number" data-year="${pickedEndYear}">${pickedEndYear}</strong><span class="btn-prev-next-year next-year"><span class="fa fa-angle-right"></span></span></div>
                    <div class="picker_month">`;
            for (var i=0; i<12; i++) {
                if(pickedEndMonth == (i+1)){
                    innerCalendar += `<div class="month-title month-picked" data-month="${i+1}">${months[i]}</div>`;
                } else {
                    innerCalendar += `<div class="month-title" data-month="${i+1}">${months[i]}</div>`;
                }
            }
            innerCalendar += `</div><div class="current-date-picker-wrap text-start mt-1"><span class="picker_current">Today</span></div></div>`;
            endCalendar.innerHTML = innerCalendar;

            endCalendar.querySelectorAll('.month-title').forEach((month, index)=>{
                month.addEventListener('click', ()=>{
                    pickedEndMonth = month.dataset.month;
                    endDatePicker.value = `${months[pickedEndMonth-1]}, ${pickedEndYear}`;
                })
            })
            endCalendar.querySelector('.prev-year').addEventListener('click', ()=>{
                pickedEndYear -= 1;
            })
            endCalendar.querySelector('.next-year').addEventListener('click', ()=>{
                pickedEndYear += 1;
            })
            endCalendar.querySelector('.picker_current').addEventListener('click', ()=>{
                pickedEndYear = currentYear;
                pickedEndMonth = date.getMonth()+1;
            })
        }
        endDatePicker.addEventListener("focusin", inputFocusedIn_EndDate);
        document.addEventListener('click', function(event) {
            const mouseInside = endDatePicker.contains(event.target) || endCalendar.contains(event.target);
            if (!mouseInside) {
                endCalendar.innerHTML = ``;
            } else {
                endDatePicker.focus();
                endDatePicker.value = `${months[pickedEndMonth-1]}, ${pickedEndYear}`;
                console.log(pickedEndMonth);
                if(pickedEndYear == currentYear && pickedEndMonth-1 == date.getMonth()) {
                    liEle.querySelector('.end-year').innerText = "Present";
                } else {
                    liEle.querySelector('.end-year').innerText = endDatePicker.value;
                }
                endCalendar.querySelector('.year-number').innerHTML = pickedEndYear;
                endCalendar.querySelector('.year-number').dataset.year = pickedEndYear;
            }
        });
    }
    function setDraggableEmpForm() {
        let isDragging = false;
        let currentItem = null;
        let containerOffsetY = 0;
        let initY = 0;
        document.addEventListener("mousedown", (e) => {
            const item = e.target.closest(".li-form");
            if (item) {
                const iconMove = item.querySelector('.draggable-form')
                const mouseInside = iconMove.contains(e.target);
                const infoFormEmp = item.querySelector('.employment-info-form');
                if(mouseInside){
                    if(infoFormEmp.classList.contains('h-auto')){
                        infoFormEmp.classList.remove('h-auto');
                    }
                    infoFormEmp.querySelector('.fa-angle-up').classList.add('rotate-down');
                    employmentForm.style.height = employmentForm.offsetHeight + "px";
                    employmentForm.style.width = employmentForm.offsetWidth + "px";

                    isDragging = true;
                    currentItem = item;
                    containerOffsetY = currentItem.offsetTop;
                    currentItem.classList.add("dragging");
                    document.body.style.userSelect = "none";
                    currentItem.style.top = containerOffsetY + "px";
                    initY = e.clientY;
                }
            }
        });
        document.addEventListener("mousemove", (e) => {
            if (isDragging && currentItem) {
                let newTop = containerOffsetY - (initY - e.clientY);
                if (newTop < -50) {
                    newTop = -50;
                } else if (newTop > employmentForm.offsetHeight - 20) {
                    addEmploymentContainer.style.marginTop = (currentItem.offsetHeight + 30) + "px";
                } else {
                    addEmploymentContainer.style = "";
                }
                currentItem.style.top = newTop + "px";
    
                let itemSibilings = [...document.querySelectorAll(".li-form:not(.dragging)"),];
                let nextItem = itemSibilings.find((sibiling) => {
                    return (e.clientY - employmentForm.getBoundingClientRect().top <= sibiling.offsetTop + sibiling.offsetHeight / 2);
                });
    
                itemSibilings.forEach((sibiling) => {
                    sibiling.style.marginTop = "0px";
                });
    
                if (nextItem) {
                    nextItem.style.marginTop = (currentItem.offsetHeight + 30) + "px";
                }
                employmentForm.insertBefore(currentItem, nextItem);
            }
        });
    
        document.addEventListener("mouseup", () => {
            employmentForm.style = "";
            addEmploymentContainer.style = "";
            if (currentItem) {
                currentItem.classList.remove("dragging");
                currentItem.style.top = "auto";
                currentItem = null;
                isDragging = false;
                document.body.style.userSelect = "auto";
            }
            let itemSibilings = [...document.querySelectorAll(".li-form:not(.dragging)"),];
            itemSibilings.forEach((sibiling) => {
                sibiling.style.marginTop = "0px";
            });
        });
    }

    setExpandEmploymentInput(liElement);
    setRemoveEmploymentInput(liElement);
    setToggleCalendarInput(liElement);
    setDraggableEmpForm();
}
addEmploymentContainer.addEventListener('click', function() {
    addNewEmploymentForm();
});


//// education
const addEducationContainer = document.querySelector('.add-education-container');
const educationForm = document.querySelector('.education-inputs-form');
// Function to add a new education-info-form
function addNewEducationForm() {
    const newLi = document.createElement('li');
    newLi.classList.add('li-form', 'li-edu-form', 'position-relative', 'mb-3');
    newLi.innerHTML = `
        <div class="education-info-form info-form form rounded h-auto">
            <div class="education-form-header inputs-form-header p-3 d-flex justify-content-between align-items-center">
                <div class="education-info d-flex flex-column justify-content-center" style="font-size: .85rem;">
                    <strong class="m-0"><span class="education-degree">Degree</span> at <span class="education-school">School</span></strong>
                    <p class="m-0 education-time-title" style="color: #626262;"><span class="start-year"></span> - <span class="end-year"></span></p>
                </div>
                <div class="expand-collapse-form" style="font-size: 1.2rem;">
                    <i class="fa fa-angle-up"></i>
                </div>
            </div>
            <div class="education-input p-3">
                <div class="row mb-4 position-relative d-flex">
                    <div class="col-6 pe-2 position-relative">
                        <input type="text" class="form-control" id="education-school" placeholder="ex: Havard University">
                        <span class="input-placeholder" style="width: 70%;left: calc(var(--bs-gutter-x)*.5 + 25px);">School</span>
                    </div>
                    <div class="col-6 ps-2 position-relative">
                        <input type="text" class="form-control" id="education-degree" placeholder="ex: Bachelor">
                        <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 22px);">Degree</span>
                    </div>
                </div>
                <div class="row mb-4 position-relative d-flex">
                    <div class="col-6 pe-2 position-relative">
                        <input type="text" class="form-control input-date-picker start-date" id="education-start-date" placeholder="MM / YYYY">
                        <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 25px);">Start Date</span>
                        <div class="start-calendar calendar-picker mt-1"></div>
                    </div>
                    <div class="col-6 ps-2 position-relative">
                        <input type="text" class="form-control input-date-picker end-date" id="education-end-date" placeholder="MM / YYYY">
                        <span class="input-placeholder" style="width: 60%;left: calc(var(--bs-gutter-x)*.5 + 22px);">End Date</span>
                        <div class="end-calendar calendar-picker mt-1"></div>
                    </div>
                </div>
                <div class="mb-4 position-relative">
                    <input type="text" class="form-control" id="educated-city" placeholder="ex: New York City">
                    <span class="input-placeholder">City</span>
                </div>
                <div class="editor-textarea editor-education-container"></div>
                <p class="subtitle-tip mt-2 mb-0" style="color: #a0a0a0; font-size:.9rem">Your description and achievements (Not required)</p>
            </div>
        </div>
        <div class="remove-form-wrap position-absolute">
            <i class="fa fa-trash-o remove-form"></i>
        </div>
    `;
    educationForm.appendChild(newLi);
    setFunctionsEducationInput(newLi);
}

function setFunctionsEducationInput(liElement){
    function setExpandEducationInput(liEle) {
        const infoForm = liEle.querySelector('.education-info-form');
        infoForm.querySelector('.education-form-header').addEventListener('click', ()=>{
            infoForm.classList.toggle('h-auto');
            infoForm.querySelector('.fa-angle-up').classList.toggle('rotate-down');
        })
    }
    function setRemoveEducationInput(liEle) {
        liEle.querySelector('.remove-form').addEventListener('click', ()=>{
            if (educationForm.hasChildNodes()) {
                educationForm.removeChild(liEle);
            }
        })
    }
    function setToggleCalendarInput(liEle) {
        const startDatePicker = liEle.querySelector('.start-date');
        const startCalendar = liEle.querySelector('.start-calendar');
        const endDatePicker = liEle.querySelector('.end-date');
        const endCalendar = liEle.querySelector('.end-calendar');

        const date = new Date();
        let currentYear = date.getFullYear();
        let pickedStartMonth = 1;
        let pickedStartYear = currentYear;
        let months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        function inputFocusedIn_StartDate() {
            let innerCalendar = `
                <div class="month-picker-wrap">
                    <div class="picker_year mb-2"><span class="btn-prev-next-year prev-year"><span class="fa fa-angle-left"></span></span><strong class="year-number" data-year="${pickedStartYear}">${pickedStartYear}</strong><span class="btn-prev-next-year next-year"><span class="fa fa-angle-right"></span></span></div>
                    <div class="picker_month">`;
            for (var i=0; i<12; i++) {
                if(pickedStartMonth == (i+1)){
                    innerCalendar += `<div class="month-title month-picked" data-month="${i+1}">${months[i]}</div>`;
                } else {
                    innerCalendar += `<div class="month-title" data-month="${i+1}">${months[i]}</div>`;
                }
            }
            innerCalendar += `</div></div>`;
            startCalendar.innerHTML = innerCalendar;

            startCalendar.querySelectorAll('.month-title').forEach((month, index)=>{
                month.addEventListener('click', ()=>{
                    pickedStartMonth = month.dataset.month;
                })
            })
            startCalendar.querySelector('.prev-year').addEventListener('click', ()=>{
                pickedStartYear -= 1;
            })
            startCalendar.querySelector('.next-year').addEventListener('click', ()=>{
                pickedStartYear += 1;
            })
        }
        startDatePicker.addEventListener("focusin", inputFocusedIn_StartDate);
        document.addEventListener('click', function(event) {
            const mouseInside = startDatePicker.contains(event.target) || startCalendar.contains(event.target);
            if (!mouseInside) {
                startCalendar.innerHTML = ``;
            } else {
                startDatePicker.focus();
                startDatePicker.value = `${months[pickedStartMonth-1]}, ${pickedStartYear}`;
                liEle.querySelector('.start-year').innerText = startDatePicker.value;
                startCalendar.querySelector('.year-number').innerHTML = pickedStartYear;
                startCalendar.querySelector('.year-number').dataset.year = pickedStartYear;
            }
        });

        let pickedEndMonth = 1;
        let pickedEndYear = currentYear;
        function inputFocusedIn_EndDate() {
            let innerCalendar = `
                <div class="month-picker-wrap">
                    <div class="picker_year mb-2"><span class="btn-prev-next-year prev-year"><span class="fa fa-angle-left"></span></span><strong class="year-number" data-year="${pickedEndYear}">${pickedEndYear}</strong><span class="btn-prev-next-year next-year"><span class="fa fa-angle-right"></span></span></div>
                    <div class="picker_month">`;
            for (var i=0; i<12; i++) {
                if(pickedEndMonth == (i+1)){
                    innerCalendar += `<div class="month-title month-picked" data-month="${i+1}">${months[i]}</div>`;
                } else {
                    innerCalendar += `<div class="month-title" data-month="${i+1}">${months[i]}</div>`;
                }
            }
            innerCalendar += `</div><div class="current-date-picker-wrap text-start mt-1"><span class="picker_current">Today</span></div></div>`;
            endCalendar.innerHTML = innerCalendar;

            endCalendar.querySelectorAll('.month-title').forEach((month, index)=>{
                month.addEventListener('click', ()=>{
                    pickedEndMonth = month.dataset.month;
                    endDatePicker.value = `${months[pickedEndMonth-1]}, ${pickedEndYear}`;
                })
            })
            endCalendar.querySelector('.prev-year').addEventListener('click', ()=>{
                pickedEndYear -= 1;
            })
            endCalendar.querySelector('.next-year').addEventListener('click', ()=>{
                pickedEndYear += 1;
            })
            endCalendar.querySelector('.picker_current').addEventListener('click', ()=>{
                pickedEndYear = currentYear;
                pickedEndMonth = date.getMonth()+1;
            })
        }
        endDatePicker.addEventListener("focusin", inputFocusedIn_EndDate);
        document.addEventListener('click', function(event) {
            const mouseInside = endDatePicker.contains(event.target) || endCalendar.contains(event.target);
            if (!mouseInside) {
                endCalendar.innerHTML = ``;
            } else {
                endDatePicker.focus();
                endDatePicker.value = `${months[pickedEndMonth-1]}, ${pickedEndYear}`;
                if(pickedEndYear == currentYear && pickedEndMonth-1 == date.getMonth()) {
                    liEle.querySelector('.end-year').innerText = "Present";
                } else {
                    liEle.querySelector('.end-year').innerText = endDatePicker.value;
                }
                endCalendar.querySelector('.year-number').innerHTML = pickedEndYear;
                endCalendar.querySelector('.year-number').dataset.year = pickedEndYear;
            }
        });
    }
    
    setExpandEducationInput(liElement);
    setRemoveEducationInput(liElement);
    setToggleCalendarInput(liElement);
}
addEducationContainer.addEventListener('click', function() {
    addNewEducationForm();
});



//// social
const addSocialContainer = document.querySelector('.add-social-container');
const socialForm = document.querySelector('.social-inputs-form');
// Function to add a new social-info-form
function addNewSocialForm() {
    const newLi = document.createElement('li');
    newLi.classList.add('li-form', 'li-soci-form', 'position-relative', 'mb-3');
    newLi.innerHTML = `
        <div class="social-info-form info-form form rounded h-auto">
            <div class="social-form-header inputs-form-header p-3 d-flex justify-content-between align-items-center">
                <div class="social-info d-flex flex-column justify-content-center" style="font-size: .85rem;">
                    <strong class="m-0"><span class="social-label">Social Label</strong>
                    <p class="m-0 social-link" style="color: #626262;">Social Link</p>
                </div>
                <div class="expand-collapse-form" style="font-size: 1.2rem;">
                    <i class="fa fa-angle-up"></i>
                </div>
            </div>
            <div class="social-input p-3">
                <div class="mb-4 position-relative">
                    <input type="text" class="form-control" id="social-name" placeholder="ex: Personal Website">
                    <span class="input-placeholder">Label</span>
                </div>
                <div class="mb-4 position-relative">
                    <input type="text" class="form-control" id="social-url" placeholder="ex: https://personalweb.com">
                    <span class="input-placeholder">Link</span>
                </div>
            </div>
        </div>
        <div class="remove-form-wrap position-absolute">
            <i class="fa fa-trash-o remove-form"></i>
        </div>
    `;
    socialForm.appendChild(newLi);
    setFunctionsSocialInput(newLi);
}

function setFunctionsSocialInput(liElement){
    function setExpandSocialInput(liEle) {
        const infoForm = liEle.querySelector('.social-info-form');
        infoForm.querySelector('.social-form-header').addEventListener('click', ()=>{
            infoForm.classList.toggle('h-auto');
            infoForm.querySelector('.fa-angle-up').classList.toggle('rotate-down');
        })
    }
    function setRemoveSocialInput(liEle) {
        liEle.querySelector('.remove-form').addEventListener('click', ()=>{
            if (socialForm.hasChildNodes()) {
                socialForm.removeChild(liEle);
            }
        })
    }    

    setExpandSocialInput(liElement);
    setRemoveSocialInput(liElement);
}
addSocialContainer.addEventListener('click', function() {
    addNewSocialForm();
});


//// skills
const addSkillContainer = document.querySelector('.add-skill-container');
const skillList = document.querySelector('.ul-skills');
// Function to add a new skill
function addNewSkill() {
    const skillInput = document.querySelector('#skills').value;
    const newLi = document.createElement('li');
    newLi.classList.add('d-flex', 'align-items-center');
    if(skillInput !== ""){
        newLi.innerHTML = `
            <div class="skill-tag" contenteditable="true">${skillInput}</div>
            <i class="fa fa-times remove-skill"></i>
        `;
        skillList.appendChild(newLi);
        setRemoveSkill(newLi);
    } 
}
function setRemoveSkill(liEle) {
    liEle.querySelector('.remove-skill').addEventListener('click', ()=>{
        if (skillList.hasChildNodes()) {
            skillList.removeChild(liEle);
        }
    })
}   
function enteredSkill(ele) {
    if(event.key === 'Enter') {
        addNewSkill();
        document.querySelector('#skills').value = "";        
        // testChatgpt();
    }
}
addSkillContainer.addEventListener('click', function() {
    addNewSkill();
    document.querySelector('#skills').value = "";
});



//// languages
const addLanguageContainer = document.querySelector('.add-language-container');
const languageList = document.querySelector('.ul-languages');
// Function to add a new language
function addNewLanguage() {
    const languageInput = document.querySelector('#languages').value;
    const newLi = document.createElement('li');
    newLi.classList.add('d-flex', 'align-items-center');
    if(languageInput !== ""){
        newLi.innerHTML = `
            <div class="language-tag" contenteditable="true">${languageInput}</div>
            <i class="fa fa-times remove-language"></i>
        `;
        languageList.appendChild(newLi);
        setRemoveLanguage(newLi);
    } 
}
function setRemoveLanguage(liEle) {
    liEle.querySelector('.remove-language').addEventListener('click', ()=>{
        if (languageList.hasChildNodes()) {
            languageList.removeChild(liEle);
        }
    })
}   
function enteredLanguage(ele) {
    if(event.key === 'Enter') {
        addNewLanguage();
        document.querySelector('#languages').value = "";        
    }
}
addLanguageContainer.addEventListener('click', function() {
    addNewLanguage();
    document.querySelector('#languages').value = "";
});