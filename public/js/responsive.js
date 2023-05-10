const hamburgerButton = document.querySelector('.menu-button')
const adminContainer = document.querySelector('.admin-container')
const adminSidebar = document.querySelector('.admin-sidebar')
const tableContainers = document.querySelectorAll('.table-container')
const chartContainers = document.querySelectorAll('#admin-chart')
let sidebarOpened = false

const toggleSidebar = ()=>{
    if(!sidebarOpened){
        if(adminContainer && adminSidebar){
            sidebarOpened = true
            // get the sidebar width
            let sideBarWidth = adminSidebar.offsetWidth
            adminSidebar.style.left = '0'
            hamburgerButton.style.marginLeft = `${sideBarWidth}px`
        }
    }else{
        if(adminContainer && adminSidebar){
            sidebarOpened = false
            adminSidebar.style.left = '-100%'
            hamburgerButton.style.marginLeft = '0'
        }
    }
}

const init = () => {
    let windowWidth = window.innerWidth
    console.log(windowWidth);
    if(windowWidth<=1100){
        // tables
        tableContainers.forEach(tableContainer => {
            tableContainer.style.width = `${windowWidth * 0.95}px`
        })
        
    }
    if(windowWidth>1100){
        tableContainers.forEach(tableContainer => {
            tableContainer.style.width = `100%`
        })

    }
    if(windowWidth<834){  
        console.log(chartContainers);
            chartContainers.forEach(chartContainer => {
                chartContainer.style.width = `${windowWidth * 0.95}px`
            })
    }
      

}

window.innerWidth
window.onresize = init

hamburgerButton.addEventListener('click', toggleSidebar)
init()