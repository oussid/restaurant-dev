const modal = document.getElementById('modal')
const editProfileBtn = document.getElementById('editProfile')
const EditPfpBtn = document.getElementById('adminEditPfp')
const PfpDropdown = document.getElementById('adminPfpDropdown')
const fileInp = document.getElementById('img-upload')

const hideModel = ()=>{
    modal.classList.remove('show-modal')
}

const showModel = ()=>{
    modal.classList.add('show-modal')
}

const toggleModel = ()=>{
    modal.classList.toggle('show-modal')
}

editProfileBtn.addEventListener('click', (e)=>{
    if(e.target == editProfileBtn){
        toggleModel()
    }
})

modal.addEventListener('click', (e)=>{
    if(e.target != EditPfpBtn && !EditPfpBtn.contains(e.target) && !PfpDropdown.contains(e.target) ){
        console.log('clicked outside cam ');
        PfpDropdown.classList.remove('show')
    }
    if(e.target == modal){
        console.log('modal clicked');
        toggleModel()
    }
})

EditPfpBtn.addEventListener('click', (e)=>{
        console.log('edit pfp clicked');
        PfpDropdown.classList.toggle('show')
    
})

fileInp.addEventListener('change', ()=>{
    console.log('change');
    if (!modal.classList.contains('show-modal')) {
        showModel()
    }
})


