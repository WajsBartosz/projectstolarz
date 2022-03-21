const navbarButton = document.querySelector('.responsiveButton')
const navbarLinks = document.querySelectorAll('.link')


navbarButton.addEventListener('click', () =>{
    navbarLinks.forEach(element => element.classList.toggle('visible'))
}, true)
