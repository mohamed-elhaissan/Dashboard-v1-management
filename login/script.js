const connecter = document.getElementById("connecter");
const create = document.getElementById("create");
const forms = document.querySelectorAll("body form");




forms[1].style.display = 'none'
create.addEventListener("click", ()=> {
    forms[0].style.display = 'none';
    forms[1].style.display = 'block';
})
connecter.addEventListener("click", ()=> {
    forms[0].style.display = 'block';
    forms[1].style.display = 'none';
})