const passwordFoc = document.querySelector('#password')
const passwordReq = document.querySelector('.passwordReq')
const image = document.querySelectorAll('.passSign')
let passwordValue;

passwordFoc.addEventListener('focus', () => {
  passwordReq.classList.add('visible')
  }, true);

passwordFoc.addEventListener('blur', () => {
  passwordReq.classList.remove('visible')
  }, true);

passwordFoc.addEventListener('keyup', () => {
  passwordValue = document.querySelector('#password').value
  if(passwordValue.length>7){
    image[0].src = './images/heart_zigger_green.png'
  }
  else{
    image[0].src = './images/heart_zigger_red.png'
  }
  if(passwordValue.search(/[A-Z]/)!=-1){
    image[1].src = './images/heart_zigger_green.png'
  }
  else{
    image[1].src = './images/heart_zigger_red.png'
  }
  if(passwordValue.search(/[0-9]/)!=-1){
    image[2].src = './images/heart_zigger_green.png'
  }
  else{
    image[2].src = './images/heart_zigger_red.png'
  }
  let format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
  if(passwordValue.search(format)!=-1){
    image[3].src = './images/heart_zigger_green.png'
  }
  else{
    image[3].src = './images/heart_zigger_red.png'
  }
}, true)

