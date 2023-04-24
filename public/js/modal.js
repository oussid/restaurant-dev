const modals = document.querySelectorAll('.modal')
const editProfileBtn = document.getElementById('editProfile')
const EditPfpBtn = document.getElementById('adminEditPfp')
const PfpDropdown = document.getElementById('adminPfpDropdown')
const fileInp = document.getElementById('img-upload')

const hideModal = (id)=>{
    let modal = document.getElementById(id)
    
    modal.classList.remove('show-modal')
}

const showModal = (id)=>{
    console.log('ran');
    const modal = document.getElementById(id)
    modal.classList.add('show-modal')
}

const toggleModal = (id)=>{
    const modal = document.getElementById(id)
    console.log(modal);
    modal.classList.toggle('show-modal')
}

editProfileBtn.addEventListener('click', (e)=>{
    if(e.target == editProfileBtn){
        toggleModal(editProfileBtn.id)
    }
})



EditPfpBtn.addEventListener('click', (e)=>{
        console.log('edit pfp clicked');
        PfpDropdown.classList.toggle('show')
    
})



modals.forEach(modal => {
    modal.addEventListener('click', (e)=>{
        if(e.target != EditPfpBtn && !EditPfpBtn.contains(e.target) && !PfpDropdown.contains(e.target) ){
            PfpDropdown.classList.remove('show')
        }
        if(e.target == modal){
            toggleModal(modal.id)
        }
    })

    modal.addEventListener('click', (e)=>{
        if(e.target != EditPfpBtn && !EditPfpBtn.contains(e.target) && !PfpDropdown.contains(e.target) ){
            PfpDropdown.classList.remove('show')
        }
        if(e.target == modal){
            console.log('id from eventlis:', modal.id);
            hideModal(modal.id)
        }
    })
});
