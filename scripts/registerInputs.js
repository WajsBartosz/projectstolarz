const inputs = document.querySelectorAll('.formInputs');
const errors = document.querySelectorAll('.error');
var value
var search
var counter
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
                        
                    }
                    break;
                case 2:
                    value = inputs[i].value;
                    
                    break;
                case 3:
                    value = inputs[i].value;
                    
                    break;
            }
        },true)
        
}
