const nav = document.getElementById('header')
window.addEventListener('scroll', fixedNav)

function fixedNav(){
    if(window.scrollY > header.offsetHeight -40){
        header.classList.add('navbar-fixed-top')

    }else{
        header.classList.remove('navbar-fixed-top')

    }
}