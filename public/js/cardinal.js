//Variables
let openMenu = document.getElementById('open_menu');
let contentMenu = document.getElementById('content_menu');

let iconsTopBar = document.querySelectorAll('.icon-top-bar');

let topBarWeb = document.getElementById('top_bar_web');
let topBarMobile = document.getElementById('top_bar_mobile');

let closeMenuMobile = document.getElementById('close_menu_mobile');
let openMenuMobile = document.getElementById('open_menu_mobile');
let mobileMenu = document.getElementById('mobile_menu');
let bodyMenuMobile = document.getElementById('body_menu_mobile');
//Functions
openMenu.addEventListener('click',function(e) {
    contentMenu.classList.toggle('close-menu');
});
window.addEventListener("resize", function(){
    iconsTopBar.forEach(icon => {
        if( window.innerWidth <= 1000){
            if(icon.classList.contains('fad')){
                icon.classList.remove('fad');
                icon.classList.add('fas');
            }
        }else{
            if(icon.classList.contains('fas')){
                icon.classList.remove('fas');
                icon.classList.add('fad');
            }
        }
    });
    if( window.innerWidth <= 768){
        contentMenu.classList.add('close-menu');
    }else{
        contentMenu.classList.remove('close-menu');
    }
    showMenu();
});
window.onload = showMenu();
function showMenu(){
    if( window.innerWidth <= 600){
        topBarWeb.style.display = "none";
        topBarMobile.style.display = "flex";
        contentMenu.style.display = "none";
        // this.alert('asdfas');
    }else{
        topBarWeb.style.display = "flex";
        contentMenu.style.display = "flex";
        topBarMobile.style.display = "none";
    }
}

openMenuMobile.addEventListener('click',function(e){
    mobileMenu.style.width = "100%";
    bodyMenuMobile.style.opacity = "1";
    mobileMenu.style.transition = ".5s";
});
closeMenuMobile.addEventListener('click',function(e){
    mobileMenu.style.width = "0px";
    bodyMenuMobile.style.opacity = ".1  ";
    mobileMenu.style.transition = ".5s";
    
});