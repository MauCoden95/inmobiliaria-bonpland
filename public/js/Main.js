/*Panel Admin*/
const btnList = document.querySelector('#btn_list');
const btnCreate = document.querySelector('#btn_create');
const btnEdit = document.querySelector('#btn_edit');
const divList = document.querySelector('.div_list');
const formCreate = document.querySelector('.form_create');
const formEdit = document.querySelector('.form_edit');

if (divList) {
    divList.style.display = "none";
}

if (formCreate) {
    formCreate.style.display = "none";
}

if (formEdit) {
    formEdit.style.display = "none";
}

if (btnList) {
    btnList.addEventListener('click', () => {
        divList.style.display = "grid";
        formCreate.style.display = "none";
        formEdit.style.display = "none";
    });
}

if (btnCreate) {
    btnCreate.addEventListener('click', () => {
        formCreate.style.display = "grid";
        formEdit.style.display = "none";
        divList.style.display = "none";
    });
}



if (btnEdit) {
    btnEdit.addEventListener('click', () => {
        formEdit.style.display = "grid";
        formCreate.style.display = "none";
        divList.style.display = "none";
    });
}


