const addBtn = document.querySelector('.addBtn');
const answContainer = document.querySelector('.answContainer');
const addContainer = document.querySelector('.addContainer');
const submitBtn = document.querySelector('#submitBtn');
let nbInit = answContainer.childElementCount;
let nbAnsw = nbInit;
let id = 2;
console.log(nbInit);
addBtn.addEventListener('click', () => {
  if(nbAnsw < 10){
    addInput();
  }
  else {
    return;
  }
});

function addInput(){
  id++;
  nbAnsw++;
  // div
  const container = document.createElement('div');
  container.classList.add(`inputContainer${id}`, 'd-flex', 'flex-row', 'm-2', 'align-items-center');
  // label > div
  const label = document.createElement('label');
  label.classList.add('me-3');
  label.innerText = `Réponse ${nbAnsw} :`;
  label.setAttribute('for', `answ${id}`);
  // input > div
  const input = document.createElement('input');
  input.setAttribute('id', `answ${id}`);
  input.setAttribute('name', `answ[]`);
  input.setAttribute('type', 'text');
  input.setAttribute('required', '');
  input.setAttribute('autocomplete', 'off');
  input.setAttribute('maxlength', '100');
  // button > div
  const button = document.createElement('button');
  button.setAttribute('type', 'button');
  button.classList.add('delBtn', 'btn', 'link-danger');
  button.innerHTML = '<i class="fa-solid fa-trash"></i>';
  button.addEventListener('click', delInput);

  container.appendChild(label);
  container.appendChild(input);
  container.appendChild(button);
  answContainer.appendChild(container);
}

function delInput(){
  let inputContainer = this.parentNode;
  answContainer.removeChild(inputContainer);
  nbAnsw--;
}