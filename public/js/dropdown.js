const toggleDropdown = (id) => {
    let dropdown = document.getElementById(id)
    if(dropdown){
       dropdown.classList.toggle('show') 
    }
}

document.addEventListener('click', (e)=>{
    const dropdowns = document.querySelectorAll('.dropdown')
    const dropdownBtns = document.querySelectorAll('.dropdownBtn')
    dropdowns.forEach((dropdown,i) => {
        if(!dropdown.contains(e.target) && !dropdownBtns[i].contains(e.target)){
            dropdown.classList.remove('show')
        }
    });
})