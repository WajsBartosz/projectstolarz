const inputs = document.querySelectorAll('.formInputs');
const errors = document.querySelectorAll('.error');
var value
var search
var counter
var Password = 0
var isGood = 0
for(let i=0; i<inputs.length; i++){
    inputs[i].addEventListener('blur', () => {
            switch (i) {
                case 0:
                    value = inputs[i].value;
                    search = value.search(/@/);
                    let dotSearch = value.lastIndexOf('.')
                    counter = 0;
                    for (let j=0; j<value.length; j++){
                        if(value[j]=='@')
                        counter++
                    }
                    let firstLetter = value.charCodeAt(0)
                    //alert(firstLetter)
                    if(value.length==0){
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
                case 1:
                    value = inputs[i].value;
                    Password = value
                    let specialChars = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/
                    if(value.length<8){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Hasło za krótkie'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(value.search(/[A-Z]/)==-1){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Brak wielkiej litery'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(value.search(/[0-9]/)==-1){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Brak cyfry'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(value.search(specialChars)==-1){
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
                case 2:
                    value = inputs[i].value;
                    if(Password == 0){
                        errors[i].style.display = 'block';
                        errors[i].innerHTML = 'Najpierw podaj hasło'
                        inputs[i].style.borderColor = 'red'
                    }
                    else if(value!=Password){
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
                case 3:
                    value = inputs[i].value;
                    let birthDay = new Date(value)
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
