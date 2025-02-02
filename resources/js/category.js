const EditBtn = document.getElementsByClassName('edit-btn');
const SubmitBtn = document.getElementsByClassName('submit-btn');
const EditForm = document.getElementsByClassName('edit-form');
const EditInput = document.getElementsByClassName('edit-input');
const CategoryName = document.getElementsByClassName('category-name');

for (let i = 0; i < EditBtn.length; i++) {

    EditBtn[i].addEventListener('click', function () {
        EditForm[i].classList.toggle('hidden');
        EditBtn[i].classList.toggle('hidden');
        CategoryName[i].classList.toggle('hidden');
        EditInput[i].classList.toggle('hidden');
        SubmitBtn[i].style.backgroundColor = 'green';
        SubmitBtn[i].classList.toggle('hidden');
    });

    SubmitBtn[i].addEventListener('click', function () {
        EditForm[i].submit();
    });
}
