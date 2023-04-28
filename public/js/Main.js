/*Panel Admin*/
const btnList = document.querySelector('#btn_list');
const btnCreate = document.querySelector('#btn_create');
const divList = document.querySelector('.div_list');
const formCreate = document.querySelector('.form_create');

if (divList) {
    divList.style.display = "none";
}

if (formCreate) {
    formCreate.style.display = "none";
}


if (btnList) {
    btnList.addEventListener('click', () => {
        divList.style.display = "grid";
        formCreate.style.display = "none";
    });
}

if (btnCreate) {
    btnCreate.addEventListener('click', () => {
        formCreate.style.display = "grid";
        divList.style.display = "none";
    });
}



