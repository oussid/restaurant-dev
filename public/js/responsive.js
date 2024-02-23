const hamburgerButton = document.querySelector('.menu-button')
const adminContainer = document.querySelector('.admin-container')
const adminSidebar = document.querySelector('.admin-sidebar')
const chartContainers = document.querySelectorAll('#admin-chart')
const containers = document.querySelectorAll('.js-adjust-width')
let sidebarOpened = false

const toggleSidebar = ()=>{
    if(!sidebarOpened){
        if(adminContainer && adminSidebar){
            sidebarOpened = true
            // get the sidebar width
            let sideBarWidth = adminSidebar.offsetWidth
            adminSidebar.style.left = '0'
            hamburgerButton.style.marginLeft = `${sideBarWidth}px`
            hideElements('.hide-on-sidebar')
        }
    }else{
        if(adminContainer && adminSidebar){
            sidebarOpened = false
            adminSidebar.style.left = '-100%'
            hamburgerButton.style.marginLeft = '0'
            showElements('.hide-on-sidebar')
        }
    }
}

const adjustContainerWidth =  () => {
    if(window.innerWidth <= 1100){
        containers.forEach(container => {
            if(container){
                container.style.width = window.innerWidth + 'px'
            }
            
        });
    }else{
        containers.forEach(container => {
            if(container){
                container.style.width = '100%'
            }
            
        });
    }
}

const hideElements = (selector) => {
    let items = document.querySelectorAll(selector)
    items.forEach(item => {
        if(item) {
            item.classList.add('hidden')
        }
    });
}

const showElements = (selector) => {
    let items = document.querySelectorAll(selector)
    items.forEach(item => {
        if(item) {
            item.classList.remove('hidden')
        }
    });
}

const toggleElements = (selector) => {
    let items = document.querySelectorAll(selector)
    items.forEach(item => {
        if(item) {
            item.classList.toggle('hidden')
        }
    });
}


adjustContainerWidth()
window.addEventListener('resize', adjustContainerWidth)
hamburgerButton.addEventListener('click', toggleSidebar)