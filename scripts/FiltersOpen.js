const filterButtons = document.querySelectorAll('.filterButton')
const filterTabs = document.querySelectorAll('.filterTab')

for(let i=0; i<filterButtons.length; i++){
    filterButtons[i].addEventListener('click', () => {
        filterTabs[i].classList.toggle('clicked')
    },true)
}