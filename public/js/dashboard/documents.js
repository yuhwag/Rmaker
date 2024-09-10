
// document - rename button 
const docInfo = document.querySelectorAll('.documents-container .doc-info');
docInfo.forEach(doc => {
    const docName = doc.querySelector('.doc-name');
    const btnEdit = doc.querySelector('.fa-pen');
    docName.addEventListener('click', (e) => {
        e.preventDefault();
    })
    btnEdit.addEventListener('click', () => {
        docName.focus();   
        document.getSelection().selectAllChildren(docName);
        document.getSelection().collapseToEnd()
    })
})

// document change resume/coverletter
const headtext = document.querySelectorAll('.documents-container .head-text');
headtext.forEach(item => {
    item.addEventListener('click', () => {
        let sectionname = item.className.split(' ')[0];
        let section = document.querySelector(`.${sectionname}-section`);

        document.querySelector('.head-text.active').classList.toggle('active');
        item.classList.toggle('active');

        document.querySelector('.doc-section:not(.d-none)').classList.toggle('d-none');
        section.classList.toggle('d-none');
    });
});
