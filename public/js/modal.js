const modals = document.querySelectorAll('.modal')
const editProfileBtn = document.getElementById('editProfile')
const EditPfpBtn = document.getElementById('adminEditPfp')
const PfpDropdown = document.getElementById('adminPfpDropdown')
const fileInp = document.getElementById('img-upload')
const orderId = null;

const hideModal = (id)=>{
    console.log('1');
    let modal = document.getElementById(id)
    
    modal.classList.remove('show-modal')
}

const showModal = (id)=>{
    console.log('2');
    const modal = document.getElementById(id)
    modal.classList.add('show-modal')
}

const toggleModal = (id)=>{
    const modal = document.getElementById(id)
    console.log(id);
    modal.classList.toggle('show-modal')

}

editProfileBtn.addEventListener('click', (e)=>{
    if(e.target == editProfileBtn){
        console.log('4');
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
            console.log('5');
            toggleModal(modal.id)
        }
    })

    modal.addEventListener('click', (e)=>{
        if(e.target != EditPfpBtn && !EditPfpBtn.contains(e.target) && !PfpDropdown.contains(e.target) ){
            PfpDropdown.classList.remove('show')
        }
        if(e.target == modal){
            console.log('6');
            hideModal(modal.id)
        }
    })
});

// event fired by livewire
window.addEventListener('livewire-show-modal', event => {
    toggleModal(event.detail.modalId);
})