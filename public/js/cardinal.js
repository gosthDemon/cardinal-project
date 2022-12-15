//Variables
let openMenu = document.getElementById('open_menu');
let contentMenu = document.getElementById('content_menu');

let icons_top_bar = document.querySelectorAll('.icon-top-bar');

let top_bar_web = document.getElementById('top_bar_web');
let top_bar_mobile = document.getElementById('top_bar_mobile');

//Functions
openMenu.addEventListener('click',function(e) {
    contentMenu.classList.toggle('close-menu');
});
window.addEventListener("resize", function(){
    icons_top_bar.forEach(icon => {
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
        top_bar_web.style.display = "none";
        top_bar_mobile.style.display = "flex";
        contentMenu.style.display = "none";
        // this.alert('asdfas');
    }else{
        top_bar_web.style.display = "flex";
        contentMenu.style.display = "flex";
        top_bar_mobile.style.display = "none";
    }
}