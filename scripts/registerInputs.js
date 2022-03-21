const inputs = document.querySelectorAll('.formInputs');
const errors = document.querySelectorAll('.error');

var search
var counter

var Email = inputs[0].value
var Password = inputs[1].value
var PasswordRepeat = inputs[2].value
var BirthDate = inputs[3].value

var isGood = 0

for(let i=0; i<inputs.length; i++){
    inputs[i].addEventListener('blur', () => {
            switch (i) {
                // EMAIL ERRORS
                case 0:
                    Email = inputs[i].value;
                    search = Email.search(/@/);
                    let dotSearch = Email.lastIndexOf('.')
                    counter = 0;
                    for (let j=0; j<Email.length; j++){
                        if(Email[j]=='@')
                        counter++
                    }
                    let firstLetter = Email.charCodeAt(0)
                    if(Email.length==0){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Podaj E-mail!'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if((firstLetter<48 || firstLetter>57) && (firstLetter<65 || firstLetter>90) && (firstLetter<97 || firstLetter>122)){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Podaj poprawny email!'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(counter!=1){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'E-mail musi mieć jeden znak "@"!'
                        inputs[i].style.borderColor = 'red'    
                    }   
                    else if(dotSearch<search){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Niepoprawna domena!'
                        inputs[i].style.borderColor = 'red'   
                    }
                    else{
                        errors[i].style.display = 'none';
                        inputs[i].style.borderColor = 'rgb(100,240,100)'
                    }
                    break;
                // PASSWORD ERRORS
                case 1:
                    Password = inputs[i].value;
                    let specialChars = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/
                    if(Password.length<8){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Hasło za krótkie'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(Password.search(/[A-Z]/)==-1){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Brak wielkiej litery'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(Password.search(/[0-9]/)==-1){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Brak cyfry'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(Password.search(specialChars)==-1){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Brak znaku specjalnego'
                        inputs[i].style.borderColor = 'red'
                    }
                    else{
                        errors[i].style.display = 'none';
                        inputs[i].style.borderColor = 'rgb(100,240,100)'
                        isGood = 1    
                    }
                    break;
                // PASSWORD REPEAT ERRORS
                case 2:
                    PasswordRepeat = inputs[i].value;
                    if(Password == 0){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Najpierw podaj hasło'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(PasswordRepeat!=Password){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Hasła nie są takie same.'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(isGood == 0){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Hasło nie spełnia wymagań'
                        inputs[i].style.borderColor = 'red'
                    }
                    else{
                        errors[i].style.display = 'none';
                        inputs[i].style.borderColor = 'rgb(100,240,100)'
                    }
                    break;
                // BIRTH DATE ERRORS
                case 3:
                    BirthDate = inputs[i].value;
                    let birthDay = new Date(BirthDate)
                    let todayDate = new Date()
                    let year = todayDate.getFullYear() - birthDay.getFullYear()
                    let month = todayDate.getMonth() - birthDay.getMonth()
                    let day = todayDate.getDate() - birthDay.getDate();
                    if(isNaN(birthDay)){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Podaj date'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(year<18 || (year==18 && month<0) || (year==18 && month==0 && day<0)){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Musisz mieć ukończone 18 lat'
                        inputs[i].style.borderColor = 'red'
                    }
                    else{
                        errors[i].style.display = 'none';
                        inputs[i].style.borderColor = 'rgb(100,240,100)'
                    }
                    break;
            }
        },true)
        
}
