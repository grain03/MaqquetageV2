const addButton = document.getElementById('addButton');
const addForm = document.getElementById('addSkill');
const addSkillConfirm = document.getElementById('addSkillConfirm');
const tableContent = document.getElementById('tableContent');
 addButton.addEventListener('click' , (e) => {
    e.preventDefault();
    addForm.classList.remove('hide');
    tableContent.classList.add('hide');
})
 addSkillConfirm.addEventListener('click' , (e) => {
    e.preventDefault();
    addForm.classList.add('hide');
    tableContent.classList.remove('hide');

 })